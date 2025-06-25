<?php 

session_start();
include 'koneksi.php';


$tanggal= date('Y-m-d-h:i:sa');
$id = $_POST ['id'];
$nama = addslashes ($_POST['nama_civitas']);
$ruang = $_POST ['ruang'];



$sql="INSERT into kehadiran (id, nama_civitas, ruang, waktu_kehadiran) values 
('$id', '$nama', '$ruang', '$tanggal')";

$hasil = mysqli_query($kon, $sql);

$_SESSION["sukses"] = 'Silakan Masuk Perpustakaan';
header('location: index.php');

/*if($hasil){
    echo "<script>alert('Silakan Masuk Perpustakaan!');window.location='index.php'</script>";
}
else {
    echo 'Silakan coba lagi!';
    exit;
}*/
?>