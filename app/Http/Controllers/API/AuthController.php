<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use \Laravel\Passport\Token;
use \Lcobucci\JWT\Configuration; /* composer require lcobucci/jwt */

class AuthController extends Controller
{
        /**
     * Login and token creation
     */


    public function login(Request $request)
    {
        $this->checkTooManyFailedAttempts();
        $user = User::where('email', $request->email)->first();

        try {
            $credentials = request(['email', 'password']);
            // return response()->json($credentials);

            if (!Auth::attempt($credentials)) {
                RateLimiter::hit($this->throttleKey(), $seconds = 3600);
                return response()->json([
                    'message' => 'Unauthorized',
                ], 401);
            }

            if (!Hash::check($request->password, $user->password, [])) {
                throw new Exception('Error occured while logging in.');
            }

            $user = $request->user();
            $tokenResult = $user->createToken('Personal Access Token');

            $token = $tokenResult->token;
            // $token =
            $token->expires_at = Carbon::now()->addDays(1);

            $userLogued = Auth::user();
            $imgProfile = '';
            $dblUser = $userLogued->id;
            $usr = User::find($dblUser);
            $companies = [];
            $token->save();

            RateLimiter::clear($this->throttleKey());

            return response()->json([
                'access_token' => $tokenResult->accessToken,
                'token_type' => 'Bearer',
                'expires_at' => Carbon::parse($token->expires_at)->toDateTimeString(),
                'user' => [
                    'dblUser' => $userLogued->id,
                    'strUser' => $userLogued->email,
                    'strFullName' => $userLogued->name. ' '. $userLogued->strLastName,
                    'strImgProfile' => $imgProfile,
                    'strEmail' => $userLogued->email,
                    'strTokenApp' => '',
                    'strDeviceApp' => 'ANDROID',
                    'bitActive' => 1,
                ],
                'companies' => $companies
            ]);
        } catch (Exception $error) {
            return response()->json([
                'status_code' => 500,
                'message' => $error->getMessage(),
                'error' => $error,
            ]);
        }
    }

    public function checkTokenExpired(Request $request)
    {
        $tokenId = Configuration::forUnsecuredSigner()->parser()->parse($request->access_token)->claims()->get('jti');
        $token = Token::find($tokenId);
        if (Carbon::parse($token->expires_at)->toDateTimeString() > Carbon::now()->toDateTimeString()) {
            $token->expires_at = Carbon::now()->addDays(1);
            $token->save();
            $userLogued = User::find($token["user_id"]);
            $imgProfile = '';
            return response()->json([
                'status_code' => 200,
                'message' => "Authenticated",
                'access_token' => $request->access_token,
                'user' => [
                    'dblUser' => $userLogued->id,
                    'strUser' => $userLogued->email,
                    'strFullName' => $userLogued->name. ' '. $userLogued->strLastName,
                    'strImgProfile' => $imgProfile,
                    'strEmail' => $userLogued->email,
                    'bitActive' => 1,
                ],
            ]);
        }
        return response()->json([
            'status_code' => 401,
            'message' => "Unauthenticated"
        ]);
    }

    /**
     * Logout (void token)
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json([
            'message' => 'Successfully logged out',
        ]);
    }

    /**
     * Get User object as json
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }

    /**
     * Get the rate limiting throttle key for the request.
     *
     * @return string
     */
    public function throttleKey()
    {
        return Str::lower(request('strUser')) . '|' . request()->ip();
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @return void
     */
    public function checkTooManyFailedAttempts()
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 1000)) {
            return;
        }

        throw new Exception('IP address banned. Too many login attempts.');
    }
}
