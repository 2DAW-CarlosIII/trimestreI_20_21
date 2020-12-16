@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" align="center">
                <div class="card-header">
                    <h3>{{ __('Desarrollo de Aplicaciones Web') }}</h3>
                </div>
                <div class="row">

                    @foreach( $arrayModulos as $modulo )

                    <div class="col-xs-6 col-sm-4 col-md-3 text-center">

                        <a href="{{ url('/modulos' . $modulo->id ) }}">
                            <img src="https://picsum.photos/200/300/?random" style="height:200px"/>
                            <h4 style="min-height:45px;margin:5px 0 10px 0">
                                {{$modulo->nombre}}
                            </h4>
                        </a>

                    </div>

                    @endforeach
                <div class="card-body">
                    <table>
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Especialidad</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>Sistemas informáticos</th>
                            <th>2</th>
                        </tr>
                        <tr>
                            <th>Bases de Datos</th>
                            <th>1</th>
                        </tr>
                        <tr>
                            <th>Programación</th>
                            <th>1</th>
                        </tr>
                        <tr>
                            <th>Entornos de desarrollo</th>
                            <th>1</th>
                        </tr>
                        <tr>
                            <th>Lenguajes de marcas y sistemas de gestión de información</th>
                            <th>1</th>
                        </tr>
                        <tr>
                            <th>...</th>
                            <th>...</th>
                        </tr>
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
