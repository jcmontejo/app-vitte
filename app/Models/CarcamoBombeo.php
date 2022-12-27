<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarcamoBombeo extends Model
{
    use HasFactory;
    protected $table = "tblProcessCarcamoBombeo";
    public $timestamps = false;
    protected $primaryKey = 'dblProcessCarcamoBombeo';
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
