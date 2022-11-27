<?php
namespace App\Repository\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * * Interface EloquentRepositoryInterface
 * * @package App\Repositories
 * */
interface EloquentRepositoryInterface
{

	/**
	 * @param $id
	 * @return Model
	 */
	public function find($id): ?Model;

	/**
	 * @param $Model
	 * @return Boolean
	 */
	//public function delete($model): ?Boolean;

	public function all($columns): ?Collection;

	/**
	 * @param $id
	 * @return bool
	 */
	public function delete($model) : ?bool;
}
?>
