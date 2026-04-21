<?php
include 'koneksi.php';

// Tangkap semua data dari form
$id     = $_POST['id_buku'];
$nama   = $_POST['judul'];
$kelas  = $_POST['penulis'];
$alamat = $_POST['penerbit'];

// Query UPDATE dengan WHERE
$sql = "UPDATE perpustakaan SET 
        judul   = '$nama', 
        penulis  = '$kelas', 
        penerbit = '$alamat' 
        WHERE id = '$id'";

// Jalankan query
if (mysqli_query($conn, $sql)) {
    header("location:index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
