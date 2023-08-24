@extends('back.master')
@section('head')
<link rel="stylesheet" href="{{ asset('dist/css/sweetalert.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/sweetalert.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('title')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Produits</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
              <li class="breadcrumb-item active">Produits</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid --> 
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mb-2">
            <a href="{{route('product.create')}}" class="btn btn-success float-right"><i class="fas fa-plus"></i> Créer produit</a>
          </div>
          <div class="col-12">
            <!-- /.card -->
            @if(session()->get('success'))
              <div>
                  <p>{{session()->get('success')}}</p>
              </div>
                    
             @endif  
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listes de tous les produits disponibles</h3>
              </div>
              <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive">
                @if(count($products)>0)
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Titre</th>
                      <th>Image</th>
                      <th>Categorie</th>
                      <th>Prix</th>
                      <th>PrixReduction</th>
                      <th>Stock</th>
                      <th>Description</th>
                      <th>Status</th>
                      <th>Actions</th>
                      
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Titre</th>
                      <th>Image</th>
                      <th>Categorie</th>
                      <th>Prix</th>
                      <th>PrixReduction</th>
                      <th>Stock</th>
                      <th>Description</th>
                      <th>Status</th>
                      <th>Actions</th>
                      
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($products as $product)
                    <tr>
                      <td>{{ $product->id }}</td>
                      <td>{{ $product->title }}</td>
                      <td>
                        @if($product->photo)
                              @php
                                $photo=explode(',',$product->photo);
                                // dd($photo);
                              @endphp
                              <img src="{{$photo[0]}}" class="img-fluid zoom" style="max-width:80px" alt="{{$product->photo}}">
                          @else
                              <img src="{{asset('images/canape/product-1.png')}}" class="img-fluid" style="max-width:80px" alt="avatar.png">
                          @endif
                      </td>
                      <td>{{ $product->cat_id }}</td>
                      <td>{{ $product->price }}</td>
                      <td>{{ $product->priceReduction }}</td>
                      <td>
                      @if($product->stock>0)
                        <span class="badge badge-primary">{{$product->stock}}</span>
                        @else
                        <span class="badge badge-danger">{{$product->stock}}</span>
                      @endif
                      </td>
                      <td>{{ $product->description }}</td>
                      <td>
                          @if($product->status=='active')
                              <span class="badge badge-success">{{$product->status}}</span>
                          @else
                              <span class="badge badge-warning">{{$product->status}}</span>
                          @endif
                      </td>
                      <td class="project-actions d-flex justify-content-around">
                        <a class="btn btn-primary btn-sm " href="{{route('product.edit',$product->id)}}">
                          <i class="fas fa-eye"></i>
                        </a>
                        <a class="btn btn-info btn-sm " href="{{ route('.product.update', $product->id) }}">
                            <i class="fas fa-pencil-alt">
                            </i>  
                        </a>
                        <form id="destroy{{ $product->id }}" action="{{ route('product.destroy', $product->id) }}" method="POST">
                          @csrf
                          @method('DELETE') 
                          <button class="btn btn-danger btn-sm  dltBtn" data-id="{{$product->id}}"  data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                        </form>
                
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                  
                  </table>
                  <span style="float:right">{{$products->links()}}</span>
                    @else
                      <h6 class="text-center">No Products found!!! Please create Product</h6>
                    @endif
              </div>
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
  <!-- /.content-wrapper -->

@endsection
@section('script')
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- jQuery Mapael -->
<script src="{{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard2.js') }}"></script>
<!-- DataTables  & plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('dist/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('dist/js/sweetalert.js') }}"></script>
<!-- AdminLTE App -->
<!-- AdminLTE for demo purposes -->
 
<script>

  $('#order-dataTable').DataTable( {
        "columnDefs":[
            {
                "orderable":false,
                "targets":[5,6]
            }
        ]
    } );

    // Sweet alert

    function deleteData(id){

    }
</script>
<script>
  $(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      $('.dltBtn').click(function(e){
        var form=$(this).closest('form');
          var dataID=$(this).data('id');
          // alert(dataID);
          e.preventDefault();
          swal({
                title: "Vous etes sur?",
                text: "Voulez vous vraiment supprimer ce contact",
                type: "warning",
                showCancelButton:true,
                // confirmButtonColor:'#3085d6',
                confirmButtonColor:'#DD6B55',
                cancelButtonColor:'#d33',
                confirmButtonText:'Oui',
                cancelButtonText:'Annuler',
                // buttons: true,
                // dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                   form.submit();
                } else {
                    swal("Your data is safe!");
                }
            });
      })
  })
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
    
@endsection