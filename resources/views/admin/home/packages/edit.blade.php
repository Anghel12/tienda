@extends('adminlte::page')

@section('title', 'Editar baneo')

@section('content_header')
    <h1>Editar banner</h1>

@stop

@section('content')
    <div class="card-minimalista">
        <div class="card-body">
            <form action="{{ route('admin.home.packages.update', $package->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $package->title }}" required>
                </div>
                <div class="form-group">
                    <label for="subtitle">Subtitle:</label>
                    <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ $package->subtitle }}">
                </div>
                <div class="form-group">
                    <label for="body">Body:</label>
                    <textarea class="form-control" id="body" name="body" rows="5" required>{{ $package->body }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
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