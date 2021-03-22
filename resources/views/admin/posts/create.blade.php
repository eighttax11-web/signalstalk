@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create a new post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off']) !!}

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
    </script>
@stop
