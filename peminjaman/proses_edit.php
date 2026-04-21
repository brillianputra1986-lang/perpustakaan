<?php
include 'koneksi.php';

// Tangkap semua data dari form
$id     = $_POST['id_pinjaman'];
$nama   = $_POST['id_buku'];
$kelas  = $_POST['id_anggota'];
$alamat = $_POST['id_pinjam'];
$id_kembali = $_POST['id_kembali'];

// Query UPDATE dengan WHERE
$sql = "UPDATE perpustakaan SET 
        id_pinjaman   = '$id', 
        id_buku  = '$nama', 
        id_anggota = '$kelas', 
        id_pinjam = '$alamat', 
        id_kembali = '$id_kembali'"
        WHERE id = '$id'";

// Jalankan query
if (mysqli_query($conn, $sql)) {
    header("location:index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
