 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4" id="po">
    <!-- Brand Logo -->
    <div class="brand-link bg-navy">
      <img src="{{ asset('dist/img/apple-touch-icon-57x57.png') }}" alt="TatfoMarket Logo" class="brand-image img-circle elevation-3 bg-white">
      <h5 class="brand-text font-weight-black font-weight-bolder">TatfoMarket</h5>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/images/faces/'.Auth::user()->photo) }}"alt="" class="img-fluid zoom" style="width: 50px;height: 50px;border-radius: 50%" />
        </div>
        <div class="info mt-2">
         @if (Route::has('login'))
           @auth 
           @if (Auth::user()->role=="admin") 
          <div class="d-block text-white"><span class="text-uppercase mr-1">{{ Auth::user()->name }}</span><i class="fa fa-circle text-success" style="font-size:10px;"></i> <span style="font-size:12px;">en ligne</span></div>
          @endif
          @endauth
          @endif
        </div>
      </div>
      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Tableau de bord
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-shopping-cart"></i>
              <p>
             Produits
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('product.index')}}" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                  <p>Tous les protuits</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-users"></i>
              <p>
              Utilisateurs
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('user.index')}}" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                  <p>Tous les Utilisateurs</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-sitemap text-gray-300"></i> 
              <p>
              Catégories
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('category.index')}}" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                  <p>Toutes les Catégories</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-clipboard-list text-gray-300"></i>
              <p>
              Commandes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('order.index')}}" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                  <p>Toutes les commandes</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-dumpster"></i>
              <p>
              Newsletter
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('liste-news')}}" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                  <p>Tous les newsletter</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>