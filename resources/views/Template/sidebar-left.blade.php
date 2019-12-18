<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('img/logo-umb.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" 
           style="opacity: .8">
      <span class="brand-text font-weight-light">UM Banjarmasin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('img/user.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url('biodata')}}" class="d-block"><h4><font color='red' face='sao'> Mush'ab Salahuddin </h4></font></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <!-- menu blog -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fab fa-blogger-b"></i>
              <p>
                Halaman Blog
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <router-link to='halaman-login' class="nav-link">
                    <i class="fas fa-plus-square nav-icon"></i>
                    <p>Halaman Login</p>
                  </router-link>
                </li>
              <li class="nav-item">
                <router-link to='tambah-blog' class="nav-link">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Tambah Blog</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="data-blog" class="nav-link">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Data Blog</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to='kategori' class="nav-link">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Kategori</p>
                </router-link>
                </a>
              </li>
              <li class="nav-item">
                <router-link to='pengguna' class="nav-link">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Pengguna</p>
                </router-link>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>