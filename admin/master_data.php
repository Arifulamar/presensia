<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"
              ><i class="fas fa-bars"></i
            ></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
            <a
              class="nav-link"
              data-widget="navbar-search"
              href="#"
              role="button"
            >
              <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input
                    class="form-control form-control-navbar"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                  />
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                    <button
                      class="btn btn-navbar"
                      type="button"
                      data-widget="navbar-search"
                    >
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>

          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-comments"></i>
              <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img
                    src="dist/img/user1-128x128.jpg"
                    alt="User Avatar"
                    class="img-size-50 mr-3 img-circle"
                  />
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Brad Diesel
                      <span class="float-right text-sm text-danger"
                        ><i class="fas fa-star"></i
                      ></span>
                    </h3>
                    <p class="text-sm">Call me whenever you can...</p>
                    <p class="text-sm text-muted">
                      <i class="far fa-clock mr-1"></i> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img
                    src="dist/img/user8-128x128.jpg"
                    alt="User Avatar"
                    class="img-size-50 img-circle mr-3"
                  />
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      John Pierce
                      <span class="float-right text-sm text-muted"
                        ><i class="fas fa-star"></i
                      ></span>
                    </h3>
                    <p class="text-sm">I got your message bro</p>
                    <p class="text-sm text-muted">
                      <i class="far fa-clock mr-1"></i> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img
                    src="dist/img/user3-128x128.jpg"
                    alt="User Avatar"
                    class="img-size-50 img-circle mr-3"
                  />
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Nora Silvester
                      <span class="float-right text-sm text-warning"
                        ><i class="fas fa-star"></i
                      ></span>
                    </h3>
                    <p class="text-sm">The subject goes here</p>
                    <p class="text-sm text-muted">
                      <i class="far fa-clock mr-1"></i> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer"
                >See All Messages</a
              >
            </div>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-header">15 Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer"
                >See All Notifications</a
              >
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              data-widget="control-sidebar"
              data-slide="true"
              href="#"
              role="button"
            >
              <i class="fas fa-th-large"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img
            src="dist/img/AdminLTELogo.png"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8"
          />
          <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img
                src="dist/img/user2-160x160.jpg"
                class="img-circle elevation-2"
                alt="User Image"
              />
            </div>
            <div class="info">
              <a href="#" class="d-block">Alexander Pierce</a>
            </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input
                class="form-control form-control-sidebar"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="index.html" class="nav-link">
                  <i class="nav-icon fas fa-sign-in-alt"></i>
                  <p>Input Data</p>
                </a>
              </li>
               <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-school"></i>
                  <p>
                    Data Siswa
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Siswa Hadir</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Siswa Tidak hadir</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Kalender
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

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6"></div>
              <!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right"></ol>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Export dan Cetak Data Di Bawah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Tanggal dan Jam Hadir</th>

                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>

                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.0
                    </td>
                    <td>Win 95+</td>

                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.5
                    </td>
                    <td>Win 95+</td>

                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 6
                    </td>
                    <td>Win 98+</td>

                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>

                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>AOL browser (AOL desktop)</td>
                    <td>Win XP</td>

                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 1.0</td>
                    <td>Win 98+ / OSX.2+</td>

                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 1.5</td>
                    <td>Win 98+ / OSX.2+</td>

                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 2.0</td>
                    <td>Win 98+ / OSX.2+</td>

                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 3.0</td>
                    <td>Win 2k+ / OSX.3+</td>

                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Camino 1.0</td>
                    <td>OSX.2+</td>

                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Camino 1.5</td>
                    <td>OSX.3+</td>

                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Netscape 7.2</td>
                    <td>Win 95+ / Mac OS 8.6-9.2</td>

                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Netscape Browser 8</td>
                    <td>Win 98SE+</td>

                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Netscape Navigator 9</td>
                    <td>Win 98+ / OSX.2+</td>

                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.0</td>
                    <td>Win 95+ / OSX.1+</td>
   
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.1</td>
                    <td>Win 95+ / OSX.1+</td>

                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.2</td>
                    <td>Win 95+ / OSX.1+</td>

                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.3</td>
                    <td>Win 95+ / OSX.1+</td>

                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.4</td>
                    <td>Win 95+ / OSX.1+</td>

                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.5</td>
                    <td>Win 95+ / OSX.1+</td>

                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.6</td>
                    <td>Win 95+ / OSX.1+</td>

                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.7</td>
                    <td>Win 98+ / OSX.1+</td>

                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.8</td>
                    <td>Win 98+ / OSX.1+</td>

                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Seamonkey 1.1</td>
                    <td>Win 98+ / OSX.2+</td>

                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Epiphany 2.20</td>
                    <td>Gnome</td>
  
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 1.2</td>
                    <td>OSX.3</td>
 
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 1.3</td>
                    <td>OSX.3</td>

                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 2.0</td>
                    <td>OSX.4+</td>

                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 3.0</td>
                    <td>OSX.4+</td>

                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>OmniWeb 5.5</td>
                    <td>OSX.4+</td>

                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>iPod Touch / iPhone</td>
                    <td>iPod</td>
   
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>S60</td>
                    <td>S60</td>

                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 7.0</td>
                    <td>Win 95+ / OSX.1+</td>

                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 7.5</td>
                    <td>Win 95+ / OSX.2+</td>

                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 8.0</td>
                    <td>Win 95+ / OSX.2+</td>

                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 8.5</td>
                    <td>Win 95+ / OSX.2+</td>

                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 9.0</td>
                    <td>Win 95+ / OSX.3+</td>

                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 9.2</td>
                    <td>Win 88+ / OSX.3+</td>

                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 9.5</td>
                    <td>Win 88+ / OSX.3+</td>
     
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera for Wii</td>
                    <td>Wii</td>
 
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Nokia N800</td>
                    <td>N800</td>

                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Nintendo DS browser</td>
                    <td>Nintendo DS</td>

                  </tr>
                  <tr>
                    <td>KHTML</td>
                    <td>Konqureror 3.1</td>
                    <td>KDE 3.1</td>

                  </tr>
                  <tr>
                    <td>KHTML</td>
                    <td>Konqureror 3.3</td>
                    <td>KDE 3.3</td>

                  </tr>
                  <tr>
                    <td>KHTML</td>
                    <td>Konqureror 3.5</td>
                    <td>KDE 3.5</td>

                  </tr>
                  <tr>
                    <td>Tasman</td>
                    <td>Internet Explorer 4.5</td>
                    <td>Mac OS 8-9</td>

                  </tr>
                  <tr>
                    <td>Tasman</td>
                    <td>Internet Explorer 5.1</td>
                    <td>Mac OS 7.6-9</td>

                  </tr>
                  <tr>
                    <td>Tasman</td>
                    <td>Internet Explorer 5.2</td>
                    <td>Mac OS 8-X</td>

                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>NetFront 3.1</td>
                    <td>Embedded devices</td>
 
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>NetFront 3.4</td>
                    <td>Embedded devices</td>

                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>Dillo 0.8</td>
                    <td>Embedded devices</td>

                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>Links</td>
                    <td>Text only</td>

                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>Lynx</td>
                    <td>Text only</td>

                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>IE Mobile</td>
                    <td>Windows Mobile 6</td>
                    <td>-</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>PSP browser</td>
                    <td>PSP</td>

                  </tr>
                  <tr>
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td>

                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Tanggal dan Jam Hadir</th>

                  </tr>
                  </tfoot>
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

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
          <h5>Title</h5>
          <p>Sidebar content</p>
        </div>
      </aside>
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">Anything you want</div>
        <!-- Default to the left -->
        <strong
          >Copyright &copy; 2014-2021
          <a href="https://adminlte.io">AdminLTE.io</a>.</strong
        >
        All rights reserved.
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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
  </body>
</html>
