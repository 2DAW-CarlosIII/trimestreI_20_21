<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulo

class ModulosController extends Controller
{
    public function getIndex() {

		return view('modulos'), array('arrayModulos' => Modulo::all()));

	}

	public function getEdit($id) {

		return view('edit', array('modulo' => Modulo::findOrFail($id)) ));

	}
}
