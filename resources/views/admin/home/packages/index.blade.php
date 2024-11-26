@extends('adminlte::page')

@section('title', 'Packages')

@section('content_header')
    <h1>Packages</h1>

    {{-- Alerta de éxito --}}
    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
@stop

@section('content')
    <div class="card-minimalista">
        <div class="card-header">
            <h3 class="card-title">Lista de Packages</h3>
            <div class="card-tools">
                 <a href="{{ route('admin.home.packages.create') }}" class="btn btn-primary">Crear nuevo ban</a> 
            </div>
        </div>

        <div class="card-body">
            <table id="packagesTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Subtítulo</th>
                        <th>Contenido</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($packages as $package)
                    <tr>
                        <td>{{ $package->id }}</td>
                        <td>{{ $package->title }}</td>
                        <td>{{ $package->subtitle }}</td>
                        <td>{{ Str::limit($package->body, 50) }}</td>
                        <td>
                            <a href="{{ url('/') }}" class="btn btn-sm btn-success">Ver</a>
                            <a href="{{ route('admin.home.packages.edit', $package->id) }}" class="btn btn-sm btn-primary">Editar</a>
                            <form action="{{ route('admin.home.packages.destroy', $package->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de que desea eliminar este paquete?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            
        </div>
    </div>
@stop



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
            $('#packagesTable').DataTable();
        });
    </script>
@stop
