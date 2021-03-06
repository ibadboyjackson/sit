@extends('admin.template')
@section('title')
    Dashboard
@stop
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Modifier</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                @include('admin.includes.message')
            </div>
            <div class="card-body">
                <form action="{{ route('project.update', $project->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Categorie</label>
                                <textarea name="category" class="form-control">{{ $project->category }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="title">Titre</label>
                                <input name="title" type="text" class="form-control" value="{{ $project->title }}">
                            </div>
                            <div class="form-group">
                                <label for="image">Ajouter une image de fond</label>
                                <input type="file" name="image" class="form-control" value="{{ $project->image }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <button class="btn btn-primary">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
