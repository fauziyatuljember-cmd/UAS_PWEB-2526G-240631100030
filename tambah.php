<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

if(isset($_POST['simpan'])){

    $judul      = $_POST['judul'];
    $pengarang  = $_POST['pengarang'];
    $penerbit   = $_POST['penerbit'];
    $tahun      = $_POST['tahun'];
    $kategori   = $_POST['kategori'];

    $query = mysqli_query($conn,"INSERT INTO buku
    (Judul,pengarang,penerbit,tahun_terbit,kategori)
    VALUES
    ('$judul','$pengarang','$penerbit','$tahun','$kategori')");

    if($query){
        echo "<script>
        alert('Data berhasil ditambahkan');
        window.location='daftar.php';
        </script>";
    }else{
        echo "Error : ".mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>

    <style>
        body{
            font-family:Arial;
            background:#f2f2f2;
        }

        .container{
            width:450px;
            margin:40px auto;
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,.2);
        }

        h2{
            text-align:center;
        }

        input{
            width:100%;
            padding:10px;
            margin-top:8px;
            margin-bottom:15px;
            border:1px solid #ccc;
            border-radius:5px;
        }

        button{
            width:100%;
            padding:10px;
            background:#28a745;
            color:white;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }

        button:hover{
            background:#218838;
        }

        a{
            text-decoration:none;
        }
    </style>
</head>

<body>

<div class="container">

<h2>Tambah Buku</h2>

<form method="POST">

    <label>Judul Buku</label>
    <input type="text" name="judul" required>

    <label>Pengarang</label>
    <input type="text" name="pengarang" required>

    <label>Penerbit</label>
    <input type="text" name="penerbit" required>

    <label>Tahun Terbit</label>
    <input type="number" name="tahun" required>

    <label>Kategori</label>
    <input type="text" name="kategori" required>

    <button type="submit" name="simpan">
        Simpan
    </button>

</form>

<br>

<a href="daftar.php">
<button type="button">Kembali</button>
</a>

</div>

</body>
</html>
