<?php
include ('../config/config.php');
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
  <?php include ('header.php'); ?>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      
     <!-- Navbar -->
     <?php include ('navbar.php'); ?>
      <!-- /.navbar -->

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
            <!-- /.card -->

            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Tidak Hadir Dengan Keterangan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <label for="pilihtanggal">Tampil Data Menurut Tanggal</label>
              <div class="form-group">

                <input type="date" name="pilihtanggal" id="pilihtanggal" placeholder="Pilih Tanggal" >
                </div>
                <div class="hasilData"></div>
           
             
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
      "buttons": ["excel", "pdf", "print"]
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
<script>
$(document).ready(function() {
  // Inisialisasi datepicker

  // Tangani perubahan tanggal
  $("#pilihtanggal").on("change", function() {
    var selectedDate = $(this).val();
    tampilData(selectedDate); // Panggil fungsi untuk menampilkan data sesuai tanggal yang dipilih
  });

  // Fungsi untuk menampilkan data sesuai tanggal yang dipilih
  function tampilData(selectedDate) {
    $.ajax({
      url: "tampil_keterangan.php", // Ganti dengan URL proses PHP Anda
      type: "POST",
      data: { tanggal_yang_dicari: selectedDate },
      success: function(data) {
        $(".hasilData").html(data);
      }
    });
  }
});
</script>
 <!-- CSS date picker -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  </body>
</html>
