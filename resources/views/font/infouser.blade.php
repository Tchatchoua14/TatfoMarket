@extends('font.master')
@section('title')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
           	<!--Page Title-->
        <div class="col-sm-6">
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Mes informations personnelles</h1></div>
      		</div> 
		</div>
        </div>
        <!--End Page Title-->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
              <li class="breadcrumb-item active"><a href="{{ route('compteuser') }}">Retour à mon compte</a></li>
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
          <div class="col-md-1"></div>
          <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white" id="pq">
                <h3 class="widget-user-username text-right">THOMAS VINY</h3>
                <h5 class="widget-user-desc text-right">Developpeur Fullstack</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle img-bordered-sm" src="{{ asset('dist/img/IMG_0013.jpg') }}" width="500px"  height="500px" alt="User Avatar">
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
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Profile<i class="fas fa-pen pl-2"></i></a></li>
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Adresse</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" id="inputName" placeholder="entrée votre nom">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" id="inputEmail" placeholder="entrée votre email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Mots de passe</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="password" id="inputName2" placeholder="entrée votre mot de passe">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputFile" class="col-sm-2 col-form-label">Choisir une image</label>
                        <div class="col-sm-10">
                          <div class="custom-file">
                            <input type="file" name="file" class="form-control" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Insérer une image</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="reset" class="btn btn-secondary">Annuler</button>
                        <button type="submit" class="btn btn-danger float-right">Enregistrer</button>
                        </div>
                      </div>
                    </form>
                  </div>

                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" id="inputName" placeholder="entrée votre nom">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Prénom</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" id="inputName" placeholder="entrée votre nom">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" id="inputEmail" placeholder="entrée votre email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Mots de passe</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="password" id="inputName2" placeholder="entrée votre mot de passe">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" id="inputName" placeholder="entrée votre nom">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Pays</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" id="inputName" placeholder="entrée votre nom">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Télephone</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" id="inputName" placeholder="entrée votre nom">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Postcode</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" id="inputName" placeholder="entrée votre nom">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Adresse</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" id="inputName" placeholder="entrée votre nom">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="reset" class="btn btn-secondary">Annuler</button>
                        <button type="submit" class="btn btn-danger float-right">Enregistrer</button>
                        </div>
                      </div>
                    </form>
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
          <div class="col-md-1"></div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection