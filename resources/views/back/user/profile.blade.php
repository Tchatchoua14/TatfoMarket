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
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
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
              @if (Route::has('login'))
              @auth 
              @if (Auth::user()->role=="admin") 
              <h3 class="widget-user-username text-right">{{ Auth::user()->name }}</h3>
              @endif
              @endauth
              @endif
                <h5 class="widget-user-desc text-right">Developpeur Fullstack</h5>
              </div>
              <div class="widget-user-image">
              <img src="{{ asset('/images/faces/'.Auth::user()->photo) }}"alt="" class="img-fluid zoom" style="width: 110px;height: 110px;border-radius: 50%" />
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
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Profile Page<i class="fas fa-pen pl-2"></i></a></li>
                </ul>
              </div><!-- /.card-header -->

              <div class="card-body"> 
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="image text-center mt-5">
                        @if($profile->photo)
                        <img src="{{ asset('/images/faces/'.Auth::user()->photo) }}"alt="" class="img-fluid zoom" style="width: 50px;height: 50px;border-radius: 50%" />
                        @else 
                        <img class="card-img-top img-fluid roundend-circle mt-4" style="border-radius:50%;height:150px;width:150px;margin:auto;" src="{{ asset('dist/img/IMG_0013.jpg') }}" alt="profile picture">
                        @endif
                    </div>
                    <div class="card-body mt-4 ml-2">
                      <h5 class="card-title text-left"><small><i class="fas fa-user"></i> {{$profile->name}}</small></h5>
                      <p class="card-text text-left"><small><i class="fas fa-envelope"></i> {{$profile->email}}</small></p>
                      <p class="card-text text-left"><small class="text-muted"><i class="fas fa-hammer"></i> {{$profile->role}}</small></p>
                    </div>
                  </div>
            </div>
            <div class="col-md-8">
                <form class="border px-4 pt-2 pb-3" method="POST" action="{{route('profile.update',$profile->id)}}"  enctype="multipart/form-data">
                    @csrf
                    @method('PATCH') 
                    <div class="form-group">
                        <label for="inputTitle" class="col-form-label">Name</label>
                      <input id="inputTitle" type="text" name="name" placeholder="Enter name"  value="{{$profile->name}}" class="form-control">
                      @error('name')
                      <span class="text-danger">{{$message}}</span> 
                      @enderror
                      </div>
              
                      <div class="form-group">
                          <label for="inputEmail" class="col-form-label">Email</label>
                        <input id="inputEmail" disabled type="email" name="email" placeholder="Enter email"  value="{{$profile->email}}" class="form-control">
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
              
                      <div class="form-group">
                      <label for="inputPhoto" class="col-form-label">Photo</label>
                      <div class="input-group">
                          <span class="input-group-btn">
                              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                              <i class="fa fa-picture-o"></i> Choose
                              </a>
                          </span>
                          <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$profile->photo}}">
                      </div>
                        @error('photo')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                      <div class="form-group">
                          <label for="role" class="col-form-label">Role</label>
                          <select name="role" class="form-control">
                              <option value="">-----Select Role-----</option>
                                  <option value="admin" {{(($profile->role=='admin')? 'selected' : '')}}>Admin</option>
                                  <option value="user" {{(($profile->role=='user')? 'selected' : '')}}>User</option>
                          </select>
                        @error('role')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>
                       
                        <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="reset" class="btn btn-secondary">Effacer</button>
                        <button type="submit" class="btn btn-danger float-right">Enregistrer</button>
                        </div>
                      </div>
                </form>
            </div>
        </div>
   </div>
           <!-- /.card-body -->
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

@section('script')
<script src="{{ asset('dist/js/stand-alone-button.js') }}"></script>
<script>
    $('#lfm').filemanager('image');
</script>
@endsection