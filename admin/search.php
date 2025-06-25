<?php
include('koneksi.php');
include ('index.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Buat variabel waktu
    $waktu = date("Y-m-d H:i:s");

    // Query SQL untuk mencari data
    $sql = "SELECT * FROM data_civitas WHERE id = '$id'";
    $result = mysqli_query($kon, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Simpan kembali data dengan tambahan variabel waktu
            $data_id = $row['id'];
            $data_nama = addslashes ($row['nama_civitas']);
            $ruang = $row['ruang'];

            // Simpan data ke tabel lain dengan tambahan waktu
            $sql_simpan = "INSERT INTO kehadiran (id, nama_civitas, ruang, waktu_kehadiran) VALUES ('$data_id', '$data_nama', '$ruang', '$waktu')";
            mysqli_query($kon, $sql_simpan);

            // Gunakan SweetAlert untuk pesan yang otomatis ditutup
            echo '<script>
                    Swal.fire({
                        title: "Masuk.",
                        text: "Data kamu sudah direkam",
                        icon: "success",
                        timer: 1500, // Durasi pesan (dalam milidetik)
                        showConfirmButton: false // Tidak menampilkan tombol OK
                    }).then(function(){
                        window.location.href = "../admin/index.php"; // Arahkan setelah menutup pesan
                    });
                  </script>';
        }
    }
}

mysqli_close($kon);
?>
