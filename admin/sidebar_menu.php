<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
              <img
                src="dist/img/presensia.png"
                class="img-circle elevation-2"
                alt="User Image"
              />
        </div>
        <div class="info">
              <a href="#" class="d-block">Piket Reguler</a>
        </div>
      </div>
          <nav class="mt-2 ">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="index.php" class="nav-link active">
                  <i class="nav-icon fas fa-sign-in-alt"></i>
                  <p>Input Kehadiran</p>
                </a>
              </li>
              <li class="nav-item">
                    <a href="civitas_hadir.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Civitas Hadir</p>
                    </a>
                  </li>
              <li class="nav-item">
                    <a href="input_tidakhadir.php" class="nav-link active">
                      <i class="nav-icon fas fa-user-slash"></i>
                      <p>Input Tidak hadir</p>
                    </a>
                  </li>
              
              <li class="nav-item menu-open">
                <a href="input_tidakhadir.php" class="nav-link">
                  <i class="nav-icon fas fa-users-slash"></i>
                  <p>
                  Detil Tidak hadir
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="tidakhadir_ket.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Dengan Keterangan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="civitas_tidakhadir.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tanpa Keterangan</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
              <li class="nav-item menu-open">
                <a href="" class="nav-link">
                  <i class="nav-icon fas fa-school"></i>
                  <p>
                    Master Data
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="list_nama.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>List Nama</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="edit_data.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Edit Data</p>
                    </a>
                  </li> 
                  <li class="nav-item">
                    <a href="tambah_data.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tambah Data</p>
                    </a>
                  </li>
                </ul>
                
              </li>
          <li class="nav-item">
                <a href="statistik.php" class="nav-link">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                    Statistik
                    <span class="right badge badge-danger">New</span>
                  </p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="../admin/logout.php" class="nav-link text-red">
                  <i class="nav-icon fas fa-power-off"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </nav>
  </div>
</aside>