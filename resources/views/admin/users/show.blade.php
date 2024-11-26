
<x-guest-layout>

    <div class="content">
        <nav class="mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.coins.index') }}">Admin</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.coins.index') }}">User</a></li>
            <li class="breadcrumb-item active">Usuario: {{$user->name}} </li>
          </ol>
        </nav>

            <div class="mb-6">
                <h4 class="mb-4">EDITAR ROL:</h4>
                <div class="row g-3">
                    <div class="col-12 col-sm-6">
                        <a class="btn btn-primary" href="{{ route('admin.users.edit', $user) }}" role="button">EDITAR</a>
                    </div>
                </div>
            </div>

            <div class="mb-6">
                <h4 class="mb-4">LOGIN CON ESTE USER:</h4>
                <div class="row g-3">
                    <div class="col-12 col-sm-6">
                        <form action=" {{ route('impersonate.start', compact('user')) }} " method="post" style="display: none" id="forImpersonate">
                            @csrf
                              
                            </form>
                            <a class="btn btn-success" href="#" onclick="document.getElementById('forImpersonate').submit() ">LOGIN CON ESTE USER</a>
                        
                    </div>
                </div>
            </div>

            
            <div class="mb-6">
                <h4 class="mb-4">Ban:</h4>
                <div class="row g-3">
                    <div class="col-12 col-sm-6">
                        <a class="btn btn-primary" href="{{ route('admin.users.edit', $user) }}" role="button">Banear</a>
                    </div>
                </div>
            </div>

            <div class="card col-sm-2 m-2 p-2">
                <label for="name" class="">ROL:</label>

                <div class="card-footer">
                    @if ($user->hasRole('Admin'))
                        <span class="badge bg-primary">Administrador</span>
                    @else

                        <span class="badge bg-success">Usuario</span>

                    @endif
                </div>
            </div>

                {{-- DETALLES DEL USUARIO  --}}
<div class="card text-center">
    <div class="card-header">
        <h2 class="text-center">Detalles del usuario</h2>
        <div class="col-md-4 mx-auto">
            <img src="{{ $user->profile_photo_url }}" alt="Foto de perfil" style="border-radius: 50%; width: 150px; height: 150px;">
        </div>
    </div>
    
    <div class="card-body">
        <div class="form-group row">
            
            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre:</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">Correo electrónico:</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-md-right">Teléfono:</label>

            <div class="col-md-6">
                <input id="phone" type="text" class="form-control" name="phone" value="{{ $user->phone }}" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-md-right">CREACION DE LA CUENTA:</label>

            <div class="col-md-6">
                <input id="phone" type="text" class="form-control" name="phone" value="{{ $user->created_at }}" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-md-right">REFERAL CODE:</label>

            <div class="col-md-6">
                <input id="code" type="text" class="form-control" name="code" value="{{ $user->referral_code }}" readonly>
            </div>
        </div>

    </div>
</div>
{{-- SECUNDARIO DETALLES  --}}
<div class="card">
    <div class="card-header">
        <h5>Detalles secundarios del usuario</h5>
    </div>
    <div class="card-body">
        <div class="form-group row">
            
            <label for="name" class="col-md-4 col-form-label text-md-right">Tarjeta:</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">Correo electrónico:</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-md-right">Teléfono:</label>

            <div class="col-md-6">
                <input id="phone" type="text" class="form-control" name="phone" value="{{ $user->phone }}" readonly>
            </div>
        </div>
    </div>
</div>
        <!-- Agrega aquí las demás propiedades que deseas mostrar -->
    <div class="col-sm-12">
        <h1>Historial del usuario</h1> 
        <div class="row">  
<div class="card col-sm-3 m-2">
    <div class="card-header">
        <p>COMENTARIOS </p>
    </div>
    <input id="comments_count" type="text" class="form-control" name="comments_count" value="TOTAL: {{ $user->comments()->count() }}" readonly>
      <div class="card-body">  
        @foreach($user->comments()->take(1)->get() as $comment)
        <p>{{ $comment->mensaje }}</p>
    @endforeach
</div>
</div>

<div class="card col-sm-3 m-2">
      <div class="card-header">
    <h4>Post</h4>
  </div>
    <input id="comments_count" type="text" class="form-control" name="comments_count" value="TOTAL: {{ $user->posts()->count() }}" readonly>
    <div class="card-body"> 
    @foreach($user->posts()->take(1)->get() as $post)
            <h2>TITULO:{{ $post->title }}</h2>
           
            <p>{{ $post->body }}</p>
            <p>PRECIO:{{ $post->price_reciente }}</p>
        @endforeach
</div>
    </div>

        <div class="card col-sm-3 m-2">
          <h4>Pedidos</h4>
    
        </div>

            </div>
        </div>  

    </div>
</x-guest-layout>
