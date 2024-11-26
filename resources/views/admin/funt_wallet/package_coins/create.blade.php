<x-guest-layout>
    <div class="content">
        <h1>Crear nuevo PackageCoin</h1>
        <form action="{{ route('admin.funt_wallet.package_coins.store') }}" method="post">
            @csrf
            <div class="mb-6">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" id="titulo" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" id="body" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="numero">Número</label>
                    <input type="number" name="numero" id="numero" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="title_button">Title Button</label>
                    <input type="text" name="title_button" id="title_button" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="sub_titulo">Sub Título</label>
                    <input type="text" name="sub_titulo" id="sub_titulo" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="etiquetas">Etiquetas (JSON)</label>
                    <textarea name="etiquetas" id="etiquetas" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</x-guest-layout>
