@extends('admin.template')
@section('title')
    Dashboard
@stop
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Modifié un article</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                @include('admin.includes.message')
            </div>
            <div class="card-body">
                <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Titre</label>
                                <input name="title" type="text" value="{{ $post->title }}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="content">Contenu</label>
                                <textarea name="content" class="form-control">{{ $post->content }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="Category">Ajouter une catégorie</label>
                                <select name="category_id" id="" class="form-control">
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @foreach($categories as $k => $v)
                                        <option value="{{ $v }}">{{ $k }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="author">Nom de l'auteur</label>
                                <input name="author" type="text" class="form-control" value="{{ $post->author }}">
                            </div>
                            <div class="form-group">
                                <label for="image">Ajouter une image</label>
                                <input type="file" name="image" class="form-control" value="{{ $post->image}}">
                            </div>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
