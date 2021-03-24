<div class="form-group">
    {!! Form::label('name', 'Nombre: ') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Escriba el nombre de la etiqueta']) !!}

    @error('name')
    <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug: ') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Escriba el slug de la etiqueta', 'readonly']) !!}

    @error('slug')
    <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('color', 'Color: ') !!}
    {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}

    @error('color')
    <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @enderror
</div>
