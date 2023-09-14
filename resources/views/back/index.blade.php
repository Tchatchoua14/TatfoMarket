@extends('back.master')
@section('title', 'Administration')
@section('head')
<link rel="stylesheet" href="{{ asset('dist/css/sweetalert.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/sweetalert.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-1">
          <div class="col-sm-6">
            <h1 class="m-0">Administrateur
            </h1> 
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
              <li class="breadcrumb-item active">Administrateur</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content bg-white">
      <div class="container-fluid">
        <!-- Info boxes -->

         <div class="row">
          <div class="col-12 text-white">.</div>
         </div>

        <div class="row"> 
          <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner text-center">
                <h3>{{$posts}}<span class="info-box-icon ml-2"><i class="fas fa-users"></i></span></h3>

                <p>Nombres utilisateurs</p>
              </div>
              <div class="icon"> 
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('user.index')}}" class="small-box-footer">Voir plus détails <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-success text-center">
              <div class="inner">
                <h3>{{$post}}<span class="info-box-icon ml-2"><i class="fas fa-shopping-cart"></i></span></h3>

                <p>Nombres produits</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('product.index')}}" class="small-box-footer">Voir plus détails <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-danger text-center">
              <div class="inner">
                <h3>{{$order}}<span class="info-box-icon ml-2"><i class="fas fa-clipboard-list text-gray-300"></i></span></h3>

                <p>Nombres de commandes</p>
              </div> 
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('order.index')}}" class="small-box-footer">Voir plus détails <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-pink text-center">
              <div class="inner">
                <h3>{{$shipping}}<span class="info-box-icon ml-2"><i class="fas fa-file"></i></span></h3>

                <p>Nombres de Shipping</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('shipping.index')}}" class="small-box-footer">Voir plus détails <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-indigo text-center">
              <div class="inner">
                <h3>{{$news}}<span class="info-box-icon ml-2"><i class="fas fa-dumpster"></i></span></h3>

                <p>Nombres de Newsletter</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('liste-news')}}" class="small-box-footer">Voir plus détails <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
        </div>

      <div class="row">
        <div class="col-4"></div>
        <div class="col-5">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title text-center">Les produits récents</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
            <table id="example1" class="table table-bordered table-striped dataTable no-footer dtr-inline" aria-describedby="example1_info">
                <thead>
                  <tr>
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending">S.N.</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="NOM: activate to sort column ascending">Titre</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Prénom: activate to sort column ascending">Status</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Photo</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Image: activate to sort column ascending">Join Date</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Roles: activate to sort column ascending">Stock</th>
                  </thead>

                  <tbody>
            @foreach($products as $product)   
                <tr class="odd">
                    <td class="dtr-control sorting_1" tabindex="0">{{$product->id}}</td>
                    <td class="text-capitalize">{{$product->name}}</td>
                    <td class="text-capitalize">
                    @if($product->status=='active')
                              <span class="badge badge-success">{{$product->status}}</span>
                          @else
                              <span class="badge badge-warning">{{$product->status}}</span>
                     @endif
                    </td>
                    <td class="text-center">
                    <img src="{{ asset('/images/product-images/'.$product->image1) }}"alt="{{$product->image1}}" class="img-fluid zoom" style="width: 50px;height: 50px;border-radius: 50%" /> 
                    </td>
                    <td class="text-center text-capitalize">{{(($product->created_at)? $product->created_at->diffForHumans() : '')}}</td>
                    <td class="text-capitalize">{{$product->stock}}</td> 
                </tr>  
            @endforeach
              </tbody>
                 
             </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <div class="col-3"></div>
      </div>
     </div>
        <!-- /.row -->
     <!--/. container-fluid --> 
    </section>
    <!-- /.content -->
  </div>
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
      "responsive": true, "lengthChange": false, "autoWidth": false, "searching": false,  "paging": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, "searching": false,  "paging": false,
    });
  });
</script>
    
@endsection