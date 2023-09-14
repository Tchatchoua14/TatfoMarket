@extends('back.master')
@section('head')
<link rel="stylesheet" href="{{ asset('dist/css/sweetalert.css') }}"> 
<link rel="stylesheet" href="{{ asset('dist/css/sweetalert.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<link rel="stylesheet" href="{{ asset('dist/css/sweetalert.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/sweetalert.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <!-- Font Awesome Icons -->
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  
@endsection
@section('title', 'liste-categorie')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid"> 
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Utilisateur</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('index')}}">Accueil</a></li>
              <li class="breadcrumb-item active">Catégorie</li>
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
            <a href="{{route('category.create')}}" class="btn btn-success float-right"><i class="fas fa-plus"></i> Créer une catégorie</a>
          </div>
          <div class="col-12">
          @if (session('success'))
            <div class="card">
              <div class="card-header">
              <h3 class="card-title alert alert-success text-uppercase" role="alert">
              <i class="icon anm anm-truck-l icon-large"></i> &nbsp;<strong>Congratulations!</strong> {{ session('success') }}
              </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
            
              </div>
            </div>
            @endif
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listes de tous les catégories disponibles</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
            <div class="col-sm-12">
             <table id="example1" class="table table-bordered table-striped dataTable no-footer dtr-inline dt-responsive" aria-describedby="example1_info">
                <thead>
                  <tr>
                    <th class="sorting sorting_asc text-center" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending">S.N.</th>
                    <th class="sorting text-center tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="NOM: activate to sort column ascending">Name</th>
                    <th class="sorting text-center tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Image: activate to sort column ascending">Join Date</th>
                    <th class="sorting text-center tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" >Action</th></tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th  class="text-center">S.N.</th>
                        <th  class="text-center">Name</th>
                        <th  class="text-center">Join Date</th>
                        <th  class="text-center">Action</th>
                      </tr>
                  </tfoot>
                  <tbody>
            @foreach($categories as $categorie)   
                <tr class="odd">
                    <td class="dtr-control sorting_1 text-center" tabindex="0">{{$categorie->id}}</td>
                    <td class="text-capitalize text-center">{{$categorie->name}}</td>
                    <td class="text-center">{{(($categorie->created_at)? $categorie->created_at->diffForHumans() : '')}}</td>
                    <td class="project-actions d-flex justify-content-around" >
                        <form id="destroy{{ $categorie->id }}" action="{{ route('categorie.destroy', $categorie->id) }" method="POST">
                          @csrf
                          @method('DELETE') 
                          <button onclick="event.preventDefault(); document.getElementById('destroy{{ $categorie->id }}').submit();" class="btn btn-danger btn-sm  dltBtn" data-id={{$categorie->id}}  data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt mr-2"></i>Supprimer</button>
                        </form>
                
                    </td>
                   
                </tr>  
            @endforeach
              </tbody>
                 
             </table>  

   
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
<script src="{{ asset('plugins/jszip/jszip.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('dist/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('dist/js/sweetalert.js') }}"></script>
<script src="{{ asset('dist/js/stand-alone-button.js') }}"></script>

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
      dom: 'Bfrtip',
      responsive: true, 
      lengthChange: false, 
      pageLength: 5,
      ordering: true,
      lengthChange: false, 
      info: true,
      buttons: ["pdf", "print", "colvis"],
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>
<script>
    $('#lfm').filemanager('photo');
</script>
    
@endsection