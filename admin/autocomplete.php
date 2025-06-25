<?php
include "koneksi.php"; //Include file koneksi

    $searchTerm  = $_GET['term']; // Menerima kiriman data dari inputan pengguna

    $sql="SELECT id, nama_civitas, ruang FROM data_civitas WHERE id LIKE '%".$searchTerm."%'  ORDER BY id ASC"; // query sql untuk menampilkan data mahasiswa dengan operator LIKE
    $hasil=mysqli_query($kon,$sql);

 //Query dieksekusi

//Disajikan dengan menggunakan perulangan
while ($row = mysqli_fetch_array($hasil))
{
    $data[] = $row['id']." - ".$row['nama_civitas']." - ".$row['ruang'] ;
    
}
//Nilainya disimpan dalam bentuk json
echo json_encode($data);
?>