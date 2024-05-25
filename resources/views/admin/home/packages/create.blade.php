@extends('adminlte::page')

@section('title', 'Nuevo Baneo')

@section('content_header')
    <h1>Nuevo banner</h1>
@stop

@section('content')
    <div class="card-minimalista">
        <div class="card-body">
            <form action="{{ route('admin.home.packages.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="subtitle">Subtitle:</label>
                    <input type="text" class="form-control" id="subtitle" name="subtitle">
                </div>
                <div class="form-group">
                    <label for="body">Body:</label>
                    <textarea class="form-control" id="body" name="body" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
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
