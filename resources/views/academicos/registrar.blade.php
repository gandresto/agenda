@extends('layouts.app')

@section('title')
    Registrar Académico
@endsection

@section('content')
    Random pass: {{random_str()}}
    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('grado_id') ? ' has-error' : '' }}">
            <label for="grado_id" class="col-md-4 control-label" required>Grado</label>
            <div class="col-md-6">
                <select class="form-control" name="grado_id" id="grado_id">
                    @foreach (App\Grado::all()->sortBy('jerarquia') as $grado)
                        <option value="{{$grado->id}}">{{$grado->id}}</option>
                    @endforeach                            
                </select>
                @if ($errors->has('grado_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('grado_id') }}</strong>
                    </span>                            
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
            <label for="nombre" class="col-md-4 control-label">Nombre</label>

            <div class="col-md-6">
                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required>

                @if ($errors->has('nombre'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('apellido_pat') ? ' has-error' : '' }}">
            <label for="apellido_pat" class="col-md-4 control-label">Apellido Paterno</label>

            <div class="col-md-6">
                <input id="apellido_pat" type="text" class="form-control" name="apellido_pat" value="{{ old('apellido_pat') }}" required>

                @if ($errors->has('apellido_pat'))
                    <span class="help-block">
                        <strong>{{ $errors->first('apellido_pat') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('apellido_mat') ? ' has-error' : '' }}">
            <label for="apellido_mat" class="col-md-4 control-label">Apellido Materno</label>

            <div class="col-md-6">
                <input id="apellido_mat" type="text" class="form-control" name="apellido_mat" value="{{ old('apellido_mat') }}" required>

                @if ($errors->has('apellido_mat'))
                    <span class="help-block">
                        <strong>{{ $errors->first('apellido_mat') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Contraseña</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="password-confirm" class="col-md-4 control-label">Confirmar contraseña</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Registrar
                </button>
            </div>
        </div>
    </form>
@endsection
