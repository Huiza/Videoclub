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
        //Retorna la vista del listado de peliculas
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
        //Retorna la vista de crear un película
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
        //Creación de una nueva pelicula con los datos ingresados desde la el formulario
        $pelicula = new Pelicula();
        $pelicula->titulo = $request->titulo;
        $pelicula->anio_estreno = $request->anio_estreno;
        $pelicula->categoria_id = $request->categoria_id;
        $pelicula->disponibilidad = "disponible";//Por defecto será disponible ya que la película es nueva.
        $pelicula->save();//Guarda los datos de la película
        return redirect()->route('peliculas');//Retorna a la vista del listado de peliculas
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
        
        $pelicula = Pelicula::findOrFail($id);//Se obtiene la pelicula con el id seleccionado
        $categorias = Categoria::all();//Muestra el listado de las categorias
    
        return view('Peliculas/edit-pelicula', compact('pelicula','categorias'));// Retorna a la vista de Editar pelicula
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
        //Se obtine la pelicula con el id que se desea actualizar
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->titulo = $request->titulo;
        $pelicula->anio_estreno = $request->anio_estreno;
        $pelicula->categoria_id = $request->categoria_id;
        $pelicula->disponibilidad = $request->disponibilidad;
        $pelicula->update();// Se actualizan los datos de la pelicula seleccionada
        return redirect()->route('peliculas');// Regresa a la vista del listado de peliculas
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
        $pelicula = Pelicula::findOrFail($id);
        $película->delete();

        return redirect()->route('peliculas');
    }
}
