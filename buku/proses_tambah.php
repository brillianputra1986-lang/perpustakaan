<?php
// STEP 2: Hubungkan ke database
include 'koneksi.php';

// STEP 2: Tangkap data dari form
$nama   = $_POST['judul'];
$kelas  = $_POST['penulis'];
$alamat = $_POST['penerbit'];

// STEP 3: Buat query INSERT
$sql = "INSERT INTO perpustakaan 
        (judul, penulis, penerbit) 
        VALUES 
        ('$nama', '$kelas', '$alamat')";

// Jalankan query dan cek keberhasilan
if (mysqli_query($conn, $sql)) {
    // Berhasil, kembali ke halaman index
    header("location:index.php");
} else {
    // Gagal, tampilkan error
    echo "Error: " . mysqli_error($conn);
}
?>