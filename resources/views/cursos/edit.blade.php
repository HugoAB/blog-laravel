@extends('layouts.plantilla')

@section('title', 'Editar Curso')

@section('content')
    <h1>Aqui puedes editar un Curso!</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST">
        @csrf
        @method('put')
        
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" value="{{old('name', $curso->name)}}">

            @error('name')
                <p>*{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" value="{{old('slug', $curso->slug)}}">
    
            @error('slug')
                <p>*{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="description">Descripción</label>
            <textarea name="description" id="description" rows="5">{{old('description', $curso->description)}}</textarea>

            @error('description')
                <p>*{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="categoria">Categoría</label>
            <input type="text" name="categoria" id="categoria" value="{{old('categoria', $curso->categoria)}}">

            @error('categoria')
                <p>*{{$message}}</p>
            @enderror
        </div>
        <button type="submit">Actualizar</button>
    </form>
@endsection