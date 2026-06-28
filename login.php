<?php
session_start();
include 'koneksi.php';

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query(
        $conn,
        "SELECT * FROM user
        WHERE username='$username'
        AND password='$password'"
    );

    if(mysqli_num_rows($query) > 0){

        $_SESSION['username'] = $username;

        header("Location: index.php");
        exit;

    } else {

        echo "
        <script>
        alert('Username atau Password Salah!');
        </script>
        ";

    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Login Sistem Buku</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background: linear-gradient(135deg,#0d6efd,#6610f2);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.login-card{
    width:400px;
    background:white;
    padding:40px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

.logo{
    font-size:70px;
    text-align:center;
}

.judul{
    text-align:center;
    font-weight:bold;
    color:#0d6efd;
    margin-bottom:20px;
}

.btn-login{
    width:100%;
    border-radius:10px;
}

.footer{
    text-align:center;
    margin-top:15px;
    color:gray;
    font-size:14px;
}

</style>

</head>
<body>

<div class="login-card">

<div class="logo">
📚
</div>

<h3 class="judul">
Sistem Pendataan Buku
</h3>

<form method="POST">

<div class="mb-3">

<label>Username</label>

<input type="text"
name="username"
class="form-control"
placeholder="Masukkan Username"
required>

</div>

<div class="mb-3">

<label>Password</label>

<input type="password"
name="password"
class="form-control"
placeholder="Masukkan Password"
required>

</div>

<button type="submit"
name="login"
class="btn btn-primary btn-login">

🔑 Login

</button>

</form>

<div class="footer">

© 2026 Sistem Pendataan Buku

</div>

</div>

</body>
</html>
