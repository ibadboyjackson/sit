@extends('admin.template')
@section('title')
    Dashboard
@stop
@section('content')
    <div class="container-fluid">
    @include('admin.includes.message')

    <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Acceuil</h1>
        <p class="mb-4">Ici vous pouvez modifier les informations qui se trouvent sur la page d'acceuil</p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Image de fond</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($slides as $slide)
                            <tr>
                                <td>{{ $slide->title }}</td>
                                <td>{{ substr($slide->description, 0, 50) }}</td>
                                <td> {{ $slide->image }} </td>
                                <td>
                                    <a href="{{ route('slide.edit', $slide->id) }}" class="btn btn-success">Editer</a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Contenu</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($betas as $beta)
                                <tr>
                                    <td>{{ $beta->title }}</td>
                                    <td>{{ substr($beta->content, 0, 50) }}</td>
                                    <td>
                                        <a href="{{ route('beta.edit', $beta->id) }}" class="btn btn-success">Editer</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Service
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
                            @foreach($services as $service)
                                <tr>
                                    <td> {{ $service->category }} </td>
                                    <td> {{ $service->title }} </td>
                                    <td>{{ substr($service->description, 0, 70) }}</td>
                                    <td>
                                        <a href="{{ route('service.edit', $service->id) }}" class="btn btn-success">Editer</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                        <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Contenu</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($seattle as $seattles)
                                <tr>
                                    <td>{{ $seattles->title }}</td>
                                    <td>{{ substr($seattles->content, 0, 30) }}</td>
                                    <td>{{ $seattles->image }}</td>
                                    <td>
                                        <a href="{{ route('seattle.edit', $seattles->id) }}" class="btn btn-success">Editer</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Image de fond</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($constructions as $construction)
                                <tr>
                                    <td>{{ $construction->title }}</td>
                                    <td>{{ substr($construction->description, 0, 30) }}</td>
                                    <td>{{ $construction->image }}</td>
                                    <td>
                                        <a href="{{ route('construction.edit', $construction->id) }}" class="btn btn-success">Editer</a>
                                        <a href="{{ route('construction.create') }}" class="btn btn-success">Ajouter</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Team
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
                            @foreach($teams as $team)
                                <tr>
                                    <td>{{ $team->category }}</td>
                                    <td>{{ $team->title }}</td>
                                    <td>{{ substr($team->description, 0, 30) }}</td>
                                    <td>
                                        <a href="{{ route('team.edit', $team->id) }}" class="btn btn-success">Editer</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Fonction</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($members as $member)
                                <tr>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->function }}</td>
                                    <td>{{ $member->image }}</td>
                                    <td>
                                        <a href="{{ route('member.edit', $member->id) }}" class="btn btn-success">Editer</a>
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
