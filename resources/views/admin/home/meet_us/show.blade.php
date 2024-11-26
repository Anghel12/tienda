@extends('adminlte::page')

@section('title', 'Detalles de Meet Us')

@section('content_header')
    <h1>Detalles de Meet Us</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>{{ $meetUs->title }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Subtítulo:</strong> {{ $meetUs->subtitle }}</p>
            <p><strong>Contenido:</strong> {{ $meetUs->body }}</p>
            <p><strong>Extracto:</strong> {{ $meetUs->extract }}</p>
            <p><strong>Título del Botón:</strong> {{ $meetUs->title_button }}</p>
            <a href="{{ route('admin.home.meet_us.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
@stop
