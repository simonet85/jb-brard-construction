@extends('layouts.master')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="form-container">
    <form action="{{ route('login') }}" class="login-form" method="POST">
        @csrf
       <h3>formulaire de connexion</h3>
       <input type="email" 
              placeholder="saisissez votre e-mail" 
              class="box" name="email" 
              value="{{ old('email') }}" 
              required autocomplete="email" 
              autofocus
        >
    
       <input type="password" 
              placeholder="saisissez votre mot de passe"
              class="box" 
              name="password" 
              required autocomplete="current-password"
        >
    
       <div class="flex">
          <input type="checkbox"
                 name="remember" 
                 id="remember" {{ old('remember') ? 'checked' : '' }} id="remember-me"
          >
          <label for="remember-me"> {{ __('Rappelez-vous de moi') }}</label>
    
          @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}"> {{ __('Vous avez oublié votre mot de passe ?') }}</a>
          @endif
    
       </div>
       <input type="submit" value="Connectez-vous maintenant" class="btn">
       <p>{{__("vous n'avez pas de compte ?")}} 
            <a href="{{ route('register') }}">{{__("créez-en un !")}}</a>
       </p>
    </form>
</div>

@endsection
