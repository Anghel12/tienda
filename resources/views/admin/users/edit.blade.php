
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
                <h4 class="mb-4">Usuario: {{$user->name}}</h4>
                <div class="row g-3">


                    <div class="col-12 col-sm-6">
                        <h5> Listado de Roles</h5>
                        {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put' ]) !!}
                
                        @foreach ($roles as $role)
                
                        <div>
                            <label for="">
                                {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                                {{$role->name}}
                            </label>
                        </div>
                            
                        @endforeach
                
                        {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary' ]) !!}
                
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>

    </div>

@if (session('info')) 
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif

   <div class="card">
    <div class="card-body">
        <p class="h5"> Nombre:</p>
        <p class="form-control"> {{$user->name}} </p>

        <h5> Listado de Roles</h5>
        {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put' ]) !!}

        @foreach ($roles as $role)

        <div>
            <label for="">
                {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                {{$role->name}}
            </label>
        </div>
            
        @endforeach

        {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary mt-2' ]) !!}

        {!! Form::close() !!}
    </div>
   </div>
</x-guest-layout>
