@extends('layouts.layout')

@section('title', 'Edicion de pelicula')

@section('content')
<div class="breadcomb-area" >
    <div class="container" >
        <div class="row" >
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-form"></i>
                                </div>
                                
                                <div class="breadcomb-ctn">
                                    <h2>Edicion de película</h2>
                                    <p>Ingrese los datos de la película</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-element-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list">
                    <div class="basic-tb-hd">
                        <h2>Película</h2>
                        <p>Complete los campos del formulario</p>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-example-wrap">
                                <form action="{{route('actualizar_pelicula',$pelicula->id)}}" method="POST" >
                                    @method('PUT')
                                    @csrf
                                    <label for="titulo">Título <small style="color:#16D195;" >*</small></label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-support"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="titulo" placeholder="Título de la película" value="{{$pelicula->titulo}}">
                                        </div>
                                    </div>
                                    <label for="anio_estreno">Año de estreno <small style="color:#16D195;" >*</small></label>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-support"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="anio_estreno" placeholder="Año de estreno" value="{{$pelicula->anio_estreno}}">
 
                                        </div>
                                    </div>


                                    <label for="categoria_id" >Categoría <small style="color:#16D195;" >*</small></label>
                                    <div class="form-example-int mg-t-15">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select class="selectpicker" name="categoria_id">
                                                    <option value="">-Seleccione un género-</option>
                                                    @foreach($categorias as $categoria)
                                                    <option value="{{$categoria->id}}" {{ ($pelicula->categoria_id == $loop->iteration ? "selected":"") }}>{{$categoria->nombre_categoria}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <label for="disponibilidad" >Disponibilidad <small style="color:#16D195;" >*</small></label>
                                    <div class="form-example-int mg-t-15">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <input type="radio" name="disponibilidad" value="disponible">Disponible
                                                <input type="radio" name="disponibilidad" value="No disponible">No disponible
                                    
                                            </div>
                                        </div>
                                    </div>
                                    <br><br><br>
                            <div class="form-example-int mg-t-15">
                                <button class="btn btn-success notika-btn-success">Actualizar pelicula</button>
                                <a class="btn btn-danger notika-btn-danger" href="#">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection



