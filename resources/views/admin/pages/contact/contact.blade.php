@extends('admin.template')
@section('title')
    Contact
@stop
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Contact</h1>
        <p class="mb-4">Message</p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
                <div class="jumbotron text-center">
                    <strong>Nom :</strong> {{ $contact->name }} <br>
                    <strong>E-mail :</strong> {{ $contact->email }} <br>
                    <strong>Sujet :</strong> {{ $contact->subject }} <br>
                    <strong>Message :</strong> {{ $contact->message }} <br>
                    <strong>Date d'envoie :</strong> {{  date('j M, Y H:i',strtotime($contact->created_at)) }} <br>
                </div>
            </div>
        </div>
    </div>
@stop
