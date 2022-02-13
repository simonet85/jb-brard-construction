@extends('layouts.admin')
@section('content')

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Post</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Post</li>
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
                Edit Post
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <form action="{{ url("updatepost/$post->id") }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method("PUT")
              <div class="form-group ">
                <input 
                    type="text" 
                    class="form-control col-sm-10" 
                    placeholder="Add a title" 
                    value="{{$post->title}}"
                    name="title">
              </div>

              <div class="form-group ">
                {{-- <label for="inputName2" class="col-sm-2 col-form-label">Photo</label> --}}
                <div class="col-sm-10 custom-file">
                  <input 
                        type="file" 
                        class="form-control custom-file-input" 
                        id="customFile" 
                        placeholder="Photo" 
                        name="cover_image"
                  >
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>

              <div class="form-group ">
                <textarea class="form-control "
                    id="summernote" 
                    name="body"
                        >
                    {!!$post->body!!}
                </textarea>
              </div>
                <button type="submit" class="btn btn-warning">Edit Post</button>
            </form>
            </div>
          
          </div>
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