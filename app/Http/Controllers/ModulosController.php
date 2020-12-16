<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulo;

class ModulosController extends Controller
{
    public function getIndex(){
        return view('modulos', ['arrayModulos' => Modulo::all()]);
    }

    public function getEdit($id){
        return view('edit', ['modulo' => Modulo::findOrFail($id)]);
    }
}
