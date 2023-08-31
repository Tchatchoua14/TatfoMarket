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
            <a href="{{route('product.create')}}" class="btn btn-success float-right"><i class="fas fa-plus"></i> Créer message</a>
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
            
            @if(session()->get('success'))
              <div>
                  <p>{{session()->get('success')}}</p>
              </div>
                    
             @endif  

             <!-- @if (session('status'))
               <div class="mb-4 font-medium text-sm text-green-600">
                 {{ session('status') }}
                 </div>
               @endif -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Listes de tous les messages</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
    @if(count($messages)>0)
    <table class="table message-table" id="message-dataTable">
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

        <tr class="@if($message->read_at) border-left-success @else bg-light border-left-warning @endif">
          <td scope="row">{{$loop->index +1}}</td>
          <td>{{$message->name}} {{$message->read_at}}</td>
          <td>{{$message->subject}}</td>
          <td>{{$message->created_at->format('F d, Y h:i A')}}</td>
          <td>
            <a href="{{route('message.show',$message->id)}}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="view" data-placement="bottom"><i class="fas fa-eye"></i></a>
            <form method="POST" action="{{route('message.destroy',[$message->id])}}">
              @csrf 
              @method('delete')
                  <button class="btn btn-danger btn-sm dltBtn" data-id={{$message->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
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
@endsection