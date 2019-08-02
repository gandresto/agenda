<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academico;

class AcademicosController extends Controller
{
    public function index(Academico $academicos)
    {
        $academicos = Academico::all();
        return view('academicos.index', compact('academicos'));
    }

    public function show(Academico $academico)
    {        
        return view('academicos.show', compact('academico'));
    }

    public function create()
    {
        return view('academicos.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'grado_id' => 'required|max:8|string',
            'nombre' => 'required|max:255|string',
            'apellido_pat' => 'required|max:255|string',
            'apellido_mat' => 'required|max:255|string',
        ]);

        #dd($request);

        Academico::create([
            'grado_id' => $request['grado_id'],
            'nombre' => $request['nombre'],
            'apellido_pat' => $request['apellido_pat'],
            'apellido_mat' => $request['apellido_mat'],
        ]);
        
        alert('Academico agregado');

        return redirect(route('academicos.index'));
    }
}
