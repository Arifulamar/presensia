<?php
include "koneksi.php"; // Include file koneksi

$searchTerm = $_GET['term']; // Menerima kiriman data dari inputan pengguna

$sql = "SELECT id, nama_civitas, ruang FROM data_civitas WHERE nama_civitas LIKE '%" . $searchTerm . "%' ORDER BY id ASC";

$result = $kon->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Format hasil sesuai dengan yang diminta: "id<nama_civitas>"
        $label = "" . $row['id'] . " " . $row['nama_civitas'];

        // Buat array dengan hasil autocomplete
        $data[] = array(
            'label' => $label,
            'value' => $row['id'] // Nilai yang akan dimasukkan ke dalam input saat item dipilih
        );
    }
} else {
    $data = array('label' => 'Tidak ditemukan hasil');
}

// Mengembalikan data dalam format JSON
echo json_encode($data);

$kon->close();
?>
