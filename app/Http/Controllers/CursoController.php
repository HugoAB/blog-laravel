<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        $curso = new Curso();

        $request->validate([
            'name' => 'required|min:3',
            'description' => 'required',
            'categoria' => 'required'
        ]);

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }

    public function show($id)
    {
        $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
        // return view('cursos.show', ['curso' => $id]);
    }

    public function edit($id)
    {
        $curso = Curso::find($id);
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {

        $request->validate([
            'name' => 'required|min:3',
            'description' => 'required',
            'categoria' => 'required'
        ]);

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }
}
