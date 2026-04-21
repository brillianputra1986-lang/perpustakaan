<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM perpustakaan WHERE id=$id");
$data = mysqli_fetch_array($query);
?>

<h2>Detail Perpustakaan</h2>
<table>
    <tr>
        <th>id_buku</th>
        <td><?= $data['id_buku'] ?></td>
    </tr>
    <tr>
        <th>judul</th>
        <td><?= $data['judul'] ?></td>
    </tr>
    <tr>
        <th>penulis</th>
        <td><?= $data['penulis'] ?></td>
    </tr>
    <tr>
        <th>penerbit</th>
        <td><?= $data['penerbit'] ?></td>
    </tr>
    <tr>
        <th>stok</th>
        <td><?= $data['stok'] ?></td>
</table>

<a href="index.php" class="btn-kembali">Kembali</a>
<!-- Tombol Edit -->
<a href="edit.php?id=<?= $data['id'] ?>" class="btn-edit">Edit</a>
<!-- Tombol Hapus -->
<a href="hapus.php?id=<?= $data['id'] ?>" class="btn-hapus">Hapus</a>
<!-- Tombol Tambah Data -->
<a href="tambah.php" class="btn-tambah">
    <i class="fas fa-plus"></i> Tambah Data </a>
    <!-- Tombol Kembali -->
<a href="index.php" class="btn-kembali">Kembali</a> 