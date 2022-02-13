@extends("layouts.admin")
@section("content")

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{__('Tous les utilisateurs')}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('Accueil')}}</a></li>
              <li class="breadcrumb-item active">{{__('Tous les utilisateurs')}}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{__('Tous les utilisateurs')}}  </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Photo</th>
                  </tr>
                  </thead>
                  <tbody>
                  @if (count($users) > 0)
                    @foreach ($users as $user)
                  <tr>
                    <td width="50">{{$user->name}}</td>
                    <td width="350">{{$user->email}}</td>
                    <td width="150">
                      <img style="width:150px;"class="img-thumbnail rounded mx-auto d-block" src="/storage/cover_images/{{$user->photo}}">
                    </td>

                  </tr>
                    @endforeach
                     

                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Nom</th>
                      <th>Email</th>
                      <th>Photo</th>
                    </tr>
                  </tfoot>
                </table>
                 {{-- {{ $posts->links()}} --}}
            
                @else
                    <p>Aucun utilisateur trouvé.</p>
                @endif
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection