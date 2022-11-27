<?php
namespace App\Repository\Eloquent;

use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use App\Models\Finance\WorkFlow;
use App\Models\User;
use \Lcobucci\JWT\Configuration; /* composer require lcobucci/jwt */
use \Laravel\Passport\Token;
use DB;

class TokenRepository extends BaseRepository
{
	/**
	 *
	 * @param $model
	 */
	protected Token $token ;
	public function __construct($token)
	{
		$tokenId = Configuration::forUnsecuredSigner()->parser()->parse($token)->claims()->get('jti');
        $this->token = Token::find($tokenId);
		parent::__construct($this->token);
	}

	public function getUser(){
		return $this->token;
	}
}
