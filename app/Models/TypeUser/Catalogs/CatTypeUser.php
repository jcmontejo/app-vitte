<?php

namespace App\Models\TypeUser\Catalogs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatTypeUser extends Model
{
    use HasFactory;
    protected $table = "tblCatTypeUser";
    public $timestamps = false;
    protected $primaryKey = 'dblCatTypeUser';

    public function getMethod()
    {
        return $this->dblCatTypeUser ? 'put' : 'post';
    }

    public function getUrl()
    {
        return $this->dblCatTypeUser ? 'edit' : 'create';
    }
}
