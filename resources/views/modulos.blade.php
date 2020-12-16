@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" align="center">
                <div class="card-header">
                    <h3>{{ __('Desarrollo de Aplicaciones Web') }}</h3>
                </div>
                <div class="card-body">
                    @foreach( $arrayModulos as $key => $modulo )
                    <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                            <p>{{$modulo->nombre}}</p>
                            <p>{{$modulo->especialidad_id}}</p>
                            <p>{{$modulo->ciclo_id}}</p>
                    </div>
                    @endforeach
                </div>
                <div class="card-footer">
                    <a href="/" class="button medium scrolly">Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
