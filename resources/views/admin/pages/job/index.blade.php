@extends('admin.template')
@section('title')
    job
@stop
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Job</h1>
        <p class="mb-4">Ici vous allez voir la liste des personnes qui postule pour un travail</p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Date d'envoie</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($jobs as $job)
                            <tr>
                                <td>{{ $job->name }}</td>
                                <td>{{ $job->email }}</td>
                                <td>{{ substr($job->message, 0, 50) }}</td>
                                <td>{{  date('j M, Y H:i',strtotime($job->created_at)) }}</td>
                                <td>
                                    <a href="{{ route('job.message', $job->id) }}" class="btn btn-success">Afficher</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $jobs->links() }}
        </div>

    </div>
@stop
