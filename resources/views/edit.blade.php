@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" align="center">
                <div class="card-header">
                    <h3>{{ __('Editar Módulo') }}</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('/modulos/edit', array('id' => $arrayModulos->id)) }}">
                        {{method_field('PUT')}}
                        @csrf
                        <div class="row gtr-uniform">
                            <div class="col-3 col-12-xsmall">
                                <input type="number" name="id" id="id" value="{{$arrayModulos->id}}" placeholder="C&oacute;digo">
                            </div>
                            <div class="col-12 col-12-xsmall">
                                <input type="text" name="nombre" id="nombre" value="{{$arrayModulos->nombre}}" placeholder="Nombre">
                            </div>
                            <div class="col-3 col-12-xsmall">
                                <input type="number" name="especialidad" id="especialidad" value="{{$arrayModulos->especialidad_id}}" placeholder="Especialidad" min="1" max="2">
                            </div>
                            <div class="col-3 col-12-xsmall">
                                <input type="number" name="ciclo" id="ciclo" value="{{$arrayModulos->ciclo_id}}" placeholder="Ciclo" min="1" max="6">
                            </div>
                            <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" value="Enviar" class="primary"></li>
                                    <li><input type="reset" value="Cancelar"></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="/" class="button medium scrolly">Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
