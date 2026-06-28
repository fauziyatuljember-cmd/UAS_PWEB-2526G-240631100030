<?php

function tambahBuku(
    $conn,
    $judul,
    $pengarang,
    $penerbit,
    $tahun,
    $kategori
){

    $query = "INSERT INTO buku
    (Judul,pengarang,penerbit,tahun_terbit,kategori)
    VALUES
    (
        '$Judul',
        '$pengarang',
        '$penerbit',
        '$tahun',
        '$kategori'
    )";

    return mysqli_query($conn,$query);
}

function hapusBuku($conn,$id){

    $query = "DELETE FROM buku
    WHERE id_buku='$id'";

    return mysqli_query($conn,$query);
}

?>
