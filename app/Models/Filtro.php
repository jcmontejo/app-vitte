<?php

namespace App\Models;

use App\Models\Plant\Catalogs\Filtracion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filtro extends Model
{
    use HasFactory;
    protected $table = "tblFiltros";

    public function historial()
    {
        return $this->hasMany(Filtracion::class, 'intFiltro');
    }
}
