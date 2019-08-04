@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="h1">
                ‘{{$role}}’ : No tienes permiso para ver esta página 
            </div>
        </div>
    </div>
</div>
@endsection
