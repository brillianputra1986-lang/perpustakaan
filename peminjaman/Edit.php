<?php
// STEP 1: Tangkap ID dari URL
include 'koneksi.php';
$id = $_GET['id'];

// STEP 2: Ambil data perpustakaan berdasarkan ID
$query = mysqli_query($conn, 
    "SELECT * FROM perpustakaan WHERE id='$id'");
$data = mysqli_fetch_array($query);
?>

<!-- STEP 3: Tampilkan form dengan data lama -->
<form action="proses_edit.php" 
      method="POST">
    
    <!-- Kirim ID lewat hidden input -->
    <input type="hidden" 
           name="i_perpustakaan
           value="<?= $data['id'] ?>">
    
    <label>id_pinjaman:</label>
    <input type="text" 
           name="id_pinjaman" 
           value="<?= $data['id_pinjaman'] ?>">
    <br><br>
    
    <label>id_buku:</label>
    <input type="text" 
           name="id_buku"
           value="<?= $data['id_buku'] ?>">
    <br><br>
    
    <label>id_anggota:</label>
    <input type="text" 
           name="id_anggota"
           value="<?= $data['id_anggota'] ?>">
    <br><br>
    
    <label>id_pinjam:</label>
    <input type="text" 
           name="id_pinjam"
           value="<?= $data['id_pinjam'] ?>">
    <br><br>
    
    <label>id_kembali:</label>
    <input type="text" 
           name="id_kembali"
           value="<?= $data['id_kembali'] ?>">
    <br><br>
    
    <button type="submit">Update</button>
</form>