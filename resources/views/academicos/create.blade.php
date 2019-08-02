@extends('layouts.app')

@section('title')
    Agregar Académico
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Agregar División</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/division">
                        {{ csrf_field() }}
                                            
                        <div class="form-group{{ $errors->has('siglas') ? ' has-error' : '' }}">
                            <label for="siglas" class="col-md-4 control-label">Siglas</label>

                            <div class="col-md-6">
                                <input id="siglas" type="text" class="form-control" name="siglas" value="{{ old('siglas') }}" required>

                                @if ($errors->has('siglas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('siglas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre Completo</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Añadir división
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
