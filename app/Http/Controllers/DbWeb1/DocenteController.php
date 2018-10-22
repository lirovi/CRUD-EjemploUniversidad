<?php

namespace App\Http\Controllers\Dbweb1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Docente;

class DocenteController extends Controller
{
    //
    public function index()
    {
      //return view('Vistas.index');
      $docentes = Docente::orderBy('id','name') ->paginate();
      return view('docente.index', compact('docentes'));
    }

    public function show()
    {

    }
    public function create()
    {
       return view('docente.create');
    }

    public function store(Request $request)
     {
       $docentes= new Docente();
       $docentes->name = $request->input('name');
       $docentes->save();
      // return view('docente.index');
       return('Grabado');
     }

}
