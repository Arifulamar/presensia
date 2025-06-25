<?php
// Koneksi ke database
include ('koneksi.php');
include ('index.php');

// Ambil data dari form
$id = $_POST["id"];
$tanggal = $_POST["waktu"];
$alasan = $_POST["alasan"];
$jaminput = date("Y-m-d H:i:s");

// Query untuk mengambil data nama_civitas dan ruang berdasarkan ID
$query = "SELECT nama_civitas, ruang FROM data_civitas WHERE id = '$id'";
$result = $kon->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nama_civitas = $row["nama_civitas"];
    $ruang = $row["ruang"];
} else {
    // Handle jika ID tidak ditemukan
    echo "ID tidak ditemukan.";
    exit(); // Keluar dari skrip
}

// Query untuk mengecek apakah data dengan ID dan tanggal yang sama sudah ada di tabel ketidakhadiran
$checkDuplicateQuery = "SELECT id FROM ketidakhadiran WHERE id = '$id' AND waktu = '$tanggal'";
$checkDuplicateResult = $kon->query($checkDuplicateQuery);

if ($checkDuplicateResult->num_rows > 0) {
    // Jika data duplikat ditemukan, tampilkan pesan kesalahan
    echo '<script>
    Swal.fire({
        title: "Error!",
        text: "Data dengan ID dan tanggal yang sama sudah ada.",
        icon: "error"
    }).then(function(){
        window.location.href = "../admin/input_tidakhadir.php"; // Arahkan setelah menampilkan pesan
    });
    </script>';
} else {
    // Jika tidak ada data duplikat, simpan data ke dalam tabel ketidakhadiran
    $sql = "INSERT INTO ketidakhadiran (id, nama_civitas, ruang, waktu, alasan, jaminput) VALUES ('$id', '$nama_civitas', '$ruang','$tanggal', '$alasan','$jaminput')";

    if ($kon->query($sql) === TRUE) {
        echo '<script>
        Swal.fire({
            title: "Masuk.",
            text: "Data kamu sudah direkam",
            icon: "success",
            timer: 1500, // Durasi pesan (dalam milidetik)
            showConfirmButton: false // Tidak menampilkan tombol OK
        }).then(function(){
            window.location.href = "../admin/input_tidakhadir.php"; // Arahkan setelah menutup pesan
        });
        </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $kon->error;
    }
}

// Tutup koneksi ke database
$kon->close();
?>
