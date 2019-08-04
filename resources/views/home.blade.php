@extends('layouts.app')
@section('title')
    Calendario
@endsection
@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
@endsection
