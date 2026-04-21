<?php
// STEP 2: Hubungkan ke database
include 'koneksi.php';

// STEP 2: Tangkap data dari form
$nama   = $_POST['id_pinjaman'];
$kelas  = $_POST['id_buku'];
$alamat = $_POST['id_anggota'];
$id_pinjam = $_POST['id_pinjam'];
$id_kembali = $_POST['id_kembali'];

// STEP 3: Buat query INSERT
$sql = "INSERT INTO perpustakaan
        (id_pinjaman, id_buku, id_anggota, id_pinjam, id_kembali) 
        VALUES 
        ('$nama', '$kelas', '$alamat', '$id_pinjam', '$id_kembali')";

// Jalankan query dan cek keberhasilan
if (mysqli_query($conn, $sql)) {
    // Berhasil, kembali ke halaman index
    header("location:index.php");
} else {
    // Gagal, tampilkan error
    echo "Error: " . mysqli_error($conn);
}
?>