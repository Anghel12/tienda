<x-guest-layout>
    <div class="content">
        <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.wallet.index') }}">Admin</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.wallet.index') }}">Wallets</a></li>
                <li class="breadcrumb-item active">Editar Wallet: {{ $wallet->name }}</li>
            </ol>
        </nav>

        @if (session('info'))
            <div class="alert alert-success">
                <strong>{{ session('info') }}</strong>
            </div>
        @endif

        <div class="mb-6">
            <h4 class="mb-4">Editar Wallet del Usuario: {{ $wallet->user->name }}</h4>
            <div class="row g-3">
                <div class="col-12 col-sm-6">
                    <h5>Al ajustar el balance, el usuario podrá realizar compras o retiros</h5>
                    
                    {!! Form::model($wallet, ['route' => ['admin.wallet.update', $wallet], 'method' => 'put' ]) !!}

                    <!-- Campo Name -->
                    <div class="form-group">
                        {!! Form::label('name', 'Nombre de la Wallet') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la wallet', 'required']) !!}
                    </div>

                    <!-- Campo Currency -->
                    <div class="form-group">
                        {!! Form::label('currency', 'Moneda') !!}
                        {!! Form::text('currency', null, ['class' => 'form-control', 'placeholder' => 'Moneda (ej: USD, EUR)', 'required']) !!}
                    </div>

                    <!-- Campo Balance -->
                    <div class="form-group">
                        {!! Form::label('balance', 'Balance') !!}
                        {!! Form::number('balance', null, ['class' => 'form-control', 'step' => '0.01', 'placeholder' => 'Balance de la wallet', 'required']) !!}
                    </div>

                    <!-- Campo Tipo -->
                    <div class="form-group">
                        {!! Form::label('type', 'Tipo de Wallet') !!}
                        {!! Form::text('type', null, ['class' => 'form-control', 'placeholder' => 'Tipo de wallet (opcional)']) !!}
                    </div>

                    <!-- Campo is_active (Estado de la Wallet) -->
                    <div class="form-group">
                        {!! Form::label('is_active', 'Estado de la Wallet') !!}
                        {!! Form::select('is_active', [1 => 'Activa', 0 => 'Inactiva'], null, ['class' => 'form-control']) !!}
                    </div>

                    <br>
                    <!-- Botón para actualizar -->
                    {!! Form::submit('Actualizar Wallet', ['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
