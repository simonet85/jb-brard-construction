@extends('layouts.master')

@section('content')

<div class="form-container">
    {{-- @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif --}}

    

   <form method="POST" action="{{ route('register') }}">
    @csrf
      <h3 class="title">{{__("Inscrivez-vous maintenant")}}</h3>
  <div class="input-group-lg mb-3">
    <input type="text" 
            name="name" 
            class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name') }}"  
            autocomplete="name" 
            placeholder="saisissez votre nom" 
            class="box" required
      >
      @error('name')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
      @enderror
  </div>

  <div class="input-group-lg mb-3">
    <input type="email" 
    name="email" 
    class="form-control @error('email') is-invalid @enderror"
    value="{{ old('email') }}"  
    autocomplete="email" 
    placeholder="saisissez votre e-mail" 
    class="box" required
  >
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>  

  <div class="input-group-lg mb-3">
    <input type="password" 
    class="form-control @error('password') is-invalid @enderror"
          name="password" 
          placeholder="saisissez votre mot de passe" 
          class="box"  
          autocomplete="new-password" required
    >

    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>
  <div class="input-group-lg mb-3">
    <input type="password" 
    class="form-control @error('password') is-invalid @enderror"
          name="password_confirmation" 
          autocomplete="new-password" 
          placeholder="confirmer votre mot de passe" 
          class="box" 
          required
    >
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>

      <button type="submit" class="form-btn ">
        {{ __('Enregistrez vous') }}
      </button>
      
      <p>{{__("vous avez déjà un compte?")}} <br>
        <a href="{{ route('login') }}">{{__("Connectez-vous maintenant!")}}</a>
    </p>
   </form>

</div>

@endsection
