<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Sistem Pendataan Buku</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f4f6f9;
}

.card-menu{
    border:none;
    border-radius:20px;
    transition:0.3s;
}

.card-menu:hover{
    transform:translateY(-5px);
}

</style>

</head>
<body>

<nav class="navbar navbar-dark bg-primary">
<div class="container">
<span class="navbar-brand mb-0 h1">
📚 Sistem Pendataan Buku
</span>

<a href="logout.php" class="btn btn-danger">
Logout
</a>

</div>
</nav>

<div class="container mt-5">

<h2 class="text-center">
Selamat Datang,
<?= $_SESSION['username']; ?>
</h2>

<div class="row mt-4">

<div class="col-md-4">

<div class="card card-menu shadow p-4 text-center">

<h1>📖</h1>

<h4>Daftar Buku</h4>

<a href="daftar.php"
class="btn btn-primary mt-3">
Masuk
</a>

</div>

</div>

<div class="col-md-4">

<div class="card card-menu shadow p-4 text-center">

<h1>➕</h1>

<h4>Tambah Buku</h4>

<a href="tambah.php"
class="btn btn-success mt-3">
Tambah
</a>

</div>

</div>

<div class="col-md-4">

<div class="card card-menu shadow p-4 text-center">

<h1>🚪</h1>

<h4>Logout</h4>

<a href="logout.php"
class="btn btn-danger mt-3">
Keluar
</a>

</div>

</div>

</div>

</div>

</body>
</html>
