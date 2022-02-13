@extends("layouts.admin")
    @section("content")
    <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Profile</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Accueil</a></li>
                <li class="breadcrumb-item active">Profil utilisateur</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">

                    @if (!Storage::exists('/cover_images/{{auth()->user()->photo}}'))   
                    <img class="profile-user-img img-fluid img-circle" 
                        src="/storage/cover_images/{{auth()->user()->photo}}"
                        alt="{{Auth::user()->name}}">
                    @else
                        <img src="/storage/cover_images/noimage.png" class="img-circle elevation-2">
                    @endif
              
                    </div>

                    <ul class="list-group list-group-unbordered mb-3 mt-4 text-center">
                    <li class="list-group-item">
                        <b>Nom :</b> <a>{{Auth::user()->name}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>E-mail</b> <a>{{Auth::user()->email}}</a>
                    </li>
                    </ul>

                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active">Mise à jour du profil</a>
                        </li>
                    </ul>
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger mt-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div>
                    <!-- /.tab-pane -->

                    <div>
                        <form class="form-horizontal" method="POST" action="updateprofil/{{Auth::user()->id}}" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
                            <div class="col-sm-10">
                            <input 
                                type="text"  
                                class="form-control 
                                @error('name') is-invalid @enderror" 
                                id="inputName" 
                                placeholder="Nom" name="name"
                            >
                            </div>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input 
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror"
                                id="inputEmail" 
                                placeholder="Email" 
                                name="email"
                            >
                            </div>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Photo</label>
                            <div class="col-sm-10 custom-file">

                            <input type="file" class="form-control custom-file-input" id="customFile" placeholder="Photo" name="photo">

                            <label class="custom-file-label" for="customFile">Choisir le fichier</label>
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Envoyer</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
                </div>
                <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">

                    <li class="nav-item"><a class="nav-link active">{{__('Mettre à jour le mot de passe')}}</a></li>
                    </ul>
                </div><!-- /.card-header -->

                <div class="card-body">
                    <div>
                    <!-- /.tab-pane -->
                    <div>
                        {{-- <form method="POST" class="form-horizontal" action="{{ route('password.email') }}">
                            @csrf

                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">{{__('Email Address')}}</label>

                            <div class="col-sm-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            
                        </div> --}}
                        <div class="form-group row">
                           
                            <div class="offset-sm-2 col-sm-10">
                                @if (Route::has('password.request'))
                                <a class="btn btn-danger" href="{{ route('password.request') }}">
                                    {{ __('Changer votre mot de passe ?') }}
                                </a>
                                @endif
                                
                            </div>

                         

                        </div>
                        {{-- </form> --}}
                    </div>
                    <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.1.0
        </div>
        <strong>Copyright &copy; 2014-2021 
            <a href="{{route('home')}}">{{ config('app.name', 'Laravel') }}</a>.
        </strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

<!-- Button trigger modal -->
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
@endsection
