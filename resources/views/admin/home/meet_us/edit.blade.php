@extends('adminlte::page')

@section('title', 'Editar Meet Us')

@section('content_header')
    <h1>Editar Meet Us</h1>
@stop

@section('content')
<div class="card-minimalista">
        <div class="card-body">
            <form action="{{ route('admin.home.meet_us.update', $meetUs->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" name="title" class="form-control" value="{{ $meetUs->title }}" required>
                </div>
                <div class="form-group">
                    <label for="subtitle">Subtítulo</label>
                    <input type="text" name="subtitle" class="form-control" value="{{ $meetUs->subtitle }}">
                </div>
                <div class="form-group">
                    <label for="body">Contenido</label>
                    <textarea name="body" class="form-control" rows="5" required>{{ $meetUs->body }}</textarea>
                </div>
                <div class="form-group">
                    <label for="extract">Extracto</label>
                    <input type="text" name="extract" class="form-control" value="{{ $meetUs->extract }}">
                </div>
                <div class="form-group">
                    <label for="title_button">Título del Botón</label>
                    <input type="text" name="title_button" class="form-control" value="{{ $meetUs->title_button }}">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('admin.home.meet_us.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
@stop
