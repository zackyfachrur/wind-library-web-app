<?php
include('db/Connection.php');
$productId = $_POST['kategori_buku'];
$showBook = mysqli_query($connection, "SELECT * FROM tabel_buku WHERE kategori_buku LIKE '$productId'");
$result = mysqli_fetch_all($showBook, MYSQLI_ASSOC);
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
               <div class="flex flex-col items-center justify-center h-32 gap-3">
                    <h1 class="mt-10 text-4xl font-bold text-black">Product <span
                              class="px-2 text-white bg-black rounded-full">Wind
                              Library</span>
                    </h1>
               </div>

               <!-- Search -->
               <form action="./Product.php" method="post"
                    class="flex flex-row items-center justify-center w-full gap-2">
                    <div class="flex flex-row gap-4 px-4 py-2 border-2 border-black rounded-xl">
                         <!-- <i class="ri-search-line"></i> -->
                         <input type="text" placeholder="Type to search.." class="w-32 outline-none">
                         <div class="flex flex-row items-center justify-center">
                              <button class="px-3 py-1 font-bold text-white bg-black rounded-xl" type="button"
                                   onclick="categoriesClick()">Categories <i class="ri-arrow-down-s-line"></i></button>


                              <ul class="absolute flex-col hidden gap-2 px-3 py-1 mt-2 font-bold text-black bg-white border-2 border-black rounded-xl bottom-72"
                                   id="show-categories">
                                   <li class="flex gap-2"><input type="radio" name="kategori_buku" id="komik"
                                             value="komik"><label for="komik">Komik</label>
                                   </li>
                                   <li class="flex gap-2"><input type="radio" name="kategori_buku" value="kamus"
                                             id="kamus"><label for="kamus">Kamus</label>
                                   </li>
                                   <li class="flex gap-2"><input type="radio" name="kategori_buku" value="novel"
                                             id="novel"><label for="novel">Novel</label>
                                   </li>
                                   <li class="flex gap-2"><input type="radio" name="kategori_buku" value="majalah"
                                             id="majalah"><label for="majalah">Majalah</label></li>
                                   <li class="flex gap-2"><input type="radio" name="kategori_buku" value="digital"
                                             id="digital"><label for="digital">Digital</label></li>
                                   <li class="flex gap-2"><input type="radio" id="manga" name="kategori_buku"
                                             value="manga"><label for="manga">Manga</label>
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
               foreach ($result as $results) {
               ?>
               <div class="px-5 py-2 text-center text-black border-2 border-black w-72 h-36 rounded-xl">
                    <h1 class="text-xl font-bold"><?php echo $results['nama_buku']
                                                       ?></h1>

                    <p class="font-bold capitalize"><i class="ri-book-line"></i> <?php echo $results['kategori_buku'] ?>
                    </p>
                    <p><?php echo $results['tanggal_rilis'] ?></p>
                    <button
                         class="px-3 py-1 text-sm font-bold text-white transition-all ease-in-out bg-black rounded-full hover:translate-x-2">Learn
                         More
                         <i class="ri-arrow-right-s-line"></i></button>
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