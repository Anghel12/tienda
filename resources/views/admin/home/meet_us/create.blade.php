@extends('adminlte::page')

@section('title', 'Nuevo Baneo')

@section('content_header')
    <h1>Nuevo banner</h1>
@stop

@section('content')
    <div class="container">
        <h1>Add New Meet Us</h1>
        <form action="{{ route('admin.home.meet_us.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="subtitle">Subtitle</label>
                <input type="text" class="form-control" id="subtitle" name="subtitle">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" required></textarea>
            </div>
            <div class="form-group">
                <label for="extract">Extract</label>
                <textarea class="form-control" id="extract" name="extract"></textarea>
            </div>
            <div class="form-group">
                <label for="title_button">Button Title</label>
                <input type="text" class="form-control" id="title_button" name="title_button">
            </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection


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
