<?php
include('connection.php');

$books_tiket = $_POST['books_tiket'];
$books_name = $_POST["books_name"];
$books_desc = $_POST['books_desc'];
$books_release = $_POST['books_release'];

$update = mysqli_query($connection, "UPDATE tabel_buku SET tiket_buku='$books_tiket', nama_buku='$books_name', deskripsi_buku='$books_desc',tanggal_rilis='$books_release' WHERE tiket_buku='$books_tiket'");

if ($update) {
     header('Location:../admin/BookPage.php');
}
