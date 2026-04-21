<?php
// STEP 1: Tangkap ID dari URL
include 'koneksi.php';
$id = $_GET['id'];

// STEP 2:ambil data buku berdasarkan ID
$query = mysqli_query($conn, 
    "SELECT * FROM perpustakaan WHERE id='$id'");
$data = mysqli_fetch_array($query);
?>

<!-- STEP 3: Tampilkan form dengan data lama -->
<form action="proses_edit.php" 
      method="POST">
    
    <!-- Kirim ID lewat hidden input -->
    <input type="hidden" 
           name="id" 
           value="<?= $data['id'] ?>">
    
    <label>Judul:</label>
    <input type="text" 
           name="judul" 
           value="<?= $data['judul'] ?>">
    <br><br>
    
    <label>Penulis:</label>
    <input type="text" 
           name="penulis" 
           value="<?= $data['penulis'] ?>">
    <br><br>
    
    <label>Penerbit:</label>
    <textarea name="penerbit"><?= $data['penerbit'] ?></textarea>
    <br><br>
    
    <button type="submit">Update</button>
</form>