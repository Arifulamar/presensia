<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
  <!-- header -->
  <?php include ('header.php'); ?>
  
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
<?php include ('navbar.php'); ?>
      
      <!-- /.navbar -->

        <!-- Main Sidebar Container -->
      <!-- Sidebar Menu -->
                <?php include ('sidebar_menu.php'); ?>
          <!-- /.sidebar-menu -->

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
                    <div class="col-md-6">
                        <div class="card card-primary">
                        <form action="simpan_data.php" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                            <label for="exampleInputFile">Tambah Data Presensi</label>
                                            <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Masukkan ID" name="id">
                                    </div>
                                    <br>
                                            <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Ketik Nama" name="nama_civitas">
                                    </div>
                                    <div class="form-group">
                                        <label for=""></label>
                                        <select class="form-control" name="ruang">
                                        <option>E CLASS 1</option>
                                        <option>E CLASS 2</option>
                                        <option>E CLASS 3</option>
                                        <option>E CLASS 4</option>
                                        <option>E CLASS 5</option>
                                        <option>E CLASS 6</option>
                                        <option>11 IPA 1</option>
                                        <option>11 IPA 2</option>
                                        <option>11 IPA 3</option>
                                        <option>11 IPA 4</option>
                                        <option>11 IPA 5</option>
                                        <option>11 IPS 1</option>
                                        <option>11 IPS 2</option>
                                        <option>12 IPA 1</option>
                                        <option>12 IPA 2</option>
                                        <option>12 IPA 3</option>
                                        <option>12 IPA 4</option>
                                        <option>12 IPA 5</option>
                                        <option>12 IPS 1</option>
                                        <option>12 IPS 2</option>
                                        <option>GTK</option>
                                        </select>
                                    </div>    
                                </div>
                                
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
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
      <?php include ('footer.php'); ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>

    


  </body>
</html>


