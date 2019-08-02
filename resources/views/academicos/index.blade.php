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
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
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
