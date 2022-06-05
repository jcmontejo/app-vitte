<?php

namespace App\Models\Plant\Catalogs;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    public function well(): BelongsTo
    {
        return $this->belongsTo(WellPump::class,'dblCatPlant','dblCatPlant');
    }

    public function oxidacion(): BelongsTo
    {
        return $this->belongsTo(Oxidacion::class,'dblCatPlant','dblCatPlant');
    }

    public function decloracion(): BelongsTo
    {
        return $this->belongsTo(Decloracion::class,'dblCatPlant','dblCatPlant');
    }

    public function filtracion(): BelongsTo
    {
        return $this->belongsTo(Filtracion::class,'dblCatPlant','dblCatPlant');
    }

    public function osmosis(): BelongsTo
    {
        return $this->belongsTo(Osmosis::class,'dblCatPlant','dblCatPlant');
    }

    public function desinfeccion(): BelongsTo
    {
        return $this->belongsTo(Desinfeccion::class,'dblCatPlant','dblCatPlant');
    }
}
