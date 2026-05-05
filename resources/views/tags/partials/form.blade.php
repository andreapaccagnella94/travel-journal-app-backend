@csrf

@if(isset($tag))
    @method('PUT')
@endif

<div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" name="name"
           value="{{ old('name', $tag->name ?? '') }}"
           class="form-control @error('name') is-invalid @enderror">

    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Colore</label>
    <input type="color" name="color"
           value="{{ old('color', $tag->color ?? '#6c757d') }}"
           class="form-control form-control-color">

    @error('color')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

@if (isset($tag))
    <div class="mt-2">
        <span class="badge text-white"
          style="background-color: {{ old('color', $tag->color ?? '#6c757d') }}">
            Preview
        </span>
    </div>
@endif

<button class="btn btn-success mt-3">Salva</button>