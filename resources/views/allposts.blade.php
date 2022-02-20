@extends("layouts.admin")
@section("content")

        <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{__(' Tous les articles')}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('Accueil')}}</a></li>
              <li class="breadcrumb-item active">{{__('Tous les articles')}}</li>
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
                <h3 class="card-title">{{__('Tous les articles')}}  </h3>
                <a data-toggle="tooltip" data-placement="left" title="Ajouter un article" class="float-right btn btn-danger" href="{{route('addpost')}}"><i class="fas fa-plus"></i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Titre</th>
                    
                    <th>Corps</th>
                    <th>Image de couverture</th>
                    <th>Créé le</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                   
                  @if (count($posts) > 0)
                    @foreach ($posts as $post)
                  <tr>
                    <td width="10">{{$post->title}}</td>
                  
                    <td width="350">
                      <p >
                        {!! Str::words($post->body, 10, '...')!!}
                      </p>
                    </td>
                    <td width="150"><img style="width: 150px;"class="img-thumbnail rounded mx-auto d-block" src="/storage/cover_images/{{$post->cover_image}}"></td>
                    <td width="140">{{$post->created_at}}</td>
                    @if(!Auth::guest()) 
                    @if(Auth::user()->id == $post->user_id)
                    {{-- @if(Auth::user()->admin == 1) --}}
                    <td width="300">
                      <div >

                        <form action="/delete/{{$post->id}}" method="POST" style='display:inline;'>
                          @csrf
                          @method("DELETE")
                          <button title="Supprimer " onclick="return confirm('Are you sure?')" class="btn btn-warning btn-xs btn-flat" type="submit"><i class="fas fa-trash"></i></button>
                        </form>

                        <a title="Mise à jour" href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-xs btn-flat" onclick="return confirm('Are you sure?')"><i class="fas fa-eye"></i></a>
                        @if (Auth::user()->admin == 1)
                          @if (!$post->approuve == 1)
                          <a title="Approuve" href="{{route('posts.approuve', ['id'=>$post->id])}}" 
                            class="btn btn-xs btn-danger" 
                            onclick='return confirm("Voulez-vous vraiment Approuver ?")'>
                            <i class='fas fa-check-square'></i> 
                            
                          </a> 
                          @else
                          <a title="Désapprouve" href="{{route('posts.unapprouve', ['id'=>$post->id])}}" 
                            class="btn btn-xs btn-danger" 
                            onclick='return confirm("Voulez-vous vraiment Désapprouver ?")'>
                          
                            <i class="fas fa-times"></i>
                          </a>
                          @endif
                        @endif

                       
                      </div>
                    </td>
                    @elseif (Auth::user()->admin == 1)
                    <td width="300">
                      <div >

                        <form action="/delete/{{$post->id}}" method="POST" style='display:inline;'>
                          @csrf
                          @method("DELETE")
                          <button title="Supprimer" onclick="return confirm('Are you sure?')" class="btn btn-warning btn-xs btn-flat" type="submit"><i class="fas fa-trash"></i></button>
                        </form>

                        <a title="Mis à jour" href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-xs btn-flat" onclick="return confirm('Are you sure?')"><i class="fas fa-eye"></i></a>

                        @if (!$post->approuve == 1)
                        <a title="Désapprouve" href="{{route('posts.approuve', ['id'=>$post->id])}}" 
                          class="btn btn-xs btn-danger" 
                          onclick='return confirm("Voulez-vous vraiment Approuver ?")'>
                          <i class="fas fa-times"></i>
                        </a> 
                        @else
                        <a title="Approuve" href="{{route('posts.unapprouve', ['id'=>$post->id])}}" 
                          class="btn btn-xs btn-danger" 
                          onclick='return confirm("Voulez-vous vraiment Désapprouver ?")'>
                         
                          <i class='fas fa-check-square'></i> 
                        </a>
                        @endif

                      </div>
                    </td>
                    @endif 
                    @endif
                  </tr>
                    @endforeach
                     

                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Titre</th>
                     
                      <th>Corps</th>
                      <th>Image de couverture</th>
                      <th>Créé le</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                </table>
                <div class="mt-4">
                  {!! $posts->links() !!}
                </div>
            
                @else
                    <p>Aucun articles trouvé.</p>
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