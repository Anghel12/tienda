@extends('adminlte::page')

@section('title', 'Mensajes')

@section('content_header')
    <h1>Ayudas</h1>
    <a href="{{ route('admin.home.helps.create') }}" class="btn btn-primary">Crear Ayuda</a>
@endsection

@section('content')
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Título</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($helps as $help)
                <tr>
                    <td>{{ $help->title }}</td>
                    <td>
                        <a href="{{ route('admin.home.helps.show', $help->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('admin.home.helps.edit', $help->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('admin.home.helps.destroy', $help->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esto?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection



@section('css')
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}
 <!-- table css -->
 <link rel="stylesheet" href="{{ asset('css/table.css') }}">

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/css/admin_custom.css"> 
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#aboutsTable').DataTable();
        });
    </script>
@stop
