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
                    <th>Roles</th>
                    <th>Photo</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  @if (count($users) > 0)
                    @foreach ($users as $user)
                  <tr>
                    <td width="50">{{$user->name}}</td>
                    <td width="350">{{$user->email}}</td>
                    <td width="350">{{$user->roles}}</td>
                    <td width="150">
                      <img 
                          style="width:50px; height:50px;"
                          class="img-thumbnail rounded mx-auto d-block" 
                          src="/storage/cover_images/{{$user->photo}}">
                    </td>
                    <td width="50">
                      @if($user->admin)
                    
                      {{-- {{ route('users.not.admin', ['id'=>$user->id]) }} --}}
                      <a title=" Supprimer les autorisations" 
                        href="{{route('users.not.admin', ['id'=>$user->id])}}" 
                        class="btn btn-xs btn-danger " 
                        onclick='return confirm("Voulez-vous vraiment Supprimer ?")'>
                       
                        <i class="fas fa-times"></i>
                      </a>
                      @else
                      
                      {{-- {{ route('users.admin', ['id'=>$user->id]) }} --}}
                      <a title=" Rendre Admin"  href="{{route('users.admin', ['id'=>$user->id])}}" class="btn btn-xs btn-success" onclick='return confirm("Voulez-vous vraiment Changer ?")'>
                       
                        <i class='fas fa-check-square'></i> 
                      </a>
                      @endif
                    </td>
                  </tr>
                    @endforeach
                     

                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Nom</th>
                      <th>Email</th>
                      <th>Roles</th>
                      <th>Photo</th>
                      <th>Actions</th>
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