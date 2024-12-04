<x-app-layout>
</x-app-layout>
<!-- Font Icon -->
<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">


<body>
  @php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
  @php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )

  @if (config('adminlte.use_route_url', false))
  @php( $login_url = $login_url ? route($login_url) : '' )
  @php( $register_url = $register_url ? route($register_url) : '' )
  @else
  @php( $login_url = $login_url ? url($login_url) : '' )
  @php( $register_url = $register_url ? url($register_url) : '' )
  @endif

  <style>
  .page_header{
    background-image: linear-gradient(310deg, #141727, #d900b3);

  }
       
  </style>
  
  
  <section class="page_header">
    <div class="page-header min-vh-100 mt-40">
      <div class="container ">
        <div class="row justify-content-center align-items-center" style="height: 100%; padding-top: 5rem;">
          <div class="col-xl-5 col-lg-12 col-md-12 mx-auto">
          <div class="card">
            <div class="card-header text-center pt-4 pb-1">
              <h4 class="font-weight-bolder mb-1">Registrarse</h4>
              <p class="mb-0">Gracias por unirte a Nuestro team TerraBank</p>
            </div>
            <div class="card-body">
              <form action="{{ $register_url }}" method="POST" id="signup-form" class="signup-form">
                @csrf

                {{-- id de referido --}}
                <div id="referral-code-mostrar"></div>
                <input class="mb-3 text-start" type="hidden" name="referral_code" id="referral_code" value="">

                <div class="mb-3">
       
                  <input type="text" name="name" id="name"  class="form-control" aria-label="Name" placeholder="Name" value="{{ old('Name') }}"
                    placeholder="{{ __('adminlte::adminlte.full_name') }}" autofocus>

                  @error('name')
                  <span class=" text-900 fs--1 form-icon" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>

                <div class="mb-3">
           
                  <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email" id="email" value="{{ old('email') }}"
                    placeholder="{{ __('adminlte::adminlte.email') }}">


                  @error('email')
                  <span class=" text-900 fs--1 form-icon" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>

                <div class="mb-3">
                  <input type="password" name="password" id="password" class="form-control" aria-label="Password"
                    placeholder="{{ __('adminlte::adminlte.password') }}">
                  <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                  @error('password')
                  <span class=" text-900 fs--1 form-icon" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>


                <div class="mb-3">
                    <input type="password" name="password_confirmation" id="password_confirmation"
                    class="form-control" aria-label="Password"
                    placeholder="{{ __('adminlte::adminlte.retype_password') }}">
    
                  @error('password_confirmation')
                  <span class=" text-900 fs--1 form-icon" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>


             

                <div class="form-check form-check-info text-left">
                  <input class="form-check-input" type="checkbox" value name="agree-term" id="agree-term" checked>
                  <label class="form-check-label" for="flexCheckDefault">
                    I agree the <a href="{{ route('terms') }}" class="text-dark font-weight-bolder">Terms and Conditions</a>
                  </label> 
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-2">Registrarse</button>
                </div>
                <div class="row px-xl-5 px-sm-4 px-3">
                  <div class="mt-3 mb-4 position-relative text-center">
                    <p class="text-sm font-weight-bold text-secondary text-border d-inline z-index-2 bg-white px-3">
                      or
                    </p>
                  </div>
                  <div class="col-3 ms-auto px-1">
                    <a class="btn btn-outline-light w-100 px-3" href="{{route('facebook-auth')}}">
                      <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g id="facebook-3" transform="translate(3.000000, 3.000000)" fill-rule="nonzero">
                            <circle fill="#3C5A9A" cx="29.5091719" cy="29.4927506" r="29.4882047"></circle>
                            <path
                              d="M39.0974944,9.05587273 L32.5651312,9.05587273 C28.6886088,9.05587273 24.3768224,10.6862851 24.3768224,16.3054653 C24.395747,18.2634019 24.3768224,20.1385313 24.3768224,22.2488655 L19.8922122,22.2488655 L19.8922122,29.3852113 L24.5156022,29.3852113 L24.5156022,49.9295284 L33.0113092,49.9295284 L33.0113092,29.2496356 L38.6187742,29.2496356 L39.1261316,22.2288395 L32.8649196,22.2288395 C32.8649196,22.2288395 32.8789377,19.1056932 32.8649196,18.1987181 C32.8649196,15.9781412 35.1755132,16.1053059 35.3144932,16.1053059 C36.4140178,16.1053059 38.5518876,16.1085101 39.1006986,16.1053059 L39.1006986,9.05587273 L39.0974944,9.05587273 L39.0974944,9.05587273 Z"
                              fill="#FFFFFF"></path>
                          </g>
                        </g>
                      </svg>
                    </a>
                  </div>
                  <div class="col-3 me-auto px-1">
                    <a class="btn btn-outline-light w-100 px-3" href="{{route('google-auth')}}">
                      <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g id="google-icon" transform="translate(3.000000, 2.000000)" fill-rule="nonzero">
                            <path
                              d="M57.8123233,30.1515267 C57.8123233,27.7263183 57.6155321,25.9565533 57.1896408,24.1212666 L29.4960833,24.1212666 L29.4960833,35.0674653 L45.7515771,35.0674653 C45.4239683,37.7877475 43.6542033,41.8844383 39.7213169,44.6372555 L39.6661883,45.0037254 L48.4223791,51.7870338 L49.0290201,51.8475849 C54.6004021,46.7020943 57.8123233,39.1313952 57.8123233,30.1515267"
                              fill="#4285F4"></path>
                            <path
                              d="M29.4960833,58.9921667 C37.4599129,58.9921667 44.1456164,56.3701671 49.0290201,51.8475849 L39.7213169,44.6372555 C37.2305867,46.3742596 33.887622,47.5868638 29.4960833,47.5868638 C21.6960582,47.5868638 15.0758763,42.4415991 12.7159637,35.3297782 L12.3700541,35.3591501 L3.26524241,42.4054492 L3.14617358,42.736447 C7.9965904,52.3717589 17.959737,58.9921667 29.4960833,58.9921667"
                              fill="#34A853"></path>
                            <path
                              d="M12.7159637,35.3297782 C12.0932812,33.4944915 11.7329116,31.5279353 11.7329116,29.4960833 C11.7329116,27.4640054 12.0932812,25.4976752 12.6832029,23.6623884 L12.6667095,23.2715173 L3.44779955,16.1120237 L3.14617358,16.2554937 C1.14708246,20.2539019 0,24.7439491 0,29.4960833 C0,34.2482175 1.14708246,38.7380388 3.14617358,42.736447 L12.7159637,35.3297782"
                              fill="#FBBC05"></path>
                            <path
                              d="M29.4960833,11.4050769 C35.0347044,11.4050769 38.7707997,13.7975244 40.9011602,15.7968415 L49.2255853,7.66898166 C44.1130815,2.91684746 37.4599129,0 29.4960833,0 C17.959737,0 7.9965904,6.62018183 3.14617358,16.2554937 L12.6832029,23.6623884 C15.0758763,16.5505675 21.6960582,11.4050769 29.4960833,11.4050769"
                              fill="#EB4335"></path>
                          </g>
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>
                <p class="text-sm text-center mt-3 mb-0">Tienes una Cuenta? <a
                    href="{{ $login_url }}" class="text-dark font-weight-bolder">Login</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>




  
</body>
<script src="vendor/jquery/jquery.min.js"></script>

<script>
  // Función para mostrar el campo de referencia al cargar la página
    function mostrarCampoReferencia() {
        const urlParams = new URLSearchParams(window.location.search);
        const referral_code = urlParams.get('ref');
        if (referral_code) {
            const referralCodeDiv = document.getElementById('referral-code-mostrar');
            referralCodeDiv.innerHTML = `Referido por: ${referral_code}`;
            document.getElementById('referral_code').value = referral_code;
            referralCodeDiv.classList.remove('d-none');
        }
    }
    // Llamado de la función
    mostrarCampoReferencia();
</script>

<style>
  .form-submit {
    cursor: pointer;
    /* Cambia el cursor a una manita */
  }

  .toggle-password {
    cursor: pointer;
    /* Cambia el cursor a una manita */
  }

  .molor-red {
    color: brown;
  }
</style>


<!-- Agrega esto después de incluir jQuery -->
<script>
  $(document).ready(function() {
        $('.toggle-password').on('click', function() {
            var passwordField = $('#password');
            var passwordFieldType = passwordField.attr('type');

            if (passwordFieldType === 'password') {
                passwordField.attr('type', 'text');
            } else {
                passwordField.attr('type', 'password');
            }
        });
    });
</script>