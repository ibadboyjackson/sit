@extends('admin.template')
@section('title')
    Projets
@stop
@section('content')
    <div class="container-fluid">
        @include('admin.includes.message')
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Projet</h1>
        <p class="mb-4">Ici vous pouvez modifier les informations qui se trouvent sur la page projet</p>
        <a href="{{ route('project.create') }}" class="btn btn-primary mb-4">Ajouter un projet</a>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Projets
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Catégorie</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($projectors as $projector)
                                <tr>
                                    <td>{{ $projector->category }}</td>
                                    <td>{{ $projector->title }}</td>
                                    <td>{{ substr($projector->description, 0, 30) }}</td>
                                    <td>
                                        <a href="{{ route('projector.edit', $projector->id) }}" class="btn btn-success">Editer</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                        <tr>
                            <th>Catégorie</th>
                            <th>Titre</th>
                            <th>Images</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <td>{{ $project->category }}</td>
                                    <td>{{ $project->title }}</td>
                                    <td>{{ $project->image }}</td>
                                    <td>
                                        <div class="form-group">
                                            <a href="{{ route('project.edit', $project->id) }}" class="btn btn-success">Editer</a>
                                            <form action="{{ route('project.destroy', $project->id) }}" style="display: inline-block" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger">Supprimer</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $projects->links() }}
        </div>

    </div>
@stop
