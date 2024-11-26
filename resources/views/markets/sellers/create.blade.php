@extends('adminlte::page')

@section('title', 'Crear Blog')

@section('content_header')
    <h1>Crear Nuevo Blog</h1>
@stop

@section('content')
<div class="card-minimalista">
        <div class="card-body">
            <form action="{{ route('admin.blogs.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" class="form-control" value="{{ old('slug') }}" required>
                </div>
                <div class="form-group">
                    <label for="body">Contenido</label>
                    <textarea name="body" class="form-control" rows="5" required>{{ old('body') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="user_id">Autor</label>
                    <select name="user_id" class="form-control" required>
                            <option value="{{ Auth::user()->name }}">{{ Auth::user()->name }}</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
@stop
