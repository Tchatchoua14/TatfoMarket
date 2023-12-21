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
@section('title', 'edit-product')
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
                <h3 class="card-title">Modification d'un produit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                    @if (session()->has('success'))
                    <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3">
                    {{ session('success') }}
                    </div>
                    @endif

      <div class="card-body">
      <form method="post" action="{{ route('product.update',$product->id) }}"  enctype="multipart/form-data">
        @csrf 
        @method('PUT')
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Nom <span class="text-danger">*</span></label>
          <input id="inputTitle" type="text" name="name" placeholder="Enter name"  value="{{$product->name}}" class="form-control">
          @error('name')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Slug</label>
          <input id="inputSlug" type="text" name="slug" placeholder="Enter slug"  value="{{$product->slug}}" class="form-control">
          @error('slug')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="description" class="col-form-label">Description</label>
          <textarea class="form-control" id="description" name="description"  value="{{$product->description}}">{{$product->description}}</textarea>
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
            <input id="thumbnail" class="form-control" type="file" name="image1" value="{{$product->image1}}">
            </div>
          <div id="holder" style="margin-top:15px;max-height:100px;"></div>
            @error('image1')
            <span class="text-danger">{{$message}}</span> 
            @enderror
        </div>


        <div class="form-group">
          <label for="inputPhoto" class="col-form-label"> Image 2  <span class="text-danger">*</span></label>
          <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                    <i class="fas fa-image"></i> Choisir une image
                    </a>
                </span>
            <input id="image2" class="form-control" type="file" name="image2" value="{{$product->image2}}">
            </div>
         
          <div id="holder" style="margin-top:15px;max-height:100px;"></div>
            @error('image2')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
          <label for="stock">Quantité <span class="text-danger">*</span></label>
          <input id="quantity" type="number" name="stock" min="1" placeholder="Enter quantity"  value="{{$product->stock}}" class="form-control">
          @error('stock')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
      
        
        <div class="form-group">
          <label for="price" class="col-form-label">Price <span class="text-danger">*</span></label>
          <input id="price" type="number" name="price" placeholder="Enter price" min="500"  value="{{$product->price}}" class="form-control">
          @error('price')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="priceReduction" class="col-form-label">Prix de réduction<span class="text-danger">*</span></label>
          <input id="priceReduction" type="number" name="priceReduction" min="500" placeholder="Enter price"  value="{{$product->priceReduction}}" class="form-control">
          @error('priceReduction')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="cat_id">Catégorie <span class="text-danger">*</span></label>
          <select name="cat_id" id="cat_id" class="form-control">
              <option value="">--Select any category--</option>
              @foreach($categories as $key=>$cat_data)
                  <option value='{{$cat_data->id}}' {{(($product->cat_id==$cat_data->id)? 'selected' : '')}}>{{$cat_data->name}}</option>
              @endforeach
          </select>
          @error('cat_id')
                   <span class="alert text-danger">{{ $message }}</span>
                @enderror
        </div>

        <div class="form-group">
          <label for="size">Size</label>
          <select name="size[]" class="form-control selectpicker"  multiple data-live-search="true">
              <option value="">--Selectionné une taille--</option>
              <option value="XS" {{(($product->size=='XS')? 'selected':'')}}>Extra Small</option>
              <option value="S" {{(($product->size=='S')? 'selected':'')}}>Small</option>
              <option value="M" {{(($product->size=='M')? 'selected':'')}}>Medium</option>
              <option value="L" {{(($product->size=='L')? 'selected':'')}}>Large</option>
              <option value="XL" {{(($product->size=='XL')? 'selected':'')}}>Extra Large</option>
              <option value="XXL" {{(($product->size=='XXL')? 'selected':'')}}> X Extra Large</option>
          </select>
        </div>

        <div class="form-group">
          <label for="condition">Condition</label>
          <select name="condition[]" class="form-control">
              <option value="">--Select Condition--</option>
              <option value="SALE" {{(($product->condition=='SALE')? 'selected':'')}}>SALE</option>
              <option value="NEW" {{(($product->condition=='NEW')? 'selected':'')}}>NEW</option>
              <option value="HOT" {{(($product->condition=='HOT')? 'selected':'')}}>HOT</option>
              <option value="-10%" {{(($product->condition=='-10%')? 'selected':'')}}>-10%</option>
              <option value="POPOLUAR" {{(($product->condition=='POPULAR')? 'selected':'')}}>POPULAR</option>
          </select>
        </div>

        <div class="form-group">
          <label for="condition">Couleur</label>
          <select name="color[]" class="form-control">
              <option value="">--Selectionnez une couleur--</option>
              <option value="SALE" {{(($product->color=='RED')? 'selected':'')}}>Rouge</option>
              <option value="NEW" {{(($product->color=='BLACK')? 'selected':'')}}>Noir</option>
              <option value="HOT" {{(($product->color=='GREEN')? 'selected':'')}}>Vert</option>
              <option value="-10%" {{(($product->color=='WHITE')? 'selected':'')}}>Blanc</option>
              <option value="POPOLUAR" {{(($product->color=='YELLOW')? 'selected':'')}}>Jaune</option>
          </select>
        </div>

        <div class="form-group">
          <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
          <select name="status" class="form-control">
            <option value="active" {{(($product->status=='active')? 'selected' : '')}}>Active</option>
            <option value="inactive" {{(($product->status=='inactive')? 'selected' : '')}}>Inactive</option>
        </select>
          @error('status')
          <span class="text-danger">{{$message}}</span> 
          @enderror
        </div>
        <div class="form-group mb-3">
           <button type="reset" class="btn btn-warning">Effacer</button>
           <button type="submit" class="btn btn-primary float-right">Enregistrer</button>
        </div>
      </form>
    </div>

            </div>
            <!-- /.card -->
            </div>
          <div class="col-md-3"></div>      

        </div>
   
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
@section('script')

<script>
  var  child_cat_id='{{$product->child_cat_id}}';
        // alert(child_cat_id);
        $('#cat_id').change(function(){
            var cat_id=$(this).val();

            if(cat_id !=null){
                // ajax call
                $.ajax({
                    url:"/back/category/"+cat_id+"/child",
                    type:"POST",
                    data:{
                        _token:"{{csrf_token()}}"
                    },
                    success:function(response){
                        if(typeof(response)!='object'){
                            response=$.parseJSON(response);
                        }
                        var html_option="<option value=''>--Select any one--</option>";
                        if(response.status){
                            var data=response.data;
                            if(response.data){
                                $('#child_cat_div').removeClass('d-none');
                                $.each(data,function(id,title){
                                    html_option += "<option value='"+id+"' "+(child_cat_id==id ? 'selected ' : '')+">"+title+"</option>";
                                });
                            }
                            else{
                                console.log('no response data');
                            }
                        }
                        else{
                            $('#child_cat_div').addClass('d-none');
                        }
                        $('#child_cat_id').html(html_option);

                    }
                });
            }
            else{

            }

        });
        if(child_cat_id!=null){
            $('#cat_id').change();
        }
</script>




<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{ asset('plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>
<!-- date-range-picker -->
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Bootstrap Switch -->
<script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
<!-- BS-Stepper -->
<script src="{{ asset('plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
<!-- dropzonejs -->
<script src="{{ asset('plugins/dropzone/min/dropzone.min.js') }}"></script>
<!-- AdminLTE App -->
<!-- AdminLTE for demo purposes -->

<script src="{{ asset('dist/js/stand-alone-button.js') }}"></script>
<script>
    $('#lfm').filemanager('image2');
    $('#lfm1').filemanager('image1');
</script>
@endsection