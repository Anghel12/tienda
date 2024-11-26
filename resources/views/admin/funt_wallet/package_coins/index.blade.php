<x-guest-layout>
  <div class="content">
      <h1>Lista de PackageCoins</h1>
      <a href="{{ route('admin.funt_wallet.package_coins.create') }}" class="btn btn-primary">Crear nuevo PackageCoin</a>
      <table class="table">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Título</th>
                  <th>Acciones</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($packageCoins as $packageCoin)
                  <tr>
                      <td>{{ $packageCoin->id }}</td>
                      <td>{{ $packageCoin->titulo }}</td>
                      <td>
                          <a href="{{ route('admin.funt_wallet.package_coins.show', $packageCoin->id) }}" class="btn btn-info">Ver</a>
                          <a href="{{ route('admin.funt_wallet.package_coins.edit', $packageCoin->id) }}" class="btn btn-warning">Editar</a>
                          <form action="{{ route('admin.funt_wallet.package_coins.destroy', $packageCoin->id) }}" method="POST" style="display:inline;">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">Eliminar</button>
                          </form>
                      </td>
                  </tr>
              @endforeach
          </tbody>
      </table>
  </div>
</x-guest-layout>
