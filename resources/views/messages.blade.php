@extends("layouts.admin")
@section("content")

        <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{__('All Messages')}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('Home')}}</a></li>
              <li class="breadcrumb-item active">{{__('All Messages')}}</li>
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
                <h3 class="card-title">{{__('All Messages')}}  </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Message</th>
                      <th>Créer le</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  @if (count($messages) > 0)
                    @foreach ($messages as $message)
                  <tr>
                    <td>{{$message->name}}</td>
                    <td>{{ $message->email}}</td>
                    <td>{{$message->phone}}</td>
                    <td>{!! Str::words($message->message,15) !!}</td>
                    <td width="150">{{$message->created_at}}</td>
                    <td width="180">
                      <div >

                        <form action="/delmessage/{{$message->id}}" method="POST" style='display:inline;'>
                          @csrf
                          @method("DELETE")
                          <button onclick="return confirm('Are you sure?')" class="btn btn-warning btn-xs btn-flat" type="submit">Supprimer</button>
                        </form>

                        <a href="/message/{{$message->id}}" class="btn btn-primary btn-xs btn-flat" onclick="return confirm('Are you sure?')">Voir</a>
                      </div>
                    </td>
                  </tr>
                    @endforeach
                     

                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Nom</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Message</th>
                      <th>Créer le</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                </table>
                 {{-- {{ $posts->links()}} --}}
            
                @else
                    <p>Aucun message trouvé.</p>
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