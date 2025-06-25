<?php
include ('koneksi.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data berdasarkan ID
    $delete_query = mysqli_query($kon, "DELETE FROM data_civitas WHERE id = $id");

    if ($delete_query) {
        echo '<script>alert("Data berhasil dihapus!");</script>';
        echo '<script>window.location.href = "edit_data.php";</script>';
        } else {
        echo "Gagal menghapus data.";
    }
}
?>
