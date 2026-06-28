<?php
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn,
"SELECT * FROM buku WHERE id_buku='$id'");

$d = mysqli_fetch_assoc($data);

if(isset($_POST['update'])){

    mysqli_query($conn,
    "UPDATE buku SET
    Judul='$_POST[judul]',
    pengarang='$_POST[pengarang]',
    penerbit='$_POST[penerbit]',
    tahun_terbit='$_POST[tahun]',
    kategori='$_POST[kategori]'
    WHERE id_buku='$id'");

    header("Location: daftar.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Buku</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<div class="card p-4 shadow">

<h2>Edit Buku</h2>

<form method="POST">

<label>Judul Buku</label>
<input type="text" name="judul"
value="<?= $d['Judul']; ?>"
class="form-control">

<br>

<label>Pengarang</label>
<input type="text" name="pengarang"
value="<?= $d['pengarang']; ?>"
class="form-control">

<br>

<label>Penerbit</label>
<input type="text" name="penerbit"
value="<?= $d['penerbit']; ?>"
class="form-control">

<br>

<label>Tahun</label>
<input type="number" name="tahun"
value="<?= $d['tahun_terbit']; ?>"
class="form-control">

<br>

<label>Kategori</label>
<input type="text" name="kategori"
value="<?= $d['kategori']; ?>"
class="form-control">

<br>

<button type="submit" name="update"
class="btn btn-primary">
Update
</button>

<a href="daftar.php"
class="btn btn-secondary">
Kembali
</a>

</form>

</div>

</div>

</body>
</html>
