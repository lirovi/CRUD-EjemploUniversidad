<?php

namespace App\Http\Controllers\Dbweb1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Horario;

class HorarioController extends Controller
{
    //
    public function index()
    {
      //return view('Vistas.index');
      $horarios = Horario::orderBy('id','docente_id','aula_id','materia_id','carrera_id','semestre','hora_init','hora_end') ->paginate();
      return view('horario.index', compact('horarios'));
    }

    public function show()
    {

    }
    public function create()
    {
       return view('horario.create');
    }

    public function store(Request $request)
     {
       $horarios= new Horario();
       $Horarios->name = $request->input('name');
       $horarios->save();
       //return view('Vistas.horario', compact('horarios'));
       return('Grabado');
     }

}
