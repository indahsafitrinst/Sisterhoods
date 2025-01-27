<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <img src="{{asset('/adminlte/dist/img/AdminLTELogo.png')}}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SISTERHOODS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('/adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/admin" class="d-block">Selamat Datang Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/admin" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt "></i>
                <p>
                Dashboard
                </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/admin" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Article
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/submission" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Article Submission</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/list-article" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Article</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Event
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/cast" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Event Listing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/cast/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Event Register</p>
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