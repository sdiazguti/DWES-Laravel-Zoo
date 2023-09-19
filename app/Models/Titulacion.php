<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cuidador;
class Titulacion extends Model
{
    use HasFactory;

    public $table = "titulaciones";

    public function getRouteKeyName(){
        return 'slug';
    }

    public function cuidadores(){
        return $this->hasMany(Cuidador::class,'id_titulacion1')->get()
        ->merge($this->hasMany(Cuidador::class,'id_titulacion2')->get());
    }

}
