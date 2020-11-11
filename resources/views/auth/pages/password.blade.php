@extends('auth.template')
@section('title')
    Réinitialser le mot de passe
@stop
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Réinitialser le mot de passe</h1>
                                    </div>
                                    <form class="user" action="{{ route('password.email') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-user" name="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Adresse Email ...">
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                 </span>
                                            @endif
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Envoyer
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
