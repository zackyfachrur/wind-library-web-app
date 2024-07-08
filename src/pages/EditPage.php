<?php
include('../db/Connection.php');

$id = $_GET['id'];

$query = mysqli_query($connection, "SELECT * FROM tabel_buku WHERE tiket_buku='$id'");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php include('../components/header.php') ?>
     <title>Store Web | Edit</title>
</head>

<body>
     <!-- Navbar -->
     <nav>
          <?php include('../components/navbar.php') ?>
     </nav>
     <!-- End Navbar -->
     <!-- Main -->
     <main class="flex items-center justify-center">
          <img src="../img/logo-book.png" alt="">
          <div class="flex items-center justify-center w-full">
               <form action="../db/UpdateBook.php" method="post"
                    class="flex flex-row items-center justify-center py-32 rounded-b-3xl px-52">
                    <div class="flex flex-col">
                         <!-- Tiket Buku -->
                         <div class="flex gap-5 px-5 py-2">
                              <label for="books_tiket">
                                   <i
                                        class="flex px-5 py-2 font-bold text-white transition-all ease-in bg-red-700 border-2 border-red-700 rounded-full ri-ticket-line hover:border-red-300 hover:bg-red-600"></i></label>
                              <input type="text" name="books_tiket" value="<?php echo $result[0]['tiket_buku'] ?>"
                                   id="books_tiket" placeholder="Your Books Ticket"
                                   class="px-5 py-2 font-bold text-red-700 border-2 border-red-700 rounded-full outline-none w-72">
                         </div>
                         <!-- End Tiket Buku -->

                         <!-- Nama Buku -->
                         <div class="flex gap-5 px-5 py-2">
                              <label for="books_name">
                                   <i
                                        class="flex px-5 py-2 font-bold text-white transition-all ease-in bg-red-700 border-2 border-red-700 rounded-full ri-book-2-line hover:border-red-300 hover:bg-red-600"></i></label>
                              <input type="text" name="books_name" value="<?php echo $result[0]['nama_buku'] ?>"
                                   id="books_name" placeholder="Your Books Name"
                                   class="px-5 py-2 font-bold text-red-700 border-2 border-red-700 rounded-full outline-none w-72">
                         </div>
                         <!-- End Nama Buku -->

                         <!-- Desc Buku -->
                         <div class="flex gap-5 px-5 py-2">
                              <label for="books_desc">
                                   <i
                                        class="flex px-5 py-2 font-bold text-white transition-all ease-in bg-red-700 border-2 border-red-700 rounded-full ri-book-2-line hover:border-red-300 hover:bg-red-600"></i></label>
                              <input type="text" name="books_desc" value="<?php echo $result[0]['deskripsi_buku'] ?>"
                                   id="books_desc" placeholder="Your Books Description"
                                   class="px-5 py-2 font-bold text-red-700 border-2 border-red-700 rounded-full outline-none w-72">
                         </div>
                         <!-- End Desc Buku -->

                         <!-- Rilis Buku -->
                         <div class="flex gap-5 px-5 py-2">
                              <label for="books_release">
                                   <i
                                        class="flex px-5 py-2 font-bold text-white transition-all ease-in bg-red-700 border-2 border-red-700 rounded-full ri-book-2-line hover:border-red-300 hover:bg-red-600"></i></label>
                              <input type="date" name="books_release" value="<?php echo $result[0]['tanggal_rilis'] ?>"
                                   id="books_release"
                                   class="px-5 py-2 font-bold text-red-700 border-2 border-red-700 rounded-full outline-none w-72">
                         </div>
                         <!-- Rilis Buku -->

                    </div>

                    <button type="submit"
                         class="flex gap-2 px-5 py-2 font-bold text-white transition-all ease-in bg-red-700 border-2 border-red-700 rounded-full hover:border-red-300 hover:bg-red-600">Submit<i
                              class="ri-add-line"></i></button>
               </form>
          </div>
     </main>
     <!-- End Main -->
</body>

</html>