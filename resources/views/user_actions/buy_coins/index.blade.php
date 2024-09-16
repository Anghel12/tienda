<x-app-layout>

</x-app-layout>

 
  <img class="background-image" src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/curved-images/curved14.jpg" alt="Fondo">

    {{-- FORMULARIO DE COMPRA --}}

   
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
      <div class="container">
          <div class="row">
              <!-- Texto a la izquierda (7 columnas) -->
              <div class="col-md-7">
                  <h1 class="text-white pt-3 mt-n5">{{$coin->name}}: La Moneda del Futuro <br>
                     que Está Revolucionando el Mercado</h1>
                  <p class="lead text-white mt-3"> Únete a los +1000 de usuarios <br>
                     que ya están aprovechando las ventajas de {{$coin->name}}. <br>
                    Transacciones rápidas, seguras y con bajas comisiones. <br>
                     No te quedes atrás <br>
                     forma parte de la próxima gran revolución financiera.
                </p>
              </div>
  
              <!-- Formulario a la derecha (5 columnas) -->
              <div class="col-md-4">
                  <div class="form-container z-index-2 border-radius-xl py-3 blur shadow-blur">
                    <form>
                      <div>
                        <h1>Comprar {{$coin->name }}: </h1>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <input type="email" class="form-control form-control-alternative" id="exampleFormControlInput1" value="{{ Auth::user()->email }}">
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <input type="text" class="form-control form-control-alternative" id="exampleFormControlInput2" value="{{ Auth::user()->name }}">
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group has-success">
                                  <input type="text" class="form-control form-control-alternative is-valid" value="100" />
                              </div>
                          </div>
                      </div>

                      <Comprar type="button" class="btn btn-primary">Comprar {{ $coin->name }} </button>
                  </form>
                  
                  </div>
              </div> 
          </div>
      </div>
  </div>
  
{{-- 
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-alternative" id="exampleFormControlInput1" placeholder=" {{Auth::user()->email }}">
                                    </div>
                                </div>
                       <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Regular" class="form-control form-control-alternative" disabled />
                                    </div>
                                </div> 
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <input type="name" class="form-control form-control-alternative" id="exampleFormControlInput1" placeholder="{{ Auth::user()->name }}">
                                  </div>
                              </div>
                         <div class="col-md-6">
                                  <div class="form-group">
                                      <input type="text" placeholder="Regular" class="form-control form-control-alternative" disabled />
                                  </div>
                              </div>
                          </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group has-success">
                                        <input type="text" placeholder="100" class="form-control form-control-alternative is-valid" />
                                    </div>
                                </div>
                      <div class="col-md-6">
                                    <div class="form-group has-danger">
                                        <input type="email" placeholder="Error Input" class="form-control form-control-alternative is-invalid" />
                                    </div>
                                </div> 
                            </div>
                        </form> --}}



  <style>
    /* Estilo para hacer que la imagen ocupe todo el fondo */
    body, html {
        height: 100%;
        margin: 0;
        padding: 0;
    }

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
        background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco semi-transparente */
        border-radius: 15px;
        padding: 20px;
    }
</style>