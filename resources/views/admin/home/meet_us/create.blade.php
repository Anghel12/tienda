@extends('adminlte::page')

@section('title', 'Crear Meet Us')

@section('content_header')
    <h1>Crear Nueva Entrada en Meet Us</h1>
@stop

@section('content')
<div class="card-minimalista">
        <div class="card-body">
            <form action="{{ route('admin.home.meet_us.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                </div>
                <div class="form-group">
                    <label for="subtitle">Subtítulo</label>
                    <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle') }}">
                </div>
                <div class="form-group">
                    <label for="body">Contenido</label>
                    <textarea name="body" class="form-control" rows="5" required>{{ old('body') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="extract">Extracto</label>
                    <input type="text" name="extract" class="form-control" value="{{ old('extract') }}">
                </div>
                <div class="form-group">
                    <label for="title_button">Título del Botón</label>
                    <input type="text" name="title_button" class="form-control" value="{{ old('title_button') }}">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('admin.home.meet_us.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
@stop
