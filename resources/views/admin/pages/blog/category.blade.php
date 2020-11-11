@extends('admin.template')
@section('title')
    Blog | Catégorie
@stop
@section('content')
    <div class="container-fluid">
        @include('admin.includes.message')
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Catégorie</h1>
        <p class="mb-4">Ici vous pouvez modifier, créer ou sipprimer les Catégorie, voiçi la liste des Catégorie sur la page blog</p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('categories.create') }}" class="btn btn-primary">Ajouter</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-success">Editer</a>
                                        <form action="{{ route('categories.destroy', $category->id) }}" style="display: inline-block" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@stop
