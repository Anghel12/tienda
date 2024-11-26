@extends('adminlte::page')

@section('title', 'Editar baneo')

@section('content_header')
    <h1>Editar banner</h1>

@stop

@section('content')
    <div class="card-minimalista">
        <div class="card-body">
            <form action="{{ route('admin.home.memberships.update', $membership->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Título:</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $membership->title }}" required>
                </div>
                <div class="form-group">
                    <label for="subtitle">Subtítulo:</label>
                    <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ $membership->subtitle }}">
                </div>
                <div class="form-group">
                    <label for="body">Contenido:</label>
                    <textarea class="form-control" id="body" name="body" rows="5" required>{{ $membership->body }}</textarea>
                </div>
                <div class="form-group">
                    <label for="price_title">Título del Precio:</label>
                    <input type="text" class="form-control" id="price_title" name="price_title" value="{{ $membership->price_title }}">
                </div>
                <div class="form-group">
                    <label for="price">Precio:</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $membership->price }}" pattern="[0-9]+([\.,][0-9]+)?">
                </div>
                <div class="form-group">
                    <label for="offer">Oferta:</label>
                    <textarea class="form-control" id="offer" name="offer" rows="5">{{ $membership->offer }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
            
            
        </div>
    </div>
    @stop


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