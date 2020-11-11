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
                <form action="{{ route('beta.update', $beta->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Titre</label>
                                <input name="title" type="text" class="form-control" value="{{ $beta->title }}">
                            </div>
                            <div class="form-group">
                                <label for="content">Contenu</label>
                                <textarea name="content" class="form-control">{{ $beta->content }}</textarea>
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
