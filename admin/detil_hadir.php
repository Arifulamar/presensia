<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <!-- /.card -->

            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Export dan Cetak Data Di Bawah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Ruang</th>
                    <th>Waktu Hadir</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
$no = 0;

// Atur locale ke bahasa Indonesia
setlocale(LC_TIME, 'id_ID.utf8');

$today = date('Y-m-d'); // Mendapatkan tanggal hari ini dalam format Y-m-d
$query = mysqli_query($connect, "SELECT * FROM kehadiran WHERE DATE(waktu_kehadiran) = '$today' ORDER BY waktu_kehadiran DESC");
while ($civitas = mysqli_fetch_array($query)) {
    $no++;
    // Tambahkan kode untuk menampilkan data kehadiran sesuai kebutuhan Anda

    // Mengubah format tanggal dari Y-m-d menjadi namahari, d-m-y
    $tanggal_waktu_kehadiran = strftime('%A, %d-%m-%Y %H:%M', strtotime($civitas['waktu_kehadiran']));

  
?>



                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $civitas ['nama_civitas']; ?></td>
                    <td><?php echo $civitas ['ruang']; ?></td>
                    <td><?php echo $tanggal_waktu_kehadiran; ?></td>
                  </tr>
                  <?php } ?>      
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Ruang</th>
                    <th>Waktu Hadir</th>
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