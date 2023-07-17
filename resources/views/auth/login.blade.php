@extends('layouts.app')

@section('content')
<div class="container">

  <div class="row">
    <div class="col s12 m10 offset-m1 l8 offset-l2">
      <div class="card">
        <form  method="POST" action="{{ route('login') }}">
          <div class="card-content">
            @csrf
            <span class="card-title">Connexion</span>

            <hr>
            <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">mail</i>
                            <input id="email" type="email" name="email"  required="true"  autofocus="true"  value="{{ old('email') }}" class="{{ $errors->has('email') ? 'invalid' : '' }}" required autofocus>
                            <label for="email" data-error="{{ $errors->has('email') ? $errors->first('email'): '' }}">Adresse mail</label>
                        </div>
            </div>

            <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock</i>
                            <input id="password" type="password" name="password"  required="true" class="{{ $errors->has('password') ? 'invalid' : '' }}" required>
                            <label for="password" data-error="{{ $errors->has('password') ? $errors->first('password'): '' }}">Mot de passe</label>
                        </div>
                    </div>

            <div class="row col s12">
              <label>
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <span>Se rappeler de moi</span>
              </label>
            </div>

            <p>
              <button class="btn waves-effect waves-light" style="width:100%" type="submit" name="action">Connexion
                <i class="material-icons right">lock_open</i>
              </button>
            </p>

            <br>

          </div>

          <div class="card-action">
            <p><a href="{{ route('password.request') }}">Mot de passe oublié ?</a></p>
            <p><a href="{{ route('register') }}">Pas de compte ? Créez-en un</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
@endsection