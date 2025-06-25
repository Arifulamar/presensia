<?php
// Sambungkan ke database Anda
include ('koneksi.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
</head>
<body>
<?php
$selectedDate = $_POST['tanggal_yang_dicari'];

$no = 0;
$sql = "SELECT * FROM ketidakhadiran WHERE DATE(waktu) = '$selectedDate' ORDER BY jaminput DESC";
$query = mysqli_query($kon, $sql);

if ($query) {
    while ($civitas = mysqli_fetch_array($query)) {
        $no++;
        // Lakukan sesuatu dengan data $civitas di sini
 
?>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th style="width: 5px">No</th>
                      <th style="width: 100px">Nama</th>
                      <th style="width: 50px">Ruang</th>
                      <th style="width: 70px">Alasan</th>
                      <th style="width: 50px">Tanggal</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                     
                      $no = 0;
                      $sql = "SELECT * FROM ketidakhadiran WHERE DATE(waktu) = '$selectedDate' ORDER BY jaminput DESC";
                      $query = mysqli_query($kon, $sql);
                        if (!$query) {
                            die('Error: ' . mysqli_error($kon));
                        }

                      while ($civitas = mysqli_fetch_array($query)) {
                          $no++;
                        
                      ?>

                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $civitas['nama_civitas']; ?></td>
                                <td><?php echo $civitas['ruang']; ?></td>
                                <td><?php echo $civitas ['alasan']; ?></td>
                                <td><?php echo $civitas ['waktu']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>

                  </tbody>
                  <tfoot>
                  <tr>
                  <th style="width: 5px">No</th>
                      <th style="width: 100px">Nama</th>
                      <th style="width: 50px">Ruang</th>
                      <th style="width: 70px">Alasan</th>
                      <th style="width: 50px">Tanggal</th>
                  </tr>
                  </tfoot>
              </table>
<?php
   }
} else {
    echo "Kesalahan dalam query: " . mysqli_error($kon);
}

// Tutup koneksi database jika Anda tidak lagi menggunakannya
mysqli_close($kon);
?>


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
</body>
</html>



 