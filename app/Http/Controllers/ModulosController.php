<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulo;

class ModulosController extends Controller
{
    public function getIndex()
    {
        return redirect("/");
    }


    public function getEdit($id){
    
    return view('edit', array('modulos' => Modulo::findOrFail($id)));
	}


	public function putEdit(Request $request){
       $id = $request->input('id');
      
       $modulo = Modulo::findOrFail($id);
       $modulo->nombre = $request->input('nombre'); 
       $modulo->especialidad_id = $request->input('especialidad_id'); 
       $modulo->ciclo_id = $request->input('ciclo_id'); 
        
        $producto->save();
        return redirect('/modulos');
    
  }
}
