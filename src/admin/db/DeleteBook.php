<?php
include('connection.php');

$books_tiket = $_GET['id'];
$query = mysqli_query($connection, "DELETE FROM tabel_buku WHERE tiket_buku='$books_tiket'");

if ($query) {
     header('Location:../BookPage.php');
} else {
     echo "Gagal delete data";
}
