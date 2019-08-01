<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;

class DivisionController extends Controller
{
    public function index()
    {
        $divisiones = Division::all();
        return view('division.index', compact('divisiones'));
    }

    public function show($division)
    {
        $division = Division::findOrFail($division);
        return view('division.show', compact('division'));
    }

    public function create()
    {
        return view('division.create');
    }

    public function store(Request $request)
    {
        
        $data = $this->validate($request, [
            'siglas' => 'required|unique:divisions|max:255|string',
            'nombre' => 'required|unique:divisions|max:255|string',
        ]);

        #dd($request['siglas']);

        Division::create([
            'siglas' => $request['siglas'],
            'nombre' => $request['nombre'],
        ]);
        
        alert('División agregada');

        return redirect('/division');
    }
}
