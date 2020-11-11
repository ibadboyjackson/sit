
<form action="{{ route('contact.post') }}" method="post">
    @csrf
    <div class="form-group">
        <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nom">
        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
        @endif
    </div>
    <div class="form-group">
        <input type="text" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email">
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
        @endif
    </div>
    <div class="form-group">
        <input type="text" name="subject" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" placeholder="Sujet">
        @if ($errors->has('subject'))
            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('subject') }}</strong>
                                </span>
        @endif
    </div>
    <div class="form-group">
        <textarea name="message" id="" cols="30" rows="7" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" placeholder="Message"></textarea>
        @if ($errors->has('message'))
            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('message') }}</strong>
                                </span>
        @endif
    </div>
    <div class="form-group">
        <input type="submit" value="{{ Route::has('/') ? 'Prendre redndez-vous' : 'Envoyer le message' }}" class="btn btn-primary py-3 px-5">
    </div>
</form>

