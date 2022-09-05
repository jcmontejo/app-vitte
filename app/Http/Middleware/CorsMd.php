<?php

namespace App\Http\Middleware;

use App\Models\User;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use \Laravel\Passport\Token;
use \Lcobucci\JWT\Configuration; /* composer require lcobucci/jwt */

class CorsMd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        // if($request->path() != 'api/auth/user' && $request->path() != 'api/auth/login'){
        //     $token =  $this->getBearerToken();
        //     $result = $this->checkTokenExpired($token);
        //     if($result[1] != 200){
        //         return $result[0];
        //     }
        // }

        return $next($request)
        //Url a la que se le dará acceso en las peticiones
        ->header("Access-Control-Allow-Origin", "*")
        //Métodos que a los que se da acceso
        ->header("Access-Control-Allow-Methods", "GET, POST, PUT, DELETE")
        //Headers de la petición
        ->header("Access-Control-Allow-Headers", "X-Requested-With, Content-Type, X-Token-Auth, Authorization");

    }


    private function getAuthorizationHeader()
    {
        $headers = null;

        if (isset($_SERVER['Authorization'])) {
            $headers = trim($_SERVER["Authorization"]);
        } else if (isset($_SERVER['HTTP_AUTHORIZATION'])) { //Nginx or fast CGI
            $headers = trim($_SERVER["HTTP_AUTHORIZATION"]);
        } elseif (function_exists('apache_request_headers')) {
            $requestHeaders = apache_request_headers();
            // Server-side fix for bug in old Android versions (a nice side-effect of this fix means we don't care about capitalization for Authorization)
            $requestHeaders = array_combine(array_map('ucwords', array_keys($requestHeaders)), array_values($requestHeaders));
            //print_r($requestHeaders);
            if (isset($requestHeaders['Authorization'])) {
                $headers = trim($requestHeaders['Authorization']);
            }
        }

        return $headers;
    }

    private function getBearerToken()
    {
        $headers = $this->getAuthorizationHeader();
        // HEADER: Get the access token from the header
        if (!empty($headers)) {
            if (preg_match('/Bearer\s(\S+)/', $headers, $matches)) {
                return $matches[1];
            }
        }
        return null;
    }

    public function checkTokenExpired($token)
    {
        $tokenId = Configuration::forUnsecuredSigner()->parser()->parse($token)->claims()->get('jti');
        $token = Token::find($tokenId);
        if ($token) {
            if (Carbon::parse($token->expires_at)->toDateTimeString() > Carbon::now()->toDateTimeString()) {
                $token->expires_at = Carbon::now()->addDays(1);
                $token->save();
                $userLogued = User::find($token["user_id"]);
                return [response()->json([
                    'status_code' => 200,
                    'message' => "Authenticated",
                    'access_token' => $token,
                    'user' => [
                        'dblUser' => $userLogued->id,
                        'strUser' => $userLogued->email,
                        'strFullName' => $userLogued->name. ' '. $userLogued->strLastName,
                        'strEmail' => $userLogued->email,
                        'bitActive' => 1,
                    ],
                ]), 200];
            }
        }
        return [response()->json([
            'status_code' => 401,
            'message' => "Unauthenticated",
        ]), 401];
    }
}
