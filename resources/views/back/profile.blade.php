@extends('back.master')
@section('title')
@section('content')
<style>
    #pq{
    background: url("{{ asset('dist/img/photo1.png')}}");
    }
</style>
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile Administrateur</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index2.html">Accueil</a></li>
              <li class="breadcrumb-item active">Profile Administrateur</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white" id="pq">
                <h3 class="widget-user-username text-right">THOMAS VINY</h3>
                <h5 class="widget-user-desc text-right">Developpeur Fullstack</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="{{ asset('dist/img/IMG_0013.jpg') }}" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                 
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                 
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>

              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Mes coordonnées</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fas fa-book mr-1"></i> Formation</strong>
  
                  <p class="text-muted">
                   Localhost Academy
                  </p>
  
                  <hr>
  
                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>
  
                  <p class="text-muted">Douala-Cameroun</p>
  
                  <hr>
  
                  <strong><i class="fas fa-pencil-alt mr-1"></i> Compétences</strong>
  
                  <p class="text-muted">
                    <span class="tag tag-danger">PHP</span>
                    <span class="tag tag-success">Javascript</span>
                    <span class="tag tag-info">Mysql</span>
                    <span class="tag tag-warning">Bootstrap</span>
                    <span class="tag tag-primary">Python</span>
                  </p>
  
                  <hr>
  
                  <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
  
                  <p class="text-muted"> Développeur d'applications web avec Php Laravel</p>
                </div>
                <!-- /.card-body -->
              </div>



            </div>
            <!-- /.widget-user -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Modifier<i class="fas fa-pen pl-2"></i></a></li>
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activité</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" id="inputName" placeholder="Entrée votre nom">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Entrée votre email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Mots de passe</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="password" id="inputName2" placeholder="Entrée votre mot de passe">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputFile" class="col-sm-2 col-form-label">Choisir une image</label>
                        <div class="col-sm-10">
                          <div class="custom-file">
                            <input type="file" name="file" class="form-control" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">insérer une image</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="reset" class="btn btn-secondary">Effacer</button>
                        <button type="submit" class="btn btn-danger float-right">Enregistrer</button>
                        </div>
                      </div>
                    </form>
                  </div>

                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Shared publicly - 7:30 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm mb-2" type="text" placeholder="Type a comment">

                      <form class="form-horizontal">
                        <div class="input-group input-group-sm mb-0">
                          <input class="form-control form-control-sm" placeholder="Response">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-danger">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <!-- /.post -->

                    <!-- Post -->
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <!-- /.tab-pane -->
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
 
@endsection