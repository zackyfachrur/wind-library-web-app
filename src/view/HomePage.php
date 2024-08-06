<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Home | Web Perpustakaan</title>
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
          <!-- Start Welcome -->
          <section class="flex flex-col items-center justify-center w-full h-full m-auto text-start">
               <!-- Shapes  -->
               <div class="flex -z-10">
                    <img src="../img/shapes-2.png" class="absolute w-screen -left-96" alt="">
               </div>
               <!-- End Shapes -->
               <div class="flex flex-col items-start justify-center gap-3 mt-20 mb-20 h-96">
                    <h1 class="w-full mt-10 text-4xl font-bold text-black -z-20">Baca Buku Di <span
                              class="z-50 px-4 text-white bg-black rounded-full">Wind
                              Library</span> <br> Jadi Lebih Mudah.
                    </h1>
                    <p class="text-base font-semibold"><span
                              class="px-2 font-bold text-white bg-black rounded-full">Menjual beberapa buku
                              Komik,
                              Digital, Kamus dan
                              lain lain. </span>
                    </p>
                    <div class="flex gap-3">
                         <button
                              class="flex flex-row items-center justify-center gap-1 font-bold transition-all ease-in-out"
                              onclick="GotoAbout()">
                              <div class="flex px-3 py-2 text-xl text-white bg-black rounded-s-xl hover:translate-x-2">
                                   <h1>See Product</h1>
                              </div>
                              <div
                                   class="flex px-3 py-2 text-sm text-white transition-all ease-in-out bg-black border-2 border-black rounded-e-xl">
                                   <i class="ri-arrow-right-s-line"></i>
                              </div>
                         </button>
                         <button
                              class="hover:translate-x-2 transition-all ease-in-out py-2 text-xl text-black font-bold bg-white border-2 border-black px-7 rounded-xl "
                              onclick="GotoAbout()">
                              <h1>Learn More</h1>
                         </button>
                    </div>
               </div>
          </section>
          <!-- End Welcome -->

          <!-- Start Content -->
          <section class="flex flex-col items-center justify-center w-full gap-5 m-auto h-96">
               <!-- Shapes  -->
               <div class="flex">
                    <img src="../img/shapes-1.png" class="absolute w-screen" alt="">
               </div>
               <!-- End Shapes -->

               <!-- Header Content -->
               <div class="flex flex-col items-center justify-center">
                    <h1
                         class="flex items-center justify-center gap-2 px-3 py-1 text-2xl font-bold text-white bg-black rounded-full">
                         Beragam Jenis Buku <i class="ri-arrow-down-line"></i></h1>
               </div>
               <!-- End Header Content -->

               <!-- Start Buku -->
               <div class="flex flex-col gap-4">
                    <!-- Group Card 1 -->
                    <div class="flex flex-row gap-3">
                         <!-- Card -->
                         <div
                              class="flex flex-col items-center justify-center h-32 px-5 py-5 bg-white border-black border-1 drop-shadow-xl rounded-xl w-72">
                              <h1 class="text-xl font-bold text-black">Buku Komik
                                   <i class="ri-book-2-line"></i>
                              </h1>
                              <button
                                   class="px-3 py-1 text-sm font-bold text-white transition-all ease-in-out bg-black rounded-full hover:translate-x-2">See
                                   Product <i class="ri-arrow-right-s-line"></i></button>
                         </div>
                         <div
                              class="flex flex-col items-center justify-center h-32 px-5 py-5 bg-white border-black border-1 drop-shadow-xl rounded-xl w-72">
                              <h1 class="text-xl font-bold text-black">Buku Digital<i class="ri-smartphone-line"></i>
                              </h1>
                              <button
                                   class="px-3 py-1 text-sm font-bold text-white transition-all ease-in-out bg-black rounded-full hover:translate-x-2">See
                                   Product <i class="ri-arrow-right-s-line"></i></button>
                         </div>
                         <div
                              class="flex flex-col items-center justify-center h-32 px-5 py-5 bg-white border-black border-1 drop-shadow-xl rounded-xl w-72">
                              <h1 class="text-xl font-bold text-black">Buku Kamus

                                   <i class="ri-book-open-line"></i>
                              </h1>
                              <button
                                   class="px-3 py-1 text-sm font-bold text-white transition-all ease-in-out bg-black rounded-full hover:translate-x-2">See
                                   Product <i class="ri-arrow-right-s-line"></i></button>
                         </div>
                         <!-- End Card -->
                    </div>
                    <!-- End Group Card 1 -->

                    <!-- Group Card 2 -->
                    <div class="flex flex-row gap-3">
                         <!-- Card -->
                         <div
                              class="flex flex-col items-center justify-center h-32 px-5 py-5 bg-white border-black border-1 drop-shadow-xl rounded-xl w-72">
                              <h1 class="text-xl font-bold text-black">Buku Novel
                                   <i class="ri-book-read-line"></i></i>
                              </h1>
                              <button
                                   class="px-3 py-1 text-sm font-bold text-white transition-all ease-in-out bg-black rounded-full hover:translate-x-2">See
                                   Product <i class="ri-arrow-right-s-line"></i></button>
                         </div>
                         <div
                              class="flex flex-col items-center justify-center h-32 px-5 py-5 bg-white border-black border-1 drop-shadow-xl rounded-xl w-72">
                              <h1 class="text-xl font-bold text-black">Buku Manga

                                   <i class="ri-booklet-line"></i>
                              </h1>
                              <button
                                   class="px-3 py-1 text-sm font-bold text-white transition-all ease-in-out bg-black rounded-full hover:translate-x-2">See
                                   Product <i class="ri-arrow-right-s-line"></i></button>
                         </div>
                         <div
                              class="flex flex-col items-center justify-center h-32 px-5 py-5 bg-white border-black border-1 drop-shadow-xl rounded-xl w-72">
                              <h1 class="text-xl font-bold text-black">Buku Majalah
                                   <i class="ri-book-2-fill"></i>
                              </h1>
                              <button
                                   class="px-3 py-1 text-sm font-bold text-white transition-all ease-in-out bg-black rounded-full hover:translate-x-2">See
                                   Product <i class="ri-arrow-right-s-line"></i></button>
                         </div>

                         <!-- End Card -->
                    </div>
                    <!-- End Group Card 2 -->
               </div>
               <!-- End Buku -->
          </section>
          <!-- End Content -->

          <!-- Footer -->
          <?php
          include('../components/Footer.php');
          ?>
          <!-- End Footer -->
     </main>
     <!-- End Content -->

     <script>
     function GotoAbout() {
          window.location.assign('AboutPage.php');
     };
     </script>
</body>

</html>