@extends('back.master')
@section('head')
<link rel="stylesheet" href="{{ asset('dist/css/sweetalert.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/sweetalert.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

@endsection
@section('title', 'liste-message')
@section('content')
<style>
      div.dataTables_wrapper div.dataTables_paginate{
          display: none;
      }
      .zoom {
        transition: transform .2s; /* Animation */
      }

      .zoom:hover {
        transform: scale(3.2);
      }
  </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Messages</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
              <li class="breadcrumb-item active">Messages</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid --> 
    </section>

        <!-- Main content -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mb-2">
          </div>
          <div class="col-12">
            <!-- /.card -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissable fade show text-center">
                    <button class="close" data-dismiss="alert" aria-label="Close">×</button>
                    {{session('success')}}
                </div>
            @endif


            @if(session('error'))
                <div class="alert alert-danger alert-dismissable fade show text-center">
                    <button class="close" data-dismiss="alert" aria-label="Close">×</button>
                    {{session('error')}}
                </div>
            @endif
            
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Listes de tous les messages</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
    @if(count($messages)>0)
    <table  id="example1" class="table table-bordered table-striped dataTable no-footer dtr-inline dt-responsive" aria-describedby="example1_info">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Subject</th>
          <th scope="col">Date</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ( $messages as $message)

        <tr class="border-left-success" >
          <td scope="row">{{$loop->index +1}}</td>
          <td>{{$message->name}}</td>
          <td>{{$message->subject}}</td>
          <td>{{$message->created_at->format('F d, Y h:i A')}}</td>
          <td>
            <form method="POST" action="{{ route('message.destroy', $message->id) }}">
              @csrf 
              @method('delete')
                  <button class="btn btn-danger btn-sm  dltBtn" data-id={{$message->id}}  data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
            </form>
          </td> 
        </tr>

        @endforeach
      </tbody>
    </table>
    <nav class="blog-pagination justify-content-center d-flex">
      {{$messages->links()}}
    </nav>
    @else
      <h2>Messages Empty!</h2>
    @endif
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

            


@endsection
@section('script')
<script>
      
      $('#message-dataTable').DataTable( {
            "columnDefs":[
                {
                    "orderable":false,
                    "targets":[4]
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
                  title: "Are you sure?",
                  text: "Once deleted, you will not be able to recover this data!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
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
  $(function () { 
    $("#example1").DataTable({
      dom: 'Bfrtip',
      responsive: true, 
      lengthChange: false, 
      pageLength: 10,
      ordering: true,
      lengthChange: false, 
      info: true,
      buttons: ["pdf", "print", "colvis"],
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>
@endsection