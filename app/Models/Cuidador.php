<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;
use App\Models\Titulacion;
class Cuidador extends Model
{
    use HasFactory;
    public $table = "cuidadores";

    protected $fillable = ['nombre','slub'];

    public function getRouteKeyName(){
        return 'slug';
    }

    public function animales(){
        return $this->belongsToMany(Animal::class);
    }

    public function titulaciones(){
        return $this->belongsTo(Titulacion::class,'id_titulacion1')->get()
        ->merge($this->belongsTo(Titulacion::class,'id_titulacion2')->get());
    }

}


