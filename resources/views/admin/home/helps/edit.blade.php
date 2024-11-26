@extends('adminlte::page')

@section('title', 'Editar Ayuda')

@section('content_header')
    <h1>Editar Ayuda</h1>
@endsection

@section('content')
    <form action="{{ route('admin.home.helps.update', $help->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" class="form-control" value="{{ $help->title }}" required>
        </div>
        <div class="form-group">
            <label for="body">Cuerpo</label>
            <textarea name="body" class="form-control" rows="5" required>{{ $help->body }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('admin.home.helps.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection



    @section('css')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="/css/admin_custom.css"> 
        @stop
    
    @section('js')
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#usersTable').DataTable();
            });
        </script>
    @stop