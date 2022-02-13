@extends('layouts.admin')
@section('content')

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Message</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Message</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                View Message
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <p> <b>Name:</b>  {{$msg->name}}</p>
                <p> <b>Email:</b>  {{$msg->email}}</p> 
                <p> <b> Phone:</b>  {{$msg->phone}}</p>
        
                <textarea 
                  id="summernote" 
                  name="body"
                  >
                  {!!$msg->message!!}
                </textarea>

                <p> <b>Sent on :</b>  {{$msg->created_at}}</p>

              </div>
            </div>
            <a href="{{url("/messages")}}" class="btn btn-primary btn-xs">All messages</a>
        </div>
        <!-- /.col-->
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
    $(function () {
      // Summernote
      $('#summernote').summernote({
        tabsize: 2,
        height: 200,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      })
    })
  </script>

@endsection