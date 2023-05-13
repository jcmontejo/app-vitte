<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    use HasFactory;
    protected $table = 'evidence';

    public function point()
    {
        return $this->belongsTo(Point::class);
    }

    public function photoEvidences()
    {
        return $this->hasMany(PhotoEvidence::class);
    }
}
