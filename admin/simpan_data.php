<?php
include('koneksi.php');

$id = $_POST['id'];
$nama = addslashes($_POST['nama_civitas']);
$ruang = $_POST['ruang'];

// Query SQL untuk memeriksa apakah data sudah ada berdasarkan ID
$cek_sql = "SELECT id FROM data_civitas WHERE id = '$id'";
$cek_result = mysqli_query($kon, $cek_sql);

if (mysqli_num_rows($cek_result) > 0) {
    // Data sudah ada, tampilkan pesan alert
    echo '<script>alert("Data dengan ID tersebut sudah ada!");</script>';
    echo '<script>window.location.href = "tambah_data.php";</script>';
} else {
    // Data belum ada, insert ke database
    $sql = "INSERT INTO data_civitas (id, nama_civitas, ruang) VALUES ('$id', '$nama', '$ruang')";
    $hasil = mysqli_query($kon, $sql);

    if ($hasil) {
        echo '<script>alert("Data berhasil diinsert!");</script>';
        echo '<script>window.location.href = "tambah_data.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($kon);
    }
}

mysqli_close($kon);
?>
