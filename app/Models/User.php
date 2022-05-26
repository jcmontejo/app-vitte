<?php

namespace App\Models;

use App\Models\Plant\Catalogs\CatPlant;
use App\Models\TypeUser\Catalogs\CatTypeUser;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getMethod()
    {
        return $this->id ? 'put' : 'post';
    }

    public function getUrl()
    {
        return $this->id ? 'edit' : 'create';
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->intConsecutive = User::max('intConsecutive') + 1;
            $model->datCreate = Carbon::now();
        });
    }

    public function plant(): BelongsTo
    {
        return $this->belongsTo(CatPlant::class,'dblCatPlant','dblCatPlant');
    }

    public function type_user(): BelongsTo
    {
        return $this->belongsTo(CatTypeUser::class,'dblCatTypeUser','dblCatTypeUser');
    }
}
