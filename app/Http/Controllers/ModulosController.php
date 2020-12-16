<?php

namespace App\Http\Controllers;
use App\Models\Modulo;
use Illuminate\Http\Request;

class ModulosController extends Controller
{
    public function index(){
        return view('modulos', array('arrayModulos'=>Modulo::all()));
    }

    public function putModulo(Request $request){
        $modulo =  Modulo::findOrFail($request->input('id'));
        $modulo->nombre=$request->input('nombre');
        $modulo->especialidad_id = $request->input('especialidad');
        $modulo->ciclo_id = $request->input('ciclo');
        $modulo->save();
        return redirect('/modulos');
    }

}
