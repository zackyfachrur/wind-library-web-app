<?php
include('Connection.php');


$books_tiket = $_POST['books_tiket'];
$books_name = $_POST["books_name"];
$books_desc = $_POST['books_desc'];
$books_release = $_POST['books_release'];

$add_books = mysqli_query($connection, "INSERT INTO tabel_buku (tiket_buku, nama_buku, deskripsi_buku, tanggal_rilis) VALUES ('$books_tiket', '$books_name', '$books_desc', '$books_release')");

if (!$add_books) {
   echo "Gagal menambahkan buku";
} else {
   header('Location:../admin/BookPage.php');
}
