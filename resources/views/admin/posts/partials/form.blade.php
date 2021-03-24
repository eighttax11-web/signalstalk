<div class="form-group">
    {!! Form::label('name', 'Nombre: ') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Escribe el nombre de la publicación']) !!}

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
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Escribe el slug de la publicación ', 'readonly']) !!}

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
    {!! Form::label('category_id', 'Categoría: ') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

    @error('category_id')
    <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @enderror
</div>
<div class="form-group">
    <p class="font-weight-bold">Etiquetas: </p>
    @foreach($tags as $tag)
        <label class="mr-3">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->name }}
        </label>
    @endforeach

    <hr>

    @error('tags')
    <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado: </p>
    <label class="mr-3">
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label>
        {!! Form::radio('status', 2, false) !!}
        Publicado
    </label>

    <hr>

    @error('status')
    <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @enderror
</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset($post->image)
                <img id="picture"
                 src="{{ Storage::url($post->image->url) }}"
                 alt="default">
            @else
                <img id="picture"
                 src="https://cdn.pixabay.com/photo/2020/05/19/20/01/integration-5192458_1280.jpg"
                 alt="default">
            @endif
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen de la publicación: ') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}

            @error('file')
            <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>
        <p>
            Si no selecciona ninguna imagen se le colocara por defecto la que ve de lado izquierdo.<br>
            La imagen debe ser en formato JPEG, JPG, GIF, PNG y no debe pesar más de 5MB.
        </p>
    </div>
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extracto: ') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

    @error('extract')
    <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('body', 'Contenido: ') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

    @error('body')
    <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @enderror
</div>
