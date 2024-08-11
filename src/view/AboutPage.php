<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>About | Web Perpustakaan</title>
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
          <!-- Start About -->
          <section class="flex items-center justify-center w-full h-full m-auto">
               <div class="flex flex-col items-center justify-center gap-3 h-96">
                    <h1 class="mt-10 text-4xl font-bold text-black">About <span class="px-2 text-white bg-black rounded-full">Wind
                              Library</span>
                    </h1>
                    <p class="text-base font-semibold"><span class="px-2 font-bold text-white bg-black rounded-full">Mengetahui lebih jauh tentang Wind
                              Library. </span>
                    </p>
                    <div class="flex gap-3">
                         <button class="flex flex-row items-center justify-center gap-1 font-bold transition-all ease-in-out" onclick="GotoAbout()">
                              <div class="flex px-3 py-2 text-xl text-white bg-black rounded-s-xl hover:translate-x-2">
                                   <h1>See Product</h1>
                              </div>
                              <div class="flex px-3 py-2 text-sm text-white transition-all ease-in-out bg-black border-2 border-black rounded-e-xl">
                                   <i class="ri-arrow-right-s-line"></i>
                              </div>
                         </button>
                         <button class="py-2 text-xl font-bold text-black transition-all ease-in-out bg-white border-2 border-black hover:translate-x-2 px-7 rounded-xl " onclick="GotoAbout()">
                              <h1>Learn More</h1>
                         </button>
                    </div>

                    <img src="../img/shapes-3.png" alt="Decoration Image" class="absolute translate-y-20 w-96 right-20">
               </div>
          </section>
          <!-- End About -->

          <section>
               <!-- Start Buku -->
               <div class="flex flex-col gap-4 ml-20">
                    <!-- Group Card 1 -->
                    <div class="flex flex-row gap-3 ml-20">
                         <!-- Card -->
                         <div class="flex flex-col items-center justify-center h-32 px-5 py-5 bg-white border-black border-1 drop-shadow-xl rounded-xl w-72">
                              <h1 class="text-xl font-bold text-black">Buku Komik
                                   <i class="ri-book-2-line"></i>
                              </h1>
                              <button class="px-3 py-1 text-sm font-bold text-white transition-all ease-in-out bg-black rounded-full hover:translate-x-2">See
                                   Product <i class="ri-arrow-right-s-line"></i></button>
                         </div>
                         <div class="flex flex-col items-center justify-center h-32 px-5 py-5 bg-white border-black border-1 drop-shadow-xl rounded-xl w-72">
                              <h1 class="text-xl font-bold text-black">Buku Kamus

                                   <i class="ri-book-open-line"></i>
                              </h1>
                              <button class="px-3 py-1 text-sm font-bold text-white transition-all ease-in-out bg-black rounded-full hover:translate-x-2">See
                                   Product <i class="ri-arrow-right-s-line"></i></button>
                         </div>
                         <!-- End Card -->
                    </div>
                    <!-- End Group Card 1 -->

                    <!-- Group Card 2 -->
                    <div class="flex flex-row gap-3">
                         <!-- Card -->
                         <div class="flex flex-col items-center justify-center h-32 px-5 py-5 bg-white border-black border-1 drop-shadow-xl rounded-xl w-72">
                              <h1 class="text-xl font-bold text-black">Buku Novel
                                   <i class="ri-book-read-line"></i></i>
                              </h1>
                              <button class="px-3 py-1 text-sm font-bold text-white transition-all ease-in-out bg-black rounded-full hover:translate-x-2">See
                                   Product <i class="ri-arrow-right-s-line"></i></button>
                         </div>
                         <div class="flex flex-col items-center justify-center h-32 px-5 py-5 bg-white border-black border-1 drop-shadow-xl rounded-xl w-72">
                              <h1 class="text-xl font-bold text-black">Buku Majalah
                                   <i class="ri-book-2-fill"></i>
                              </h1>
                              <button class="px-3 py-1 text-sm font-bold text-white transition-all ease-in-out bg-black rounded-full hover:translate-x-2">See
                                   Product <i class="ri-arrow-right-s-line"></i></button>
                         </div>

                         <!-- End Card -->
                    </div>
                    <!-- End Group Card 2 -->

                    <!-- Group Card 3 -->
                    <div class="flex flex-row gap-3 ml-20">
                         <!-- Card -->
                         <div class="flex flex-col items-center justify-center h-32 px-5 py-5 bg-white border-black border-1 drop-shadow-xl rounded-xl w-72">
                              <h1 class="text-xl font-bold text-black">Buku Digital<i class="ri-smartphone-line"></i>
                              </h1>
                              <button class="px-3 py-1 text-sm font-bold text-white transition-all ease-in-out bg-black rounded-full hover:translate-x-2">See
                                   Product <i class="ri-arrow-right-s-line"></i></button>
                         </div>
                         <div class="flex flex-col items-center justify-center h-32 px-5 py-5 bg-white border-black border-1 drop-shadow-xl rounded-xl w-72">
                              <h1 class="text-xl font-bold text-black">Buku Manga

                                   <i class="ri-booklet-line"></i>
                              </h1>
                              <button class="px-3 py-1 text-sm font-bold text-white transition-all ease-in-out bg-black rounded-full hover:translate-x-2">See
                                   Product <i class="ri-arrow-right-s-line"></i></button>
                         </div>
                         <!-- End Card -->
                    </div>
                    <!-- End Group Card 3 -->
               </div>
               <!-- End Buku -->
          </section>

          <!-- Deskripsi -->
          <section class="flex flex-col items-center justify-center w-screen h-full gap-5 mt-20 bg-transparent">
               <div class="px-5 py-2 text-5xl font-bold text-black bg-white border-2 border-black rounded-xl"><span class="px-5 py-2 text-5xl font-bold text-white bg-black rounded-l-xl">Why</span>
                    <span>Choose </span> <span class="px-5 py-2 text-5xl font-bold text-white bg-black rounded-r-xl">Us
                         ?</span>
               </div>
               <div class="flex flex-col items-center justify-center gap-5">
                    <div class="flex gap-5">
                         <div class="flex flex-col gap-2 px-5 py-5 text-base font-bold text-black border-2 border-black w-96 rounded-xl">
                              <h1 class="text-2xl font-bold">Kapan saja, di mana saja</h1>
                              <p>Anda dapat mengakses koleksi perpustakaan secara 24/7, baik dari <span class="text-white bg-black"> komputer, tablet,
                                        maupun
                                        smartphone, selama ada koneksi internet.Tidak
                                        perlu lagi terikat </span>oleh
                                   jam buka <span class="z-50">perpustakaan </span> fisik.
                              </p>
                         </div>
                         <div class="flex flex-col gap-2 px-5 py-5 text-base font-bold text-black border-2 border-black w-96 rounded-xl">
                              <h1 class="text-2xl font-bold">Pencarian yang mudah</h1>
                              <p><span class="text-white bg-black"> Fitur pencarian yang canggih </span>memungkinkan
                                   Anda menemukan buku yang Anda cari dengan
                                   <span class="text-white bg-black"> cepat
                                        dan akurat, berdasarkan judul, penulis, subjek, atau kata kunci lainnya. </span>
                              </p>
                         </div>
                    </div>
                    <div class="z-20 flex flex-col gap-2 px-5 py-5 text-base font-bold text-black bg-white border-2 border-black w-96 rounded-xl">
                         <h1 class="text-2xl font-bold">Secara singkat <i class="ri-corner-right-down-fill"></i></h1>
                         <p>Web Aplikasi perpustakaan buku menawarkan kemudahan, fleksibilitas, dan
                              pengalaman membaca yang lebih beragam bagi penggunanya.</p>
                         <button class="px-2 py-1 text-sm font-bold text-white transition-all ease-in-out bg-black rounded-full hover:translate-x-2">See
                              Product <i class="ri-arrow-right-s-line"></i></button>
                    </div>
                    <img src="../img/shapes-4.png" alt="Shapes Image Desc" class="absolute w-4/5 left-20 -z-20 ">
               </div>
          </section>
          <!-- End Deskripsi -->



          <!-- Footer -->
          <?php
          include('../components/Footer.php');
          ?>
          <!-- End Footer -->
     </main>
     <!-- End Content -->
</body>

</html>