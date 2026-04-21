<!DOCTYPE html>
<html>
<head>
<title>Input Buku</title>
</head>
<body>

<h2>Input Buku Perpustakaan</h2>

<form method="post" action="">
Judul Buku : <br>
<input type="text" name="judul"><br><br>

Pengarang : <br>
<input type="text" name="pengarang"><br><br>

Penerbit : <br>
<input type="text" name="penerbit"><br><br>

Tahun : <br>
<input type="number" name="tahun"><br><br>

Stok : <br>
<input type="number" name="stok"><br><br>

<input type="submit" name="simpan" value="Simpan">
</form>

</body>
</html>

<?php
$conn = mysqli_connect("localhost","root","","perpustakaan");

if(isset($_POST['simpan'])){
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];
$stok = $_POST['stok'];

mysqli_query($conn,"INSERT INTO buku VALUES('','$judul','$pengarang','$penerbit','$tahun','$stok')");

echo "Data berhasil disimpan";
}
?>