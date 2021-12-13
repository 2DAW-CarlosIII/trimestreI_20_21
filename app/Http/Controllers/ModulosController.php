<?php

namespace App\Http\Controllers;

use App\Models\Modulo;
use Illuminate\Http\Request;

class ModulosController extends Controller
{
    public function index()
    {
        $modulos = Modulo::all();
        return view('modulos',
        array(
            'ArrayModulos' => $modulos)
        );
    }
    public function edit($id)
    {
        $modulos = Modulo::findOrFail($id);
        return view('edit',
        array(
            'arrayModulos' => $modulos)
        );
    }
    public function putEdit(Request $request, $id)
    {
        $modulos = Modulo::findOrFail($id);
        $modulos->nombre = $request->input('nombre');
        $modulos->especialidad_id = $request->input('especialidad');
        $modulos->ciclo_id = $request->input('ciclo');
        $modulos->save();
        return redirect(url('/modulos'));
    }
}
