@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" align="center">
                <div class="card-header">
                    <h3>{{ __('Desarrollo de Aplicaciones Web') }}</h3>
                </div>
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
                            @foreach ($arrayModulos as $modulo)
                                <th>{{ $modulo->nombre }}</th>
                                    <td>{{ $modulo->especialidad_id }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{ action('App\Http\Controllers\HomeController@index') }}" class="button medium scrolly">Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
