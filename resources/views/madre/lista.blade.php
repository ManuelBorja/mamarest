@extends('layouts.app')

@section('content')
<div class="container">

    <form class="form-inline frm-busca">
        <div class="form-group">
            <input type="text" class="form-control" id="nombre" placeholder="Buscar por DNI">
            <input type="text" class="form-control" id="dni" placeholder="Buscar por nombre">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>

    <div class="form-grooup">
        <a class="btn btn-danger btn-lg btn-block" href="{{url('madre/create')}}">Nuevo</a>
    </div>
    <div class="form-group">
        <table class="table table-responsive">
            <tr>
                <th>Nombre</th>
                <th>Fecha de Parto</th>
                <th>Historia Clinica</th>
                <th></th>
                <th></th>
            </tr>
        @foreach ($madres as $madre)
            <tr>
                <td>{{ $madre->apellidos }}, {{ $madre->nombres }}</td>
                <td>{{ $madre->fecha_parto }}</td>
                <td>{{ $madre->historia }}</td>
                <td></td>
                <td></td>
            </tr>
        @endforeach 
        </table>
    </div>
    
</div>
@endsection
