<header class="header">

    <a href="{{url('/index')}}" class="logo text-decoration-none">
        {{-- <h3>
           JP-Brard <br> <span>construction</span> 
        </h3> --}}
        <img  class="rounded mx-auto d-block jp_bard_logo" src="/storage/cover_images/jpbarad-logo-white.png" />
    </a>
 
    <nav class="navbar">
       <a href="{{url('/index')}}" class="text-decoration-none">Accueil</a>
       <a href="{{url('/about')}}" class="text-decoration-none">à propos</a>
       <a href="{{url('/services')}}" class="text-decoration-none">services</a>
       <a href="{{url('/blog')}}" class="text-decoration-none">blog</a>
       <a href="{{url('/contact')}}" class="text-decoration-none">contact</a>
       {{-- @if (Route::has('login'))
             <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                 @auth
                     <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                 @else
                     <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
 
                     @if (Route::has('register'))
                         <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                     @endif
                 @endauth
             </div>
         @endif --}}
    </nav>
 
    <div class="icons">
       <div id="menu-btn" class="fas fa-bars"></div>
       <div id="info-btn" class="fas fa-info-circle"></div>
       <div id="search-btn" class="fas fa-search"></div>
       <div id="login-btn" class="fas fa-user"></div>
    </div>
 
    <form action="" class="search-form">
       <input type="search" name="" placeholder="search here..." id="search-box">
       <label for="search-box" class="fas fa-search"></label>
    </form>
 
    <form action="{{ route('login') }}" class="login-form" method="POST">
        @csrf
       <h3>formulaire de connexion</h3>
       <input type="email" 
              placeholder="saisissez votre adresse e-mail" 
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
          <label for="remember-me"> {{ __('se souvenir') }}</label>

          @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}"> {{ __('Vous avez oublié votre mot de passe ?') }}</a>
          @endif

       </div>
       <input type="submit" value="Connectez-vous " class="btn">
       <p>{{__("vous n'avez pas de compte ?")}} 
            <a href="{{ route('register') }}">{{__("créez-en un !")}}</a>
       </p>
    </form>
 
 </header>