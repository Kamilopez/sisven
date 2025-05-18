@csrf
<div class="mb-3">
    <label for="name">Nombre</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $category->name ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="description">Descripción</label>
    <textarea name="description" class="form-control">{{ old('description', $category->description ?? '') }}</textarea>
</div>
<button class="btn btn-success">Guardar</button>
