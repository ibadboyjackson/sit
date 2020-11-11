@extends('admin.template')
@section('title')
    Blog
@stop
@section('content')
    <div class="container-fluid">
        @include('admin.includes.message')
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Blog</h1>
        <p class="mb-4">Ici vous pouvez modifier, créer ou sipprimer les articles, voiçi la liste des articles sur la page blog</p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('posts.create') }}" class="btn btn-primary">Ajouter</a>
                <a href="{{ route('categories.index') }}" class="btn btn-dark">Administrer les catégories</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Contenu</th>
                            <th>Image</th>
                            <th>Nom de l'auteur</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ substr($post->content, 0, 30) }}...</td>
                                    <td>{{ $post->image }}</td>
                                    <td>{{ $post->author }}</td>
                                    <td>
                                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success">Editer</a>
                                        <form action="{{ route('posts.destroy', $post->id) }}" style="display: inline-block" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger" type="submit">Supprimer</button>
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
