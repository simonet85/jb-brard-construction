@extends('layouts.admin')
@section('content')

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Post</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Ajouter un Article</li>
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
                Nouveau poste
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <form action="{{ route("newpost") }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group ">
                <input 
                    type="text" 
                    class="form-control col-sm-10" 
                    placeholder="Ajouter un titre" 
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
                  <label class="custom-file-label" for="customFile">Choisir le fichier</label>
                </div>
              </div>

              <div class="form-group ">
                <textarea 
                        id="summernote" 
                        name="body">
                        Entrez du texte...
                </textarea>
              </div>
                <button type="submit" class="btn btn-warning">Ajouter un poste</button>
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