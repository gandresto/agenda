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
}
