<?php

namespace App\Http\Controllers;

use App\Models\Modulos;
use Illuminate\Http\Request;

class ModulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $modulos = Modulos::all();
        return view('modulos', compact('modulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modulo = Modulos::find($id);
        if (!$modulo) {
            return redirect()->route('modulos.lista');  //Si el módulo no existe, redirige a la tabla de módulos para evitar problemas.
        }

        return view('edit', compact('modulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if ($request != null) {
            $modulo = Modulos::find($request->id);
            if (!$modulo) {
                return redirect()->route('modulos.lista');  //Si el módulo no existe, redirige a la tabla de módulos para evitar problemas.
            } else {
                $modulo->fill($request->only("nombre", "especialidad", "ciclo"));
                $modulo->save();
            }
        }
        return redirect()->route('modulos.lista'); //Redirigimos para que el usuario vea los cambios
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
