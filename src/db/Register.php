<?php
include('Connection.php');

$name_reg = $_POST['name'];
$email_reg = $_POST['email'];
$pass_reg = $_POST['pass'];
$confirmPass_reg = $_POST['confpass'];

$reg_result = mysqli_query($connection, "INSERT INTO tabel_pengguna (nama_pengguna, email_pengguna, pass_pengguna) VALUES ('$name','$email', '$pass_reg')");

if ($reg_result) {
   header("Location:../pages/LoginPage.php");
} else {
   echo "Gagal registrasi";
}
