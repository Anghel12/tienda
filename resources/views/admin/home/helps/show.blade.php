@extends('adminlte::page')

@section('title', 'Ver Ayuda')

@section('content_header')
    <h1>{{ $help->title }}</h1>
@endsection

@section('content')
    <p>{{ $help->body }}</p>
    <a href="{{ route('admin.home.helps.edit', $help->id) }}" class="btn btn-warning">Editar</a>
    <form action="{{ route('admin.home.helps.destroy', $help->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esto?')">Eliminar</button>
    </form>
    <a href="{{ route('admin.home.helps.index') }}" class="btn btn-secondary">Regresar</a>
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
