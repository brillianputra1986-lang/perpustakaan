<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Buku</title>
</head>
<body>
    <h2>Form Tambah Buku</h2>
    
    <form action="proses_tambah.php" 
          method="POST">
        
        <label>id_pinjaman:</label>
        <input type="text" 
               name="id_pinjaman" 
               required>
        <br><br>
        
        <label>id_buku:</label>
        <input type="text" 
               name="id_buku" 
               required>
        <br><br>
        
        <label>id_anggota:</label>
        <input type="text" 
               name="id_anggota" 
               required>
        <br><br>
        
        <label>id_pinjam:</label>
        <input type="text" 
               name="id_pinjam" 
               required>
        <br><br>
        
        <label>id_kembali:</label>
        <input type="text" 
               name="id_kembali" 
               required>
        <br><br>
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>