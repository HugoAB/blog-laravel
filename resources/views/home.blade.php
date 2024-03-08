@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <h1>Bienvenido a la Página Principal!!</h1>
    <a href="{{route('cursos.index')}}">Ir a nuestros cursos</a>
@endsection