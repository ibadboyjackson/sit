@extends('admin.template')
@section('title')
    newsletters
@stop
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Newsletters</h1>
        <p class="mb-4">Ici vous allez voir la liste des personnes inscrites à votre newsletter</p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Email</th>
                            <th>Date d'inscription</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($newsletters as $newsletter)
                            <tr>
                                <td>{{ $newsletter->emails }}</td>
                                <td>{{  date('j M, Y H:i',strtotime($newsletter->created_at)) }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $newsletters->links() }}
        </div>

    </div>
@stop
