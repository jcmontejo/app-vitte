<?php

namespace App\Models\Plant\Catalogs;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WellPump extends Model
{
    use HasFactory;
    protected $table = "tblProcessWellPump";
    public $timestamps = false;
    protected $primaryKey = 'dblProcessWellPump';
    use SoftDeletes;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->datSampling = Carbon::now();
        });

        static::updated(function ($model) {

        });

        static::deleting(function ($model) {
            $log = new WellPumpLog();
            $log->indicator1 = $model->indicator1;
            $log->indicator2 = $model->indicator2;
            $log->indicator3 = $model->indicator3;
            $log->indicator4 = $model->indicator4;
            $log->datSampling = $model->datSampling;
            $log->dblCatPlant = $model->dblCatPlant;
            $log->save();
        });
    }
}
