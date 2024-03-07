@extends('layouts.plantilla')

@section('title', 'Nuestros Cursos')

@section('content')
    <h1>Nuestros Cursos</h1>
    <a href="{{route('cursos.create')}}">Crear Curso</a>
    <ul>
        @foreach($cursos as $curso)
            <a href="{{route('cursos.show', $curso->id)}}">
                <li>{{ $curso->name }}</li>
            </a>
        @endforeach
    </ul>

    {{ $cursos->links() }}
@endsection