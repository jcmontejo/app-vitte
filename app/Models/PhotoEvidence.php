<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoEvidence extends Model
{
    use HasFactory;
    protected $table = 'photo_evidences';

    public function evidence()
    {
        return $this->belongsTo(Evidence::class);
    }
}
