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
        <th>id_pinjaman</th>
        <th>id_buku</th>
        <th>id_anggota</th>
        <th>id_pinjam</th>
        <th>id_kembali</th>
    </tr>
    <?php while($data = mysqli_fetch_array($query)): ?>
    <tr>
        <td><?= $data['id_pinjaman'] ?></td>
        <td><?= $data['id_buku'] ?></td>
        <td><?= $data['id_anggota'] ?></td>
        <td><?= $data['id_pinjam'] ?></td>
        <td><?= $data['id_kembali'] ?></td>
        <td>
            <a href="edit.php?id=<?= $data['id'] ?>">Edit</a>
            <a href="hapus.php?id=<?= $data['id'] ?>">Hapus</a>
            <a href="detail.php?id=<?= $data['id'] ?>">Detail</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>