<?php
include('./db/Connection.php');

$book_ticket = $_POST['tiket_buku'];
$book_category = $_POST['kategori_buku'];

if (empty($book_ticket) and empty($book_category)) {
     header('Location:ProductPage.php');
}

if (!empty($book_ticket) and empty($book_category)) {
     $showBook = mysqli_query($connection, "SELECT * FROM tabel_buku WHERE tiket_buku='$book_ticket'");
} elseif (!empty($book_category) and empty($book_ticket)) {
     $showBook = mysqli_query($connection, "SELECT * FROM tabel_buku WHERE kategori_buku='$book_category'");
} else {
     $showBook = mysqli_query($connection, "SELECT * FROM tabel_buku WHERE tiket_buku='$book_ticket' AND kategori_buku='$book_category'");
}

$results = mysqli_fetch_all($showBook, MYSQLI_ASSOC);

?>



<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Product | Web Perpustakaan</title>
     <?php
     include('../components/header.php');
     ?>
</head>


<body class="overflow-x-hidden">
     <header>
          <?php
          include('../components/NavbarView.php')
          ?>
     </header>
     <!-- Star Content -->
     <main>
          <!-- Start Product -->
          <section class="flex flex-col items-center justify-center w-full h-full m-auto">
               <div class="flex flex-col items-center justify-center gap-3 h-28">
                    <h1 class="mt-2 text-4xl font-bold text-black">Product <span
                              class="px-2 text-white bg-black rounded-full">Wind
                              Library</span>
                    </h1>
               </div>

               <!-- Search -->
               <form action="./Product.php" method="post"
                    class="flex flex-row items-center justify-center w-full gap-2">
                    <div class="flex flex-row gap-4 px-4 py-2 border-2 border-black rounded-xl">
                         <!-- <i class="ri-search-line"></i> -->
                         <input type="text" placeholder="Type to search.." name="tiket_buku" id="tiket_buku"
                              class="w-32 outline-none">
                         <div class="flex flex-row items-center justify-center">
                              <button class="px-3 py-1 font-bold text-white bg-black rounded-xl" type="button"
                                   onclick="categoriesClick()">Categories <i class="ri-arrow-down-s-line"></i></button>


                              <ul class="absolute flex-row hidden gap-2 px-3 py-1 mt-2 font-bold text-black bg-white border-2 border-black rounded-xl top-80"
                                   id="show-categories">
                                   <li class="flex gap-2"><input type="radio" name="kategori_buku" id="komik"
                                             value="komik" required><label for="komik">Komik</label>
                                   </li>
                                   <li class="flex gap-2"><input type="radio" name="kategori_buku" value="kamus"
                                             id="kamus" required><label for="kamus">Kamus</label>
                                   </li>
                                   <li class="flex gap-2"><input type="radio" name="kategori_buku" value="novel"
                                             id="novel" required><label for="novel">Novel</label>
                                   </li>
                                   <li class="flex gap-2"><input type="radio" name="kategori_buku" value="majalah"
                                             id="majalah" required><label for="majalah">Majalah</label></li>
                                   <li class="flex gap-2"><input type="radio" name="kategori_buku" value="digital"
                                             id="digital" required><label for="digital">Digital</label></li>
                                   <li class="flex gap-2"><input type="radio" id="manga" name="kategori_buku"
                                             value="manga" required><label for="manga">Manga</label>
                                   </li>
                              </ul>

                         </div>
                    </div>

                    <button class="px-3 py-2 text-xl font-bold text-white bg-black rounded-xl" type="submit"><i
                              class="ri-search-line"></i></button>
               </form>
               <!-- End Search -->
          </section>
          <!-- End Product -->

          <!-- Deksripsi -->
          <section class="flex flex-row flex-wrap items-start justify-center h-full gap-3 mt-20 container-sm">
               <?php
               foreach ($results as $result) {
               ?>
                    <div class="flip-card">
                         <div class="flip-card-inner">
                              <div class="flip-card-front">
                                   <h1 class="text-sm font-bold capitalize"><i class="ri-ticket-line"></i>
                                        <?php echo $result['tiket_buku'] ?>
                                        <p>Arahkan Mouse</p>
                              </div>
                              <div class="flip-card-back">
                                   <p class="text-sm font-bold"><?php echo $result['nama_buku']
                                                                 ?></p>
                                   <p class="text-sm font-bold capitalize"><i class="ri-book-line"></i>
                                        <?php echo $result['kategori_buku'] ?>
                                   </p>
                                   <p class="text-sm font-bold "><?php echo $result['tanggal_rilis'] ?></p>
                                   <button
                                        class="self-center w-40 px-3 py-1 mt-10 text-sm font-bold text-white transition-all ease-in-out bg-black rounded-full hover:translate-y-2"
                                        onclick="GotoAdmin()">Learn
                                        More
                                        <i class="ri-arrow-right-s-line"></i></button>
                              </div>
                         </div>

                    </div>
               <?php  }
               ?>
          </section>
          <!-- End Deskripsi -->

          <!-- Footer -->
          <?php
          include('../components/Footer.php');
          ?>
          <!-- End Footer -->
     </main>
     <!-- End Content -->

     <!-- JS -->
     <script>
          function GotoAdmin() {
               window.location.assign('../admin/');
          }
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
</body>

</html>