<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Perpustakaan</title>
</head>
<body>
    <h2>Form Tambah Buku</h2>
    
    <form action="proses_tambah.php" 
          method="POST">
        
        <label>id_buku:</label>
        <input type="text" 
               name="id_buku" 
               required>
        <br><br>
        
        <label>judul:</label>
        <input type="text" 
               name="judul" 
               required>
        <br><br>
        
        <label>penulis:</label>
        <textarea name="penulis" 
                  required></textarea>
        <br><br>
        
        <label>penerbit:</label>
        <textarea name="penerbit" 
                  required></textarea>
        <br><br>
        
        <label>stok:</label>
        <input type="number" 
               name="stok" 
               required>
        <br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>