@extends('adminlte::page')

@section('title', 'HomeContact')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Contactos Enviados</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lista de Contactos</h6>
        </div>
       <div class="card">
        <div class="card-body">
            <table id="paymentsTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Asunto</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->subject }}</td>
                                <td>
                                    <a href="{{ route('admin.home_contact.show', $contact->id) }}" class="btn btn-info">Ver</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                 </table>
        </div>
    </div>
    </div>
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
            $('#paymentsTable').DataTable();
        });
    </script>
@stop
