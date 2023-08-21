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
            <h1>Tous les utilisateurs</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
              <li class="breadcrumb-item active">Tous les utilisateurs</li>
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
            <a href="{{ route('formuser') }}" class="btn btn-success float-right"><i class="fas fa-plus"></i> Créer utilisateur</a>
          </div>
          <div class="col-12">
            <!-- /.card -->

            <div class="card bg-white">
              <div class="card-header">
                <h3 class="card-title">Listes de tous les utilisateurs</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>NOM</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Roles</th>
                    <th>Image</th>
                    <th>Actions</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Wehsg</td>
                    <td>Wisxxdff</td>
                    <td>Wkkj</td>
                    <td> 4</td>
                    <td>X</td>
                    <td class="project-actions d-flex justify-content-around">
                      <a class="btn btn-primary btn-sm " href="{{ route('detailuser1') }}">
                        <i class="fas fa-eye"></i>
                      </a>
                      <a class="btn btn-info btn-sm " href="{{ route('formuser') }}">
                          <i class="fas fa-pencil-alt">
                          </i>  
                      </a>
                      <form method="POST" action="#">
                        <button class="btn btn-danger btn-sm  dltBtn" data-id="#"  data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                      </form>
              
                   </td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.0
                    </td>
                    <td>wsze</td>
                    <td>uioe</td>
                    <td>vfrt</td>
                    <td>5</td>
                    <td>C</td>
                    <td class="project-actions d-flex justify-content-around">
                      <a class="btn btn-primary btn-sm " href="#">
                        <i class="fas fa-eye"></i>
                      </a>
                      <a class="btn btn-info btn-sm " href="#">
                          <i class="fas fa-pencil-alt">
                          </i>  
                      </a>
                      
                      <form method="POST" action="#">
                            <button class="btn btn-danger btn-sm  dltBtn" data-id="#"  data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                      </form>
                  
                   </td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.5
                    </td>
                    <td>aqwws+</td>
                    <td>dein</td>
                    <td>Winsdaef</td>
                    <td>5.5</td>
                    <td>A</td>
                    <td class="project-actions text-center">
                      <a class="btn btn-primary btn-sm " href="detailUser1.html">
                        <i class="fas fa-eye"></i>
                      </a>
                      <a class="btn btn-info btn-sm " href="formUser.html">
                          <i class="fas fa-pencil-alt">
                          </i>  
                      </a>
                      <a class="btn btn-danger btn-sm " href="#">
                          <i class="fas fa-trash">
                          </i>
                      </a>
                   </td>
                  </tr>

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