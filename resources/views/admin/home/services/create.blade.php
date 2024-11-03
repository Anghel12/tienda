@extends('adminlte::page')

@section('title', 'Nuevo Baneo')

@section('content_header')
    <h1>Nuevo banner</h1>
@stop

@section('content')
    <div class="card-minimalista">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.home.services.store') }}">
                @csrf
            
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
            
                <div class="form-group">
                    <label for="subtitle">Subtítulo</label>
                    <input type="text" class="form-control" id="subtitle" name="subtitle">
                </div>
            
                <div class="form-group">
                    <label for="body">Contenido</label>
                    <textarea class="form-control" id="body" name="body" rows="3"></textarea>
                </div>
            
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            
            
        </div>
    </div>
    @stop


    @section('css')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
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
