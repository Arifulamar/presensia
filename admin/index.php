<?php include ('koneksi.php'); ?>
<!DOCTYPE html>

<html lang="en">
  
  <!-- Session Sweet Alert Trigger -->
  <?php 
  session_start();
  if(!$_SESSION['nama']){
    header('Location: ../index.php?session=expired');
  } ?>

  <!--  Header -->  
  <?php include ('header.php'); ?>
  <!-- header -->

  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center" >
        <img
          class="animation__shake"
          src="dist/img/presensia.png"
          alt="presensia_logo"
          height="60"
          width="60"
        />
      </div>
      
      <!-- Navbar -->
      <?php include ('navbar.php'); ?>
      <!-- /.navbar -->

      <!-- sidebar -->
      <?php include ('sidebar_menu.php'); ?>
      <!-- sidebar -->
    

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
        <div class="card-header">
        <h3 class="card-title">Scan Barcode/Masukkan ID</h3>
        </div>
      
            <div class="card-body">
              
                    <form method="GET" action="search.php">
                            
                      <div class="input-group">
                      <input type="text" id="id" name="id" placeholder="Search..." class="form-control" maxlength="4" required />

                      <input type="submit"></input>
                      </div>
                      </form>
                
            
    </div>
    
  </div>
    


</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
    <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Baru Saja Hadir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 5px">No</th>
                      <th style="width: 100px">Nama</th>
                      <th style="width: 50px">Ruang</th>
                      <th style="width: 70px">Waktu Hadir</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no = 0;
                    $today = date('Y-m-d'); // Mendapatkan tanggal hari ini dalam format Y-m-d
                    $query = mysqli_query($kon, "SELECT * FROM kehadiran WHERE DATE(waktu_kehadiran) = '$today' ORDER BY waktu_kehadiran DESC");
                    while ($civitas = mysqli_fetch_array($query)) {
                        $no++;
                        if ($no > 4) {
                          break;
                      }
                      
                    ?>
                  
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $civitas ['nama_civitas']; ?></td>
                    <td><?php echo $civitas ['ruang']; ?></td>
                    <td><?php echo $civitas ['waktu_kehadiran']; ?></td>
                  </tr>
                  <?php } ?>      
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              
            </div>
  </div>
  </div>
</div>
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
<!-- auto complete -->
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
                                $(function() {
                                    $("#id").autocomplete({
                                        source: 'autocomplete.php'
                                    });
                                });
                            </script>
   
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



<!-- sweet alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.15/dist/sweetalert2.all.min.js"></script>


  </body>
</html>
