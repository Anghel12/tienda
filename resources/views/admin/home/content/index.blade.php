@extends('adminlte::page')

@section('title', 'Mensajes')

@section('content_header')
    <h1>Bans</h1>

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
            <h3 class="card-title">Lista de Bans</h3>
            <div class="card-tools">
                 <a href="{{ route('admin.content.create') }}" class="btn btn-primary">Crear nuevo ban</a> 
            </div>
        </div>

        <div class="card-body">
            <table id="contentsTable" class="table table-striped">
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
          
                        <tr>
                            <td>{{ $content->id }}</td>
                            <td>{{ $content->title }}</td>
                            <td>{{ $content->subtitle }}</td>
                            <td>{{ Str::limit($content->body, 50) }}</td> <!-- Limitar la longitud del cuerpo para una mejor visualización -->
                            <td>
                                <a href="{{ url('/') }}" class="btn btn-sm btn-success">Ver</a>
                                <a href="{{ route('admin.content.edit', $content->id) }}" class="btn btn-sm btn-primary">Editar</a>
                    {{--             <form action="{{ route('admin.content.destroy', $content->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de que desea eliminar este contenido?')">Eliminar</button>
                                </form> --}}
                            </td>
                        </tr>
           
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
