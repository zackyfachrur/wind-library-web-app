<?php
include('Connection.php');

$name_log = $_POST['name'];
$email_log = $_POST['email'];
$pass_log = $_POST['pass'];
$confpass_log = $_POST['confpass'];

$log_validation = mysqli_query($connection, "SELECT nama_pengguna FROM tabel_pengguna WHERE id_pengguna = 7; ");

if (isset($name_log) == $log_validation) {
   $log_result = mysqli_query($connection, "INSERT INTO tabel_pengguna (nama_pengguna, email_pengguna, pass_pengguna) VALUES ('$name_log','$email_log','$pass_log')");
   header("Location:../admin/index.php");
} else {
   echo "Data login tidak sesuai dengan data Register";
}
