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
            <h1>Meet Us</h1>
        <a href="{{ route('admin.home.meet_us.create') }}" class="btn btn-primary">Add New Meet Us</a>
      
        </div>

        <div class="card-body">
            <table id="membershipsTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Actions</th>
                    </tr> 
                </thead>
                <tbody>
                    @foreach ($meetUs as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->subtitle }}</td>
                            <td>
                                <a href="{{ route('admin.home.meet_us.edit', $item) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('admin.home.meet_us.destroy', $item) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                <a href="{{ route('posts.index') }}" class="btn btn-info">View</a>
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
            $('#membershipsTable').DataTable();
        });
    </script>
@stop
