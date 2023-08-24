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
          <img src="{{ asset('dist/img/IMG_0013.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <div class="d-block"><span class="text-uppercase mr-1">{{ Auth::user()->name }}</span><i class="fa fa-circle text-success" style="font-size:10px;"></i> <span style="font-size:12px;">en ligne</span></div>
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
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Articles
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-wrench"></i>
                  <p>Tous les protuits</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="produits.html" class="nav-link">
                  <i class="fas fa-wrench"></i>
                  <p>Nouveaux produits</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-plus"></i>
                  <p>Ajouter un produit</p>
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
                <a href="" class="nav-link">
                  <i class="fas fa-wrench"></i>
                  <p>Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('liste')}}" class="nav-link">
                  <i class="fas fa-wrench"></i>
                  <p>Tous les Utilisateurs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-plus"></i>
                  <p>Details utilisateurs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-plus"></i>
                  <p>Ajouter utilisateurs</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
              Catalogues
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('category') }}" class="nav-link">
                  <i class="fas fa-wrench"></i>
                  <p>Toutes les categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="buttons.html" class="nav-link">
                  <i class="fas fa-plus"></i>
                  <p>Tous categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('formcategory') }}" class="nav-link">
                  <i class="fas fa-plus"></i>
                  <p>Formulaire categories</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Administration
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="buttons.html" class="nav-link">
                  <i class="fas fa-plus"></i>
                  <p>Boutique</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="buttons.html" class="nav-link">
                  <i class="fas fa-plus"></i>
                  <p>Etats de commande</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="buttons.html" class="nav-link">
                  <i class="fas fa-plus"></i>
                  <p>Pays</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="buttons.html" class="nav-link">
                  <i class="fas fa-plus"></i>
                  <p>Pages</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Expéditions
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="buttons.html" class="nav-link">
                  <i class="fas fa-plus"></i>
                  <p>Paramètres et Confidentialité</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="buttons.html" class="nav-link">
                  <i class="fas fa-plus"></i>
                  <p>Outils</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Aide et assistance
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="buttons.html" class="nav-link">
                  <i class="fas fa-plus"></i>
                  <p>Langues</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="buttons.html" class="nav-link">
                  <i class="fas fa-plus"></i>
                  <p>DataTables</p>
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