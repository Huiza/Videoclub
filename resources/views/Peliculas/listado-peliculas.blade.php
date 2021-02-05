@extends('layouts.layout')
@section('title')
    Listado de peliculas
@endsection

@section('content')
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-windows"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Peliculas</h2>
                                    <p>Listado de peliculas</p>
                                </div>
                            </div>
                        </div>

                        <br><br>
                        <div class="modal-footer">
                            <button formtarget="_blank" data-toggle="tooltip" data-placement="left" title="Descargar reporte"class="btn btn-default"><i class="notika-icon notika-down-arrow">
                            <i> Descargar PDF</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="breadcomb-wp">
                        <div class="breadcomb-icon">
                            <i class="notika-icon notika-edit"></i>
                        </div>
                        <div class="breadcomb-ctn">
                            <h2>Nueva película</h2>
                            <p>Agregar una nueva película</p>
                            <div class="form-example-int mg-t-15">
                                <a href="{{route('crear_pelicula')}}"><button class="btn btn-success notika-btn-success"><span class="glyphicon glyphicon-plus"></span> Agregar</button></a>
                            </div>
                        </div>
                    </div>
                    <br><br><br>
                   
                   <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Título</th>
                                    <th>Año de estreno</th>
                                    <th>Categoría</th>
                                    <th>Disponiblidad</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach($peliculas as $pelicula)
                                <tr>
                                    <td>{{$pelicula->id}}</td>
                                    <td>{{$pelicula->titulo}}</td>
                                    <td>{{$pelicula->anio_estreno}}</td>
                                    <td>{{$pelicula->categoria->nombre_categoria}}</td>
                                    <td>{{$pelicula->disponibilidad}}</td>
                                    <td>
                                        <a class="btn btn-default notika-btn-default" href="{{route('editar_pelicula', $pelicula->id)}}"><span class="glyphicon glyphicon-pencil"></span> Editar</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection