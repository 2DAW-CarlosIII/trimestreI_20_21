<?php

namespace App\Http\Controllers;

use App\Models\Modulo;
use Illuminate\Http\Request;

class ModulosController extends Controller
{
    public function getIndex(){
        $modulos = Modulo::all();
        return view('modulos', array('arrayModulos' => $modulos));
    }

    public function getEdit($id){
        $modulo = Modulo::findOrFail($id);
        return view('edit', array('modulo' => $modulo));
    }

    public function putEdit(Request $request, $id)
    {
        $moduloEditado = $request->all();
        $modulo = Modulo::findOrFail($id);

        $modulo->id = $moduloEditado['id'];
        $modulo->nombre = $moduloEditado['nombre'];
        $modulo->ciclo_id = $moduloEditado['ciclo'];
        $modulo->especialidad_id = $moduloEditado['especialidad'];
        $modulo->save();

        return redirect()->action([ModulosController::class, 'getIndex']);
    }
}
