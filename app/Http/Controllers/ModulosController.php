<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulo;

class ModulosController extends Controller
{
    public function getIndex()
    {
		return view('modulos', array('arrayModulos' => Modulo::all()));
    }

    public function getEdit($id)
    {
        return view('modulos.edit', array('modulos' => Modulo::findOrFail($id)));

    }

    public function putEdit(Request $request)
    {
        $id = $request->input('id');;
        $modulos = Modulo::findOrFail($id);
        $modulos->nombre = $request->input('nombre');
        $modulos->especialidad = $request->input('especialidad');
        $modulos->ciclo = $request->input('ciclo');
        $modulos->save();
        return redirect('/modulos'.$id);


    }

}
