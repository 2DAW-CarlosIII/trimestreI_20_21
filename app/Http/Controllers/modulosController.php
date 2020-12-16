<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulo;

class modulosController extends Controller
{
    public function index(){
        return view('modulos', array('arrayModulos' => Modulo::all()));
    }

    public function getEdit($id){
        return view('edit', array('modulo' => Modulo::findOrFail($id)));
    }

    public function putEdit(Request $request){

        //Obtenemos el id del producto a modificar
        $id = $request->input('id');

        $m = Modulo::findOrFail($id); //Cargamos el objeto con los datos de la BBDD
        $m->nombre = $request->input('nombre');
        $m->precio = $request->input('especialidad_id');
        $m->categoria = $request->input('ciclo_id');
        $m->save();

        //Despues de actualizar el producto redirigimos a la vista
        return redirect('/modulos'.$id);
    }
}
