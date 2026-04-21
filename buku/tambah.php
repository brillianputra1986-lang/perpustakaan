<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Buku</title>
</head>
<body>
    <h2>Form Tambah Buku</h2>
    
    <form action="proses_tambah.php" 
          method="POST">
        
        <label>Judul Buku:</label>
        <input type="text" 
               name="judul" 
               required>
        <br><br>
        
        <label>Penulis:</label>
        <input type="text" 
               name="penulis" 
               required>
        <br><br>
        
        <label>Penerbit:</label>
        <textarea name="penerbit" 
                  required></textarea>
        <br><br>
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>