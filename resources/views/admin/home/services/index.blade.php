@extends('adminlte::page')

@section('title', 'Mensajes')

@section('content_header')
    <h1>service
    </h1>

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
            <h3 class="card-title">Lista de services</h3>
            <div class="card-tools">
                 <a href="{{ route('admin.home.services.create') }}" class="btn btn-primary">Crear nuevo ban</a> 
            </div>
        </div>

        <div class="card-body">
            <table id="servicesTable" class="table table-striped">
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
                    @foreach($services as $service)
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->subtitle }}</td>
                        <td>{{ Str::limit($service->body, 50) }}</td>
                        <td>
                            <a href="{{ url('/') }}" class="btn btn-sm btn-success">Ver</a>
                            <a href="{{ route('admin.home.services.edit', $service->id) }}" class="btn btn-sm btn-primary">Editar</a>
                            <form action="{{ route('admin.home.services.destroy', $service->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de que desea eliminar este servicio?')">Eliminar</button>
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
            $('#contentsTable').DataTable();
        });
    </script>
@stop
