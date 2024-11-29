<div class="form-group">
    <label class="text-white">Nombre:</label>
    <input type="text" name="name" class="form-control" value="{{ $product->name ?? '' }}" required>
</div>

<div class="form-group">
    <label class="text-white">Informacion importante :</label>
    <textarea name="body" class="form-control text-black">{{ $product->body ?? ''}}</textarea>
</div>

<div class="form-group">
    <label class="text-white">Extra de info del Producto:</label>
    <textarea name="extract" id="extract" class="form-control text-black">{{ $product->extract  ?? '' }}</textarea>
</div>

<div class="row mb-3">

<div class="form-group col-3">
    <label class="text-white">Precio del Producto:</label>
    <input type="number" name="price" class="form-control" value="{{ $product->price ?? '' }}">
</div>

<div class="form-group col-3">
    <label class="text-white">Categoría:</label>
    <select name="category_id" class="form-control">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" 
                {{ $product->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>


<div class="form-group col-3">
    <label class="text-white">Cantidad del Producto:</label>
    <input type="number" name="stock" class="form-control" value="{{ $product->stock ?? '' }}">
</div>

<div class="form-group col-3">
    <label class="text-white">Status:</label>
    <select name="status" class="form-control">
        <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>1</option>
        <option value="2" {{ $product->status == 2 ? 'selected' : '' }}>2</option>
    </select>
</div>
</div>