@extends('adminlte::page')

@section('title', 'Editar Blog')

@section('content_header')
    <h1>Editar Blog</h1>
@stop

@section('content')
<div class="card-minimalista">
        <div class="card-body">
            <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" name="title" class="form-control" value="{{ $blog->title }}" required>
                </div>
                <div class="form-group">
                    <label for="body">Contenido</label>
                    <textarea name="body" class="form-control" rows="10" required>{{ $blog->body }}</textarea>
                </div>

                   {{-- lado izqueirdo --}}
          @include('admin.blogs.partials.modal')

                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
@stop
