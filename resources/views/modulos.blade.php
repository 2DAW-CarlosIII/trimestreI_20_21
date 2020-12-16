@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" align="center">
                <div class="card-header">
                    <h3>{{ __('Desarrollo de Aplicaciones Web') }}</h3>
                </div>
                <div class="card-body">
                    <table>
                        <thead>
                        <tr>
                            <th><b>Nombre</b></th>
                            <th><b>Especialidad</b></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($modulos as $modulo)
                        <tr>
                            <th>{{$modulo->nombre}}</th>
                            <th>{{$modulo->especialidad_id}} ({{$modulo->especialidad->nombre}})</th>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="/" class="button medium scrolly">Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
