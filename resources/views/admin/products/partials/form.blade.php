<div class="form-group mb-3">
    <label class="text-white">Nombre:</label>
    <input type="text" name="name" class="form-control" value="{{ $product->name ?? '' }}" required>
</div>

<div class="form-group mb-3">
    <label class="text-white">Informacion importante :</label>
    <textarea name="body" class="form-control text-black">{{ $product->body ?? ''}}</textarea>
</div>

<div class="form-group mb-3">
    <label class="text-white">Extra de info del Producto:</label>
    <textarea name="extract" id="extract" class="form-control text-black">{{ $product->extract  ?? '' }}</textarea>
</div>


<div class="row mb-3">


    <div class="form-group col-4 mb-3">
        <label class="text-white">Precio del Producto:</label>
        <input type="number" name="price" class="form-control" value="{{ $product->product_price->price ?? '' }}" required>
    </div>
    <div class="form-group col-4 mb-3">
        <label class="text-white">Descuento (%):</label>
        <input type="number" name="discount" class="form-control" value="{{ $product->product_price->discount ?? 0 }}">
    </div>
    <div class="form-group col-4 mb-3">
        <label class="text-white">Precio Final:</label>
        <input type="number" name="final_price" class="form-control" value="{{ $product->product_price->final_price ?? '' }}" readonly>
    </div>

<div class="form-group col-4 mb-3">
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

<div class="form-group col-4 mb-3 ">
    <label class="text-white">Marca:</label>
    <select name="brand_id" class="form-control">
        @foreach ($brands as $brand)
            <option value="{{ $brand->id }}" 
                {{ $product->brand_id == $brand->id ? 'selected' : '' }}>
                {{ $brand->title }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group col-4 mb-3">
    <label class="text-white">Cantidad del Producto:</label>
    <input type="number" name="stock" class="form-control" value="{{ $product->stock ?? '' }}">
</div>

<div class="form-group col-4 mb-3">
    <label class="text-white">Status:</label>
    <select name="status" class="form-control">
        <option value="1" {{ $product->status == 1 ? 'selected' : '1' }}>Activo</option>
        <option value="2" {{ $product->status == 2 ? 'selected' : '2' }}>Desactivado</option>
    </select>
</div>

{{-- tags edit --}}
<div class="row">
    <div class="form-group col-12 mb-3">
        <label class="text-white mb-2">Etiquetas:</label>
        <div class="d-flex flex-wrap">
            @foreach ($tags as $tag)
                <div class="form-check form-check-inline me-3">
                    <input class="form-check-input" type="checkbox" id="tag_{{ $tag->id }}" name="tags[]" value="{{ $tag->id }}" 
                        {{ $product->tags->contains($tag->id) ? 'checked' : '' }}>
                    <label class="form-check-label text-white" for="tag_{{ $tag->id }}">{{ $tag->name }}</label>
                </div>
            @endforeach
        </div>
    </div>
</div>


</div>