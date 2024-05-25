
<x-guest-layout>
    <div class="card">
        <div class="card-body">
            
            <table id="myTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th>Usuarios asignados</th>
                        <th>Hora de actualizacion</th>
                        <th>Hora de creación</th>
                        <th></th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td> {{$role->id }} </td>
                            <td>{{$role->name }} </td>
                            <td>{{$role->users->count() }} </td>
                            <td>{{$role->updated_at->diffForHumans() }} </td>
                            <td>{{$role->created_at->diffForHumans() }} </td>
                            <td with="10px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.roles.edit', $role) }}"> EDITAR</a>
                 
                                <form action="{{ route('admin.roles.destroy', $role) }}" method="POST">
                                    @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit"> ELIMINAR</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-guest-layout>