<?php

namespace App\Repository\Eloquent;

use App\Repository\Interfaces\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class BaseRepository implements EloquentRepositoryInterface
{
	protected $model;

	/**
	 * BaseRepository constructor.
	 *
	 * @param Model $model
	 */
	public function __construct(Model $model)
	{
		$this->model = $model;
	}

	/**
	 * @param $id
	 * @return Model
	 */
	public function find($id) : ?Model
	{
		return $this->model->find($id);
	}

	/**
	 * @return Collection
	 */
	public function all($columns): Collection
	{
		return $this->model->all($columns);
	}

	/**
	 * @param $model
	 * @return bool
	 */
	public function delete($model) : ?bool
	{
		return $model->delete();
	}

	/**
	 * @param $id as table's primary identifier value
	 * @param $withRelation Text array with relationships
	 * @return $specific information regarding the id and its relationships
	 */
	public function withRelations($id ,$withRelation)
	{
		return $this->model::with($withRelation)->find($id);
	}

	/**
	 * @param $id
	 * @return bool
	 */
	public function update($id,array $props) : ?bool
	{
		\Log::info(print_r([
			$id,$props
		], true));
		return $this->model::find($id)->update($props);
	}
}
