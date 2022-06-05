<?php

namespace App\Models\Plant\Catalogs;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carcamo extends Model
{
    use HasFactory;
    protected $table = "tblProcessCarcamo";
    public $timestamps = false;
    protected $primaryKey = 'dblProcessCarcamo';
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
