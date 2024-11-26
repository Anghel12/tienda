<x-app-layout>

</x-app-layout>


<img class="background-image" src="https://img.freepik.com/fotos-premium/fondo-azul-fondo-azul_608068-13038.jpg"
    alt="Fondo">
{{-- FORMULARIO DE COMPRA --}}

<div class="container ">
    <div class="row justify-content-center align-items-center" style="height: 80vh; padding-top: 7rem;">

        <!-- Texto a la izquierda (12 columnas en móviles, 7 columnas en pantallas grandes) -->
        <div
            class="col-lg-12 col-12 text-center d-flex flex-column justify-content-center align-items-center mb-3 mb-lg-0">
            <h1 class="text-white pt-3 mt-n5">Transferir Monedas</h1>
            <p class="lead text-white mt-3">
                Ahora más fácil y rápido con solo dos clicks
            </p>
        </div>



        <!-- Formulario a la derecha (12 columnas en móviles, 5 columnas en pantallas grandes) -->
        <div class="col-lg-6 col-12">

            <div class="form-container z-index-2 border-radius-xl py-3 blur shadow-blur">
                <form action="{{ route('user_actions.transfer_coins.show') }}" method="POST">
                    @csrf
                    <div>
                        <h1>Enviar al Usuario: </h1>
                    </div>


                    @livewire('user-actions.transfer-coins.enviar-index')

                    <!-- Cantidad de monedas y nombre de la moneda -->
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <div class="form-group has-success">
                                <label class="" for="email">
                                    <h7>Cantidad:</h7>
                                </label>
                                <input type="number" name="amount" class="form-control form-control-alternative "
                                    value="0" />
                            </div>
                        </div>
                    </div>
 

                    @if (session('success'))
                    <div>{{ session('success') }}</div>
                    @endif

                    @if (session('error'))
                    <div>{{ session('error') }}</div>
                    @endif

                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
            </div>
        </div>

    </div>
</div>

<style>
    .background-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }

    .form-container {
        background-color: rgba(255, 255, 255, 0.8);
        /* Fondo blanco semi-transparente */
        border-radius: 15px;
        padding: 20px;
    }
</style>

{{--
<section class="py-2 bg-light">
    <div class="container pt-8">
        <div class="row">
            <div class="col-lg-4 col-md-10 d-flex justify-content-center flex-column">
                <h1>Transferir Monedas</h1>
                <form action="{{ route('user_actions.transfer_coins.show') }}" method="POST">
                    @csrf
                    <div>
                        <label for="email">Email del destinatario</label>
                        <input type="email" name="email" required>
                    </div>
                    <div>
                        <label for="amount">Cantidad a transferir</label>
                        <input type="number" name="amount" required min="1">
                    </div>
                    <button type="submit">Aceptar</button>
                </form>

            </div>
        </div>
    </div>
</section> --}}
<!-- END Pricing w/ 2 cards & nav tabs -->