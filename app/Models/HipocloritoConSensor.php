<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HipocloritoConSensor extends Model
{
    use HasFactory;
    protected $table = "tblProcessHipocloritoConSensor";
    public $timestamps = false;
    protected $primaryKey = 'dblProcessHipocloritoConSensor';
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
