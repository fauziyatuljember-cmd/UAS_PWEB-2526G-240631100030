<?php
include 'koneksi.php';

$data = mysqli_query($conn,"SELECT * FROM buku");
?>

<!DOCTYPE html>
<html>
<head>
<title>Daftar Buku</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f4f6f9;
}

.card{
    border:none;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

.navbar{
    background:#0d6efd;
}

.navbar-brand{
    color:white !important;
    font-weight:bold;
}

.table th{
    background:#0d6efd;
    color:white;
}

.btn{
    border-radius:10px;
}

</style>

</head>
<body>

<nav class="navbar">
<div class="container">
<a class="navbar-brand" href="#">
📚 Sistem Pendataan Buku
</a>
</div>
</nav>

<div class="container mt-4">

<div class="card p-4">

<h2 class="text-center mb-4">
Daftar Buku
</h2>

<div class="mb-3">

<a href="tambah.php" class="btn btn-success">
➕ Tambah Buku
</a>

<a href="index.php" class="btn btn-secondary">
🏠 Dashboard
</a>

<a href="logout.php" class="btn btn-danger float-end">
🚪 Logout
</a>

</div>

<table class="table table-bordered table-hover">

<tr>
<th>No</th>
<th>Judul Buku</th>
<th>Pengarang</th>
<th>Penerbit</th>
<th>Tahun</th>
<th>Kategori</th>
<th width="180">Aksi</th>
</tr>

<?php
$no=1;

while($d=mysqli_fetch_assoc($data)){
?>

<tr>

<td><?= $no++; ?></td>
<td><?= $d['Judul']; ?></td>
<td><?= $d['pengarang']; ?></td>
<td><?= $d['penerbit']; ?></td>
<td><?= $d['tahun_terbit']; ?></td>
<td><?= $d['kategori']; ?></td>

<td>

<a href="edit.php?id=<?= $d['id_buku']; ?>"
class="btn btn-warning btn-sm">
✏ Edit
</a>

<a href="hapus.php?id=<?= $d['id_buku']; ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin ingin menghapus data?')">
🗑 Hapus
</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</div>

</body>
</html>
