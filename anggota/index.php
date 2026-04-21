<?php
include '../koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM perpustakaan");
?>

<!-- Tombol Tambah Data -->
<a href="tambah.php" 
   class="btn-tambah">
    <i class="fas fa-plus"></i> Tambah Data
</a>

<table>
    <tr>
        <th>id_buku</th>
        <th>Judul Buku</th>
        <th>Penulis</th>
        <th>Penerbit</th>
    </tr>
    <?php while($data = mysqli_fetch_array($query)): ?>
    <tr>
        <td><?= $data['id_buku'] ?></td>
        <td><?= $data['Judul'] ?></td>
        <td><?= $data['Penulis'] ?></td>
        <td><?= $data['Penerbit'] ?></td>
        <td>
            <a href="edit.php?id=<?= $data['id'] ?>">Edit</a>
            <a href="hapus.php?id=<?= $data['id'] ?>">Hapus</a>
            <a href="detail.php?id=<?= $data['id'] ?>">Detail</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>