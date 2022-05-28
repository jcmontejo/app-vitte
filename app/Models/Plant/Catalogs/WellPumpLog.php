<?php

namespace App\Models\Plant\Catalogs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WellPumpLog extends Model
{
    use HasFactory;
    protected $table = "tblProcessWellPumpLog";
    public $timestamps = false;
    protected $primaryKey = 'dblProcessWellPumpLog';
}
