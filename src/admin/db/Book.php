<?php
include('Connection.php');

$tampilkan_buku = mysqli_query($connection, "SELECT * FROM tabel_buku");
$results = mysqli_fetch_all($tampilkan_buku, MYSQLI_ASSOC);
return $results;

if (!$tampilkan_buku) {
   echo "Gagal menampilkan buku";
}
