@extends('layouts.app')

@section('title')
    Académicos
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Academicos</div>
                <div class="panel-body">
                    <div class="p-1">
                        <div class="row">
                            <div class="col-md-12">
                                <a type="button" class="btn btn-primary" href="{{route('register')}}">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                    <span class="pl-6">Añadir académico</span>                                        
                                </a>
                            </div>                            
                        </div> 
                    </div>
                    <div class="p-1">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Buscar" aria-describedby="basic-addon2">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>                                    
                                    </span>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <select name="sel-columna" id="inputsel-columna" class="form-control">
                                    <option value="">-- Select One --</option>
                                    <option value="">col1</option>
                                    <option value="">col2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    

                    
                    <div class="table-responsive pt-1">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Grado</th>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Correo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($academicos as $academico)
                                    <tr>
                                        <td>{{$academico->id}}</td>
                                        <td>{{$academico->grado->id}}</td>
                                        <td>{{$academico->nombre}}</td>
                                        <td>{{$academico->apellido_pat}}</td>
                                        <td>{{$academico->apellido_mat}}</td>
                                        <td>{{$academico->user->email}}</td>
                                        <td>Editar, Borrar</td>
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
