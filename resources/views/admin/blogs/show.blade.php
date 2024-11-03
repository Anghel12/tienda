@extends('adminlte::page')

@section('title', 'Detalles del Blog')

@section('content_header')
    <h1>Detalles del Blog</h1>
@stop

@section('content')
<div class="card-minimalista">
        <div class="card-header">
            <h3>{{ $blog->title }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Slug:</strong> {{ $blog->slug }}</p>
            <p><strong>Autor:</strong> {{ $blog->user->name }}</p>
            <p><strong>Contenido:</strong></p>
            <p>{{ $blog->body }}</p>
            <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
@stop
