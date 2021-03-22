@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create a new post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off', 'files' => true]) !!}

            {!! Form::hidden('user_id', auth()->user()->id) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the post name']) !!}

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
                {!! Form::label('slug', 'Slug:') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Enter the post slug', 'readonly']) !!}

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
                {!! Form::label('category_id', 'Category:') !!}
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
                <p class="font-weight-bold">Tags:</p>
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
                <p class="font-weight-bold">Status:</p>
                <label class="mr-3">
                    {!! Form::radio('status', 1, true) !!}
                    Draft
                </label>
                <label>
                    {!! Form::radio('status', 2, false) !!}
                    Published
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
                        <img id="picture"
                             src="https://cdn.pixabay.com/photo/2020/05/19/20/01/integration-5192458_1280.jpg"
                             alt="default">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        {!! Form::label('file', 'Image of the post:') !!}
                        {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}

                        @error('file')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.
                    </p>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('extract', 'Extract:') !!}
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
                {!! Form::label('body', 'Body:') !!}
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

            {!! Form::submit('Create post', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <style>
        .image-wrapper {
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@endsection

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>

    <script>
        $(document).ready(function () {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

        ClassicEditor
            .create(document.querySelector('#extract'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#body'))
            .catch(error => {
                console.error(error);
            });

        //Cambiar imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event) {
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }
    </script>
@stop
