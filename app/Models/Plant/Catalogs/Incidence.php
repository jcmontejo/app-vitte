<?php

namespace App\Models\Plant\Catalogs;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Incidence extends Model
{
    use HasFactory;
    protected $table = "tblIncidencePlant";
    public $timestamps = false;
    protected $primaryKey = 'dblIncidencePlant';
    use SoftDeletes;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->datIncidende = Carbon::now();
        });

        static::updated(function ($model) {

        });

        static::deleting(function ($model) {

        });
    }
}
