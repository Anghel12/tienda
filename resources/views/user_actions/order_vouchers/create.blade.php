@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Nueva Orden de Voucher</h1>

        <form action="{{ route('user_actions.order_vouchers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Cantidad:</label>
                <input type="number" name="amount" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Método de Pago:</label>
                <input type="text" name="payment_method" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection
