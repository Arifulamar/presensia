<?php include ('koneksi.php'); ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<?php 
session_start();
if(!$_SESSION['nama']){
  header('Location: ../index.php?session=expired');
}

//count notif
?>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- Favicon (Ikon di Tab Browser) -->
<link rel="icon" href="https://presensi.sman1sabang.sch.id/presensia.ico" type="image/x-icon">
    
    <!-- Metadata (Judul Halaman, Deskripsi, dan Kata Kunci) -->
    <meta name="description" content="Presensia adalah sebuah aplikasi untuk mencatat presensi
    berbasis web yang menggunakan tools berupa barcode scanner. Barcode tersebut terdapat
    pada kartu tiap civitas yang terhubung ke database pribadi civitas.">
    <meta name="keywords" content="presensi, barcode, php, sekolah">
    
    <!-- Thumbnail untuk Media Sosial (Misalnya, Facebook dan Twitter) -->
    <meta property="og:image" content="https://presensi.sman1sabang.sch.id/thumbnail_presensia.jpg">
    <meta property="og:title" content="Presensia: Aplikasi Presensi Berbasis Web">
    <meta property="og:description" content="Responsif, Barcode Scanner.">
    <meta property="og:url" content="presensi.sman1sabang.sch.id">
    
    <title>Presensi</title>
<!-- Sertakan jQuery dan jQuery UI -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<!-- sweet alert -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.15/dist/sweetalert2.min.css">

<!-- auto complete -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">

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
      <!-- Preloader -->
      <div
        class="preloader flex-column justify-content-center align-items-center"
      >
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
        <div class="card-header">
        <h3 class="card-title">Ketik Nama/Masukkan ID</h3>
        </div>
      
            <div class="card-body">
              
                    <form method="POST" action="search_tidakhadir.php">
                        <div class="input-group"> 
                          <label for="id">Nama/ID:</label>
                          </div>
                          <div>
                            <input type="text" id="id" name="id" class="form-control" required>
                            </div>
                            <div class="input-group">   
                            <label for="tanggal">Tanggal:</label>   
                          </div>
                            
                            <div>
                            <input type="date" id="waktu" name="waktu" class="form-control">
                            </div>
                            <div>
                    <label for="alasan">Alasan:</label>
                    </div>
                    <div>
                    <select id="alasan" name="alasan">
                        <option value="sakit">Sakit</option>
                        <option value="ijin">Ijin</option>
                          </select><br><br>

                    <input type="submit" value="Simpan">
                </form>
                
            
    </div>
    
  </div>
    


</div>
<div class="row" >
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
    <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Tidak Hadir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 5px">No</th>
                      <th style="width: 100px">Nama</th>
                      <th style="width: 50px">Ruang</th>
                      <th style="width: 70px">Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                    $no = 0;
                    $query = mysqli_query($kon, "SELECT * FROM ketidakhadiran ORDER BY waktu DESC");
                    while ($civitas = mysqli_fetch_array($query)) {
                        $no++;
                        if ($no > 1) {
                          break;
                      }
                        ?>  
                  
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $civitas ['nama_civitas']; ?></td>
                    <td><?php echo $civitas ['ruang']; ?></td>
                    <td><?php echo $civitas ['waktu']; ?></td>
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
        $(function () {
            $("#id").autocomplete({
                source: "autocomplete2.php",
                minLength: 2, // Jumlah karakter minimal sebelum permintaan autocomplete dipicu
                select: function (event, ui) {
                    // Aksi yang akan dilakukan ketika item autocomplete dipilih
                    // Di sini Anda dapat mengambil nilai ID atau melakukan tindakan lainnya
                    console.log(ui.item.id); // Contoh: Menampilkan ID
                }
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
