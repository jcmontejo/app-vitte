<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OxidacionDesinfeccion extends Model
{
    use HasFactory;
    protected $table = "tblProcessOxidacionDesinfeccion";
    public $timestamps = false;
    protected $primaryKey = 'dblProcessOxidacionDesinfeccion';
    use SoftDeletes;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->datSampling = Carbon::now();
        });

        static::updated(function ($model) {

        });
    }
}
