<?php
include('Connection.php');

$books_tiket = $_POST['tiket_buku'];
$books_name = $_POST['nama_buku'];
$books_desc = $_POST['deskripsi_buku'];
$books_release = $_POST['tanggal_rilis'];
$books_category = $_POST['kategori_buku'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="../../img/Logo-Web.png">
   <!-- BS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="../../css/style.css">
   <link rel="stylesheet" href="../../css/tailwind.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
   </script>
   <title>Store Web | Error</title>
</head>

<body class="h-full overflow-x-hidden">
   <nav class="flex flex-col items-center justify-center h-full m-auto drop-shadow-xl w-96">
      <img src="../../img/Logo-Nav.png" alt="Navbar Logo" class="mt-10 w-52">
      <ul class="flex flex-col items-center justify-center h-full mt-10 font-bold text-black">

         <h1 class="text-2xl font-bold text-center text-black"><?php try {
                                                                  $add_books = mysqli_query($connection, "INSERT INTO tabel_buku (tiket_buku, nama_buku, deskripsi_buku, tanggal_rilis, kategori_buku) VALUES ($books_tiket, '$books_name', '$books_desc', '$books_release', '$books_category')");

                                                                  if ($add_books) {
                                                                     header('Location:../BookPage.php');
                                                                  }
                                                               } catch (Exception $error) {
                                                                  echo $error->getMessage();
                                                               }
                                                               ?></h1>
         <div class="flex flex-col gap-3 text-lg">
            <li class="px-6 transition-all ease-in bg-white border-black rounded-full cursor-pointer border-1 hover:translate-x-1"
               onclick="history.go(-1); return false">
               <i class="ri-home-4-line"></i>
               Back
            </li>
         </div>
      </ul>
   </nav>
   <main class="container flex flex-col items-center justify-center w-full h-96">
   </main>
</body>

</html>