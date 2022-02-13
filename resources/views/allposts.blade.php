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
                <a class="float-right btn btn-danger" href="{{route('addpost')}}">{{('Ajouter un nouveau message')}}</a>
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
                    <td width="300">
                      @if(!Auth::guest())
                      @if(Auth::user()->id == $post->user_id)
                      <div >

                        <form action="/delete/{{$post->id}}" method="POST" style='display:inline;'>
                          @csrf
                          @method("DELETE")
                          <button onclick="return confirm('Are you sure?')" class="btn btn-warning btn-xs btn-flat" type="submit">Supprimer</button>
                        </form>

                        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-xs btn-flat" onclick="return confirm('Are you sure?')">Mise à jour</a>
                      </div>
                      @endif
                      @endif
                    </td>
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
                 {{-- {{ $posts->links()}} --}}
            
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