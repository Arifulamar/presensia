<?php
// Koneksi ke MySQL
include ('koneksi.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mengambil data berdasarkan ID
    $query = mysqli_query($kon, "SELECT * FROM data_civitas WHERE id = $id");
    $civitas = mysqli_fetch_array($query);

    if (isset($_POST['update'])) {
        // Ambil data yang diubah dari form
        $nama_civitas = $_POST['nama_civitas'];
        $ruang = $_POST['ruang'];

        // Query untuk mengupdate data
        $update_query = mysqli_query($kon, "UPDATE data_civitas SET nama_civitas = '$nama_civitas', ruang = '$ruang' WHERE id = $id");

        if ($update_query) {
            header("Location: edit_data.php"); // Redirect kembali ke halaman utama setelah berhasil mengubah data
        } else {
            echo "Gagal mengupdate data.";
        }
    }
}
?>
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
     <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <!-- Sidebar -->
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

          <!-- SidebarSearch Form -->
          

          <!-- Sidebar Menu -->
                <?php include ('sidebar_menu.php'); ?>
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
                    <div class="col-md-6">
                        <div class="card card-primary">
                       <!-- Form untuk mengedit data -->
                        <form method="POST">
                            <div class="card-body">
                                <div class="form-group">
                            <label for="nama_civitas">Nama Civitas:</label>
                            <div class="input-group">
                            <input type="text" name="nama_civitas" value="<?php echo $civitas['nama_civitas']; ?>"><br>
                            </div>
                            <label for="ruang">Ruang:</label>
                            <div class="input-group">
                            <input type="text" name="ruang" value="<?php echo $civitas['ruang']; ?>"><br>
                            </div>
                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary" name="update" value="Update">Submit</button>
                            <button type="button" class="btn btn-danger" onclick="history.back()">Batal</button>
                            </div>
                            </div>
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



