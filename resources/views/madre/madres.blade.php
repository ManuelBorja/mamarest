@extends('layouts.app')

@section('content')
<div class="container">

    <form class="form-inline">
        <div class="form-group">
            <input type="text" class="form-control" id="nombre" placeholder="Buscar por DNI">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="dni" placeholder="Buscar por nombre">
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
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
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    
</div>
@endsection
