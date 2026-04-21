<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM perpustakaan WHERE id=$id");
$data = mysqli_fetch_array($query);
?>

<h2>Detail Buku</h2>
<table>
    <tr>
        <th>id_pinjaman</th>
        <td><?= $data['id_pinjaman'] ?></td>
    </tr>
    <tr>
        <th>id_buku</th>
        <td><?= $data['id_buku'] ?></td>
    </tr>
    <tr>
        <th>id_anggota</th>
        <td><?= $data['id_anggota'] ?></td>
    </tr>
    <tr>
        <th>id_pinjam</th>
        <td><?= $data['id_pinjam'] ?></td>
    </tr>
    <tr>
        <th>id_kembali</th>
        <td><?= $data['id_kembali'] ?></td>
    </tr>
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