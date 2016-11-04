@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('madre/store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('dni') ? ' has-error' : '' }}">
                            <label for="dni" class="col-md-4 control-label">DNI</label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control" name="dni" value="{{ old('dni') }}" required autofocus>

                                @if ($errors->has('dni'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dni') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nombres') ? ' has-error' : '' }}">
                            <label for="nombres" class="col-md-4 control-label">Nombres</label>

                            <div class="col-md-6">
                                <input id="nombres" type="text" class="form-control" name="nombres" value="{{ old('nombres') }}" required autofocus>

                                @if ($errors->has('nombres'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombres') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">
                            <label for="apellidos" class="col-md-4 control-label">Apellidos</label>

                            <div class="col-md-6">
                                <input id="apellidos" type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}" required autofocus>

                                @if ($errors->has('apellidos'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellidosz') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('celular') ? ' has-error' : '' }}">
                            <label for="celular" class="col-md-4 control-label">Celular</label>

                            <div class="col-md-6">
                                <input id="celular" type="text" class="form-control" name="celular" value="{{ old('celular') }}" required autofocus>

                                @if ($errors->has('celular'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('celular') }}</strong>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('celular_acompanante') ? ' has-error' : '' }}">
                            <label for="celular_acompanante" class="col-md-4 control-label">Celular Acompañante</label>

                            <div class="col-md-6">
                                <input id="celular_acompanante" type="text" class="form-control" name="celular_acompanante" value="{{ old('celular_acompanante') }}" required autofocus>

                                @if ($errors->has('celular_acompanante'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('celular_acompanante') }}</strong>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fecha_parto') ? ' has-error' : '' }}">
                            <label for="fecha_parto" class="col-md-4 control-label">Fecha Parto</label>

                            <div class="col-md-6">
                                <input id="fecha_parto" type="text" class="form-control" name="fecha_parto" value="{{ old('fecha_parto') }}" required autofocus>

                                @if ($errors->has('fecha_parto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fecha_parto') }}</strong>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('historia') ? ' has-error' : '' }}">
                            <label for="historia" class="col-md-4 control-label">historia</label>

                            <div class="col-md-6">
                                <input id="historia" type="text" class="form-control" name="historia" value="{{ old('historia') }}" required autofocus>

                                @if ($errors->has('historia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('historia') }}</strong>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('historia_familiar') ? ' has-error' : '' }}">
                            <label for="historia_familiar" class="col-md-4 control-label">Fistoria Familiar</label>

                            <div class="col-md-6">
                                <input id="histohistoria_familiarria" type="text" class="form-control" name="historia_familiar" value="{{ old('historia_familiar') }}" required autofocus>

                                @if ($errors->has('historia_familiar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('historia_familiar') }}</strong>
                                @endif
                            </div>
                        </div>

                         <input id="user_id" type="hidden" name="user_id" value="1">

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
