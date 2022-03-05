<div class="form-group">
    <label for="image" class="ml-2">Imagen del producto</label>
    <div class="drop-zone">
        <span class="drop-zone__prompt">Arrastra el archivo o haz click para subirlo</span>
        <input type="file" id="image" name="image" class="form-control drop-zone__input" style="display: none;">
    </div>
</div>
<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
        placeholder="Nombre" value="{{ old('name', $producto->name) }}">
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="type">Tipo de producto</label>
    <select class="form-control" type="text" id="type" name="type" value="{{ old('type', $producto->type) }}">
        <option value="">Seleccionar tipo de producto</option>
        <option {{ old('type', $producto->type)=="Sabor" ? 'selected' :''}} value="Sabor">Sabor</option>
        <option {{ old('type', $producto->type)=="Adorno" ? 'selected' :''}} value="Adorno">Adorno</option>
    </select>
</div>
<div class="form-group">
    <label for="price">Precio</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
        placeholder="Precio" value="{{ old('price', $producto->price) }}">
    @error('price')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="description">Descripcion</label>
    <textarea type="text" class="form-control" name="description" name="description" placeholder="Descripcion">{{ old('description', $producto->description) }}</textarea>
    @error('description')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="stock">Existencias</label>
    <input type="text" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock"
        placeholder="Existencias" value="{{ old('stock', $producto->stock) }}">
    @error('stock')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
