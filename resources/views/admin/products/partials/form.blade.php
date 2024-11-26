<div class="form-group">
    <label>Nombre:</label>
    <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
</div>

<div class="form-group">
  <label>URL del Video (YouTube):</label>
  <input type="text" name="link_youtube" class="form-control" 
         value="{{ $linkYoutube ? $linkYoutube->url : '' }}">
</div>

<div class="form-group">
  <label>URL de la Imagen:</label>
  <input type="text" name="link_image" class="form-control" 
         value="{{ $linkImage ? $linkImage->url : '' }}">
</div>


<div class="form-group">
    <label>Informacion importante :</label>
    <textarea name="body" class="form-control">{{ $product->body }}</textarea>
</div>

<div class="form-group">
    <label>Extra de info del Producto:</label>
    <input type="text" name="extract" class="form-control" value="{{ $product->extract }}">
</div>

<div class="form-group">
    <label>Precio del Producto:</label>
    <input type="number" name="price" class="form-control" value="{{ $product->price }}">
</div>

<div class="form-group">
    <label>Cantidad del Producto:</label>
    <input type="number" name="stock" class="form-control" value="{{ $product->stock }}">
</div>

<div class="form-group">
    <label>Categoría:</label>
    <select name="category_id" class="form-control">
      @foreach ($categories as $category)
      <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endforeach
       
        <!-- Agrega aquí más opciones de categorías si es necesario -->
    </select>
</div>

<div class="form-group">
    <label>Status:</label>
    <select name="status" class="form-control">
        <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>1</option>
        <option value="2" {{ $product->status == 2 ? 'selected' : '' }}>2</option>
    </select>
</div>