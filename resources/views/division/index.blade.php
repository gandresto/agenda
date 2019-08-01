@extends('layouts.app')

@section('title')
    Divisiones
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Divisiones</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($divisiones as $division)
                        <div class="row">
                            {{$division->nombre}}
                        </div>                        
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
