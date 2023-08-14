@extends('back.master')
@section('title')
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
              <li class="breadcrumb-item"><a href="index.blade.php">Accueil</a></li>
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
                <h3>150<span class="info-box-icon ml-3"><i class="fas fa-users"></i></span></h3>

                <p>Nombres utilisateurs</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="listeUser.html" class="small-box-footer">Voir les détails <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-success text-center">
              <div class="inner">
                <h3>53<span class="info-box-icon ml-1"><i class="fas fa-shopping-cart"></i></span></h3>

                <p>Nombres produits</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="produits.html" class="small-box-footer">Voir les détails <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-warning text-center">
              <div class="inner">
                <h3>44   <span class="info-box-icon"><i class="fas fa-shopping-cart"></i></span></h3>

                <p>Nombres de categories</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Voir les détails <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
        </div>

      <div class="row">
        <div class="col-1"></div>
        <div class="col-5">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title text-center">Les produits récents</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Task</th>
                    <th>Progress</th>
                    <th style="width: 40px">Label</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.</td>
                    <td>Update software</td>
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-danger">55%</span></td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Clean database</td>
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar bg-warning" style="width: 70%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-warning">70%</span></td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>Cron job running</td>
                    <td>
                      <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar bg-primary" style="width: 30%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-primary">30%</span></td>
                  </tr>
                  <tr>
                    <td>4.</td>
                    <td>Fix and squish bugs</td>
                    <td>
                      <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar bg-success" style="width: 90%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-success">90%</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <div class="col-5">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title text-center">Les utilisateurs récents</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Task</th>
                    <th>Progress</th>
                    <th style="width: 40px">Label</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.</td>
                    <td>Update software</td>
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-danger">55%</span></td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Clean database</td>
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar bg-warning" style="width: 70%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-warning">70%</span></td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>Cron job running</td>
                    <td>
                      <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar bg-primary" style="width: 30%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-primary">30%</span></td>
                  </tr>
                  <tr>
                    <td>4.</td>
                    <td>Fix and squish bugs</td>
                    <td>
                      <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar bg-success" style="width: 90%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-success">90%</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <div class="col-1"></div>
      </div>
        <!-- /.row -->
        <!-- /.row -->

        <!-- Main row -->   
            <!-- /.card -->
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
        
            <!-- /.card -->
         
          <!-- /.col -->

          <!-- /.col -->
        </div>
        <!-- /.row -->
     <!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
