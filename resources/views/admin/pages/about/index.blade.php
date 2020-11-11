@extends('admin.template')
@section('title')
    A propos
@stop
@section('content')
    <div class="container-fluid">
        @include('admin.includes.message')
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">A propos</h1>
        <p class="mb-4">Ici vous pouvez modifier les informations qui se trouvent sur la page a propos</p>
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
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($abouts as $about)
                                <tr>
                                    <td>{{ substr($about->title, 0, 20) }}</td>
                                    <td>{{ substr($about->description, 0, 30) }}</td>
                                    <td>{{ $about->image }}</td>
                                    <td>
                                        <a href="{{ route('about.edit', $about->id) }}" class="btn btn-success">Editer</a>
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
