<?php
include('./db/Connection.php');

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
     <!-- NavbarAdmin -->
     <nav>
          <?php include('../components/NavbarAdmin.php') ?>
     </nav>
     <!-- End NavbarAdmin -->
     <!-- Main -->
     <main class="flex w-full">
          <img src="../img/logo-book.png" alt="">
          <div class="flex items-center justify-center w-full">
               <form action="./db/UpdateBook.php" method="post"
                    class="flex flex-row items-center justify-center py-32 rounded-b-3xl px-52">
                    <div class="flex flex-col">
                         <div class="flex gap-5 px-5 py-2">
                              <!-- Books Tiket -->
                              <label for="books_tiket"><i
                                        class="flex px-5 py-2 font-bold text-white transition-all ease-in bg-red-700 border-2 border-red-700 rounded-full ri-ticket-line hover:border-red-300 hover:bg-red-600"></i></label>
                              <input type="text" name="books_tiket" id="books_tiket" placeholder="Your Books Ticket"
                                   class="px-5 py-2 font-bold text-red-700 border-2 border-red-700 rounded-full outline-none w-72">
                              <!-- End Books Tiket -->
                         </div>

                         <div class="flex gap-5 px-5 py-2">
                              <!-- Books Name -->
                              <label for="books_name"><i
                                        class="flex px-5 py-2 font-bold text-white transition-all ease-in bg-red-700 border-2 border-red-700 rounded-full ri-book-2-line hover:border-red-300 hover:bg-red-600"></i></label>
                              <input type="text" name="books_name" id="books_name" placeholder="Your Books Ticket"
                                   class="px-5 py-2 font-bold text-red-700 border-2 border-red-700 rounded-full outline-none w-72">
                              <!-- End Books Name -->
                         </div>

                         <div class="flex gap-5 px-5 py-2">
                              <!-- Books Desc -->
                              <label for="books_desc"><i
                                        class="flex px-5 py-2 font-bold text-white transition-all ease-in bg-red-700 border-2 border-red-700 rounded-full ri-blogger-line ri-ticket-line hover:border-red-300 hover:bg-red-600"></i></label>
                              <input type="text" name="books_desc" id="books_desc" placeholder="Your Books Ticket"
                                   class="px-5 py-2 font-bold text-red-700 border-2 border-red-700 rounded-full outline-none w-72">
                              <!-- End Books Desc -->
                         </div>

                         <div class="flex gap-5 px-5 py-2">
                              <!-- Books Release -->
                              <label for="books_release"><i
                                        class="flex px-5 py-2 font-bold text-white transition-all ease-in bg-red-700 border-2 border-red-700 rounded-full ri-calendar-2-line hover:border-red-300 hover:bg-red-600"></i></label>
                              <input type="date" name="books_release" id="books_release" placeholder="Your Books Ticket"
                                   class="px-5 py-2 font-bold text-red-700 border-2 border-red-700 rounded-full outline-none w-72">
                              <!-- End Books Release -->
                         </div>

                         <div class="flex gap-5 px-5 py-2">
                              <!-- Books Category -->
                              <label for="books_tiket"><i
                                        class="flex px-5 py-2 font-bold text-white transition-all ease-in bg-red-700 border-2 border-red-700 rounded-full ri-ticket-line hover:border-red-300 hover:bg-red-600"></i></label>
                              <div class="flex flex-col items-center justify-center">
                                   <button class="px-3 py-1 font-bold text-white bg-black rounded-xl" type="button"
                                        onclick="categoriesClick()">Categories <i
                                             class="ri-arrow-down-s-line"></i></button>


                                   <ul class="absolute flex-row hidden gap-2 px-3 py-1 font-bold text-black bg-white border-2 border-black rounded-xl bottom-40"
                                        id="show-categories">
                                        <div class="flex flex-col gap-2">
                                             <li class="flex gap-2"><input type="radio" name="kategori_buku" id="komik"
                                                       value="komik"><label for="komik">Komik</label>
                                             </li>
                                             <li class="flex gap-2"><input type="radio" name="kategori_buku"
                                                       value="kamus" id="kamus"><label for="kamus">Kamus</label>
                                             </li>
                                             <li class="flex gap-2"><input type="radio" name="kategori_buku"
                                                       value="novel" id="novel"><label for="novel">Novel</label>
                                             </li>
                                        </div>
                                        <div class="flex flex-col gap-2">
                                             <li class="flex gap-2"><input type="radio" name="kategori_buku"
                                                       value="majalah" id="majalah"><label for="majalah">Majalah</label>
                                             </li>
                                             <li class="flex gap-2"><input type="radio" name="kategori_buku"
                                                       value="digital" id="digital"><label for="digital">Digital</label>
                                             </li>
                                             <li class="flex gap-2"><input type="radio" id="manga" name="kategori_buku"
                                                       value="manga"><label for="manga">Manga</label>
                                             </li>
                                        </div>
                                   </ul>

                                   <script>
                                        const showCategories = document.getElementById('show-categories');

                                        function categoriesClick() {
                                             if (showCategories.classList.contains('hidden')) {
                                                  showCategories.classList.add('flex');
                                                  showCategories.classList.remove('hidden');
                                             } else {
                                                  showCategories.classList.add('hidden');
                                                  showCategories.classList.remove('flex');
                                             }
                                        };
                                   </script>

                              </div>
                              <!-- End Books Category -->
                         </div>

                    </div>

                    <button type="submit"
                         class="flex gap-2 px-5 py-2 font-bold text-white transition-all ease-in bg-red-700 border-2 border-red-700 rounded-full hover:border-red-300 hover:bg-red-600">Submit<i
                              class="ri-add-line"></i></button>
               </form>
          </div>
     </main>
     <!-- End Main -->
</body>

</html>body