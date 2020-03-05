  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset ('/adminlte/img/logo_muni.png')}}" alt="Municipalidad de la Rioja Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">La Rioja</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset ('/adminlte/img/Untitled-1-512.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">ADMIN</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">MENU</li>
            <li class="nav-item">
              <a href="/people" class="nav-link">
                <i class="nav-icon fa fa-list-ul"></i>
                <p>
                  Listado de PEM
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-plus"></i>
                <p>
                  Crear
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/people/create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>PEM</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/offices/create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Oficina</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/secretaries/create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Secretaria</p>
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