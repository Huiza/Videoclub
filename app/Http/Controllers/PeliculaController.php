<?php

namespace App\Http\Controllers;

use App\Pelicula;
use App\Categoria;
use App\Http\Requests\PeliculaRequest;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Muestra el listado de todas las peliculas disponibles
        $peliculas = Pelicula::all();
        return view('Peliculas/listado-peliculas',compact('peliculas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Muestra el listado de categorias disponibles
        $categorias =  Categoria::all();
        return view('Peliculas/create-pelicula',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PeliculaRequest $request)
    {
        //
        $pelicula = new Pelicula();
        $pelicula->titulo = $request->titulo;
        $pelicula->anio_estreno = $request->anio_estreno;
        $pelicula->categoria_id = $request->categoria_id;
        $pelicula->save();
        return redirect()->route('peliculas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pelicula = Pelicula::findOrFail($id);
        $categorias      = Categoria::all();
    
        return view('Peliculas/edit-pelicula', compact('pelicula','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PeliculaRequest $request, $id)
    {
        //
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->titulo = $request->titulo;
        $pelicula->anio_estreno = $request->anio_estreno;
        $pelicula->categoria_id = $request->categoria_id;
        $pelicula->update();
        return redirect()->route('peliculas');
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
