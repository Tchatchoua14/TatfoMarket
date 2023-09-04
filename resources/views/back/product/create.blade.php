@extends('back.master')
@section('head')
<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="{{ asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
<!-- Bootstrap4 Duallistbox -->
<link rel="stylesheet" href="{{ asset('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
<!-- BS Stepper -->
<link rel="stylesheet" href="{{ asset('plugins/bs-stepper/css/bs-stepper.min.css') }}">
<!-- dropzonejs -->
<link rel="stylesheet" href="{{ asset('plugins/dropzone/min/dropzone.min.css') }}">
@endsection
@section('title', 'create-product')
@section('content')
  <!-- Content Wrapper. Contains page content --> 
  <div class="content-wrapper" style="min-height: 1345.31px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Validation</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
              <li class="breadcrumb-item active">Validation</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6 mb-2">
            <a href="{{ route('product.index') }}" class="btn btn-success float-right">Voir la liste des produits</a>
          </div>
          <div class="col-md-3"></div>
        </div>
        <div class="row">
          <!-- left column -->
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Creation d'un nouveau produit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
                <form method="post" action="{{route('product.store')}}"  enctype="multipart/form-data">
                  @csrf 
                  <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Titre <span class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="name" placeholder="Enter name" class="form-control" value="{{old('name')}}">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="description" class="col-form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" value="{{old('description')}}">{{old('description')}}</textarea>
                    @error('description')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="inputPhoto" class="col-form-label">Image 1 <span class="text-danger">*</span></label>
                   <div class="input-group">
                        <span class="input-group-btn">
                            <a id="lfm1" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                            <i class="fas fa-image"></i> Choisir une image 
                            </a>
                        </span>
                        <input id="image1" type="text" class="form-control @error('image1') is-invalid @enderror" name="image1" value="{{ old('image1') }}" autofocus>
                  
                   </div>
                  <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    @error('image1')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>

                  <div class="form-group"> 
                    <label for="inputPhoto" class="col-form-label">Image 2<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                            <i class="fas fa-image"></i> Choisir une image 
                            </a>
                        </span>
                    <input id="image2" type="text" class="form-control @error('image2') is-invalid @enderror" name="image2" value="{{ old('image2') }}" autofocus>
                   </div>
                  <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    @error('image2')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>

                  {{-- {{$categories}} --}}

                  <div class="form-group">
                    <label for="cat_id">Catégorie <span class="text-danger">*</span></label>
                    <select name="cat_id" id="cat_id" class="form-control">
                        <option value="">--Select any category--</option>
                        @foreach($categories as $key=>$cat_data)
                            <option value='{{$cat_data->id}}'>{{$cat_data->name}}</option>
                        @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="stock">Quantité <span class="text-danger">*</span></label>
                    <input id="stock" type="number" name="stock" min="1" placeholder="Entrez un stock"   class="form-control">
                    @error('stock')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="size">Taille</label>
                    <select name="size[]" class="form-control selectpicker"  multiple data-live-search="true">
                        <option value="">--sectionnez une taille--</option>
                        <option value="XS">Extra Small (S)</option>
                        <option value="S">Small (S)</option>
                        <option value="M">Medium (M)</option>
                        <option value="L">Large (L)</option>
                        <option value="XL">Extra Large (XL)</option>
                        <option value="XXL">X Extra Large (XXL)</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="condition">Condition</label>
                    <select name="condition[]" class="form-control selectpicker"  multiple data-live-search="true">
                        <option value="">--sectionnez une condition--</option>
                        <option value="SALE">Sale</option>
                        <option value="-16%">-16%</option>
                        <option value="NEW">New</option>
                        <option value="HOT">Hot</option>
                        <option value="POPULAR">Popular</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="color">Couleur</label>
                    <select name="color[]" class="form-control selectpicker"  multiple data-live-search="true">
                        <option value="">--sectionnez une couleur--</option>
                        <option value="RED">Rouge</option>
                        <option value="BLACK">Noir</option>
                        <option value="GREEN">Vert</option>
                        <option value="WHITE">Blanc</option>
                        <option value="YELLOW">Jaune</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="is_featured">Status</label><br>
                    <input type="checkbox" name='status[]' id='status' value='1' checked> Yes                        
                  </div>

                  <div class="form-group"> 
                    <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    @error('status')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="price" class="col-form-label">Prix <span class="text-danger">*</span></label>
                    <input id="price" type="number" name="price" min="500" placeholder="Enter price" class="form-control">
                    @error('price')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="priceReduction" class="col-form-label">Prix de réduction</label>
                    <input id="priceReduction" type="number" min="500" name="priceReduction" placeholder="Enter price" class="form-control">
                    @error('priceReduction')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  
                  <div class="form-group mb-3">
                    <button type="reset" class="btn btn-warning">Effacer</button>
                    <button class="btn btn-success" type="submit">Enregistrer</button>
                  </div>
                </form>
    </div>

            </div>
            <!-- /.card -->
            </div>
          <div class="col-md-3"></div>
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
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
    $('#lfm').filemanager('image2');
    $('#lfm1').filemanager('image1');
</script>

@endsection