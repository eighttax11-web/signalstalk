@extends('adminlte::page')

@section('title', 'Categorías')

@section('content_header')
    <h1>Lista de categorías</h1>
@stop

@section('content')

    @if(session('info'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>{{ session('info') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="card">
        @can('admin.categories.create')
        <div class="card-header">
            <a href="{{ route('admin.categories.create') }}" class="btn btn-success">Crear una nueva categoría</a>
        </div>
        @endcan
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td width="10px">
                                @can('admin.categories.edit')
                                <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-primary">Editar</a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.categories.destroy')
                                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="mt-4">
        {{ $categories->links('vendor.pagination.bootstrap-4') }}
    </div>
@stop

