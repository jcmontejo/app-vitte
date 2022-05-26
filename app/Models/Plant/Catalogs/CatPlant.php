<?php

namespace App\Models\Plant\Catalogs;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatPlant extends Model
{
    use HasFactory;
    protected $table = "tblCatPlant";
    public $timestamps = false;
    protected $primaryKey = 'dblCatPlant';

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->intConsecutive = CatPlant::max('intConsecutive') + 1;
            $model->datCreate = Carbon::now();
        });
    }

    public function getMethod()
    {
        return $this->dblCatPlant ? 'put' : 'post';
    }

    public function getUrl()
    {
        return $this->dblCatPlant ? 'edit' : 'create';
    }
}
