@extends('adminlte::page')

@section('title', 'HomeContact show')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Detalles del Contacto</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Información de Contacto</h6>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <strong>Nombre:</strong> {{ $homeContact->name }}
            </div>
            <div class="mb-3">
                <strong>Email:</strong> {{ $homeContact->email }}
            </div>
            <div class="mb-3">
                <strong>Asunto:</strong> {{ $homeContact->subject }}
            </div>
            <div class="mb-3">
                <strong>Mensaje:</strong>
                <p>{{ $homeContact->message }}</p>
            </div>
            <a href="{{ route('admin.home_contact.index') }}" class="btn btn-primary">Volver a la lista</a>
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
