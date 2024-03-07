@extends('layouts.plantilla')

@section('title', 'Nuevo Curso')

@section('content')
<h1>Aqui puedes crear un Nuevo Curso!</h1>
<form action="{{route('cursos.store')}}" method="POST">
    @csrf
    <div>
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="{{old('name')}}">

        @error('name')
            <p>*{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="description">Descripción</label>
        <textarea name="description" id="description" rows="5">{{old('description')}}</textarea>

        @error('description')
            <p>*{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="categoria">Categoría</label>
        <input type="text" name="categoria" id="categoria" value="{{old('categoria')}}">

        @error('categoria')
            <p>*{{$message}}</p>
        @enderror
    </div>
    <button type="submit">Enviar</button>
</form>
@endsection