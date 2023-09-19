<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Animal;
use App\Http\Requests\CrearAnimalRequest;

class animalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $animales = Animal::all();
        return view("animales.index",["animales"=>$animales]); //usar doble comillas con comilla simple da error
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearAnimalRequest $request)
    {

        $imagen = $request->imagen;
        $nombreImagen = $imagen->getClientOriginalName();
        $ruta= public_path("assets/imagenesAnimales/");
        $imagen->move($ruta,$nombreImagen);

        $animal = new Animal();
        $animal->especie = $request->especie;
        $animal->slug = Str::slug($request->especie);
        $animal->peso = $request->peso;
        $animal->altura = $request->altura;
        $animal->fechaNacimiento = $request->fechaNacimiento;
        $animal->imagen = $nombreImagen;
        $animal->alimentacion = $request->alimentacion;
        $animal->descripcion = $request->descripcion;

    try{

        $animal->save();
        return redirect()->route('animales.show',$animal->id);

    }
catch(\Illuminate\Database\QueryException $ex)
{
return redirect()->route('animales.index');
}


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        return view("animales.show",["animal"=>$animal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {

        //$animalSelect = $this->animales[$animal];
        //return view("animales.edit",['animal'=>$animalSelect]);
        return view("animales.edit",["animal"=>$animal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {

        $imagen = $request->imagen;
        $nombreImagen = $imagen->getClientOriginalName();
        $ruta= public_path("assets/imagenesAnimales/");
        $imagen->move($ruta,$nombreImagen);

        $animal->especie = $request->especie;
        $animal->slug = Str::slug($animal->especie);
        $animal->peso = $request->peso;
        $animal->altura = $request->altura;
        $animal->fechaNacimiento = $request->fechaNacimiento;
/*
        if (!empty($request->imagen) && $request->imagen->isValid()) {
            Storage::disk('animales')->delete($animal->iamgen);
            $animal->imagen = $request->imagen->store('','animales');
        }
*/
        $animal->alimentacion = $request->alimentacion;
        $animal->descripcion = $request->descripcion;
        $animal->imagen = $nombreImagen;
        try{

            $animal->save();
            return redirect()->route('animales.show',["animal"=>$animal]);

        }
    catch(\Illuminate\Database\QueryException $ex)
    {
    return redirect()->route('animales.index');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
