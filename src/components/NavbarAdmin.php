<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../../node_modules/remixicon/fonts/remixicon.css">
     <link rel="stylesheet" href="../css/style.css">
     <title>NavbarAdmin</title>
</head>

<body class="flex items-start justify-start m-auto transition-all ease-in-out">
     <nav class="flex flex-col items-center justify-center h-full m-auto border-black border-x-2 drop-shadow-xl w-96">
          <img src="../img/Logo-Nav.png" alt="Navbar Logo" class="mt-10 w-52">
          <ul class="flex flex-col items-start justify-start h-screen mt-10 font-bold text-black">
               <div class="flex flex-col gap-3 text-lg">
                    <li class="px-6 transition-all ease-in bg-white border-black rounded-full cursor-pointer border-1 hover:translate-x-1"
                         onclick="window.location.assign('aboutpage.php') ">
                         <i class="ri-home-4-line"></i>
                         About
                    </li>
                    <button
                         class="px-6 transition-all ease-in bg-white border-black rounded-full cursor-pointer border-1 hover:translate-x-1 text-start"
                         onclick="window.location.assign('../admin/BookPage.php')"><i class="ri-book-line"></i>
                         Books</button>
                    <form action="../admin/BookOfList.php" method="post"
                         class="flex flex-col justify-start items-start gap-2 px-6 py-2 text-sm transition-all ease-in bg-white border-black cursor-pointer rounded-xl border-1"
                         id="showBook">
                         <button type="submit" value="komik" name="kategori_buku"
                              class="transition-all ease-in-out cursor-pointer hover:translate-x-2"><i
                                   class="ri-book-2-line"></i>
                              Komik</button>
                         <button type="submit" value="kamus" name="kategori_buku"
                              class="transition-all ease-in-out cursor-pointer hover:translate-x-2"><i
                                   class="ri-book-open-line"></i> Kamus</button>
                         <button type="submit" value="novel" name="kategori_buku"
                              class="transition-all ease-in-out cursor-pointer hover:translate-x-2"><i
                                   class="ri-book-read-line"></i> Novel</button>
                         <button type="submit" value="majalah" name="kategori_buku"
                              class="transition-all ease-in-out cursor-pointer hover:translate-x-2"><i
                                   class="ri-book-2-fill"></i>
                              Majalah</button>
                         <button type="submit" value="digital" name="kategori_buku"
                              class="transition-all ease-in-out cursor-pointer hover:translate-x-2"><i
                                   class="ri-smartphone-line"></i> Digital</button>
                         <button type="submit" value="manga" name="kategori_buku"
                              class="transition-all ease-in-out cursor-pointer hover:translate-x-2"><i
                                   class="ri-booklet-line"></i>
                              Manga</button>
                    </form>
                    <!-- <script>
                         const showBookList = document.getElementById('showBook');

                         const showBookOfList = () => {
                              if (showBookList.classList.contains('flex')) {
                                   showBookList.classList.remove('flex');
                                   showBookList.classList.add('hidden');
                              } else {
                                   showBookList.classList.remove('hidden');
                                   showBookList.classList.add('flex');
                              }
                         }
                    </script> -->
                    <li class="px-6 transition-all ease-in bg-white border-black rounded-full cursor-pointer border-1 hover:translate-x-1"
                         onclick="window.location.assign('addbookpage.php') "><i class="ri-user-2-line"></i>
                         Add Books</li>
                    <li class="px-6 transition-all ease-in bg-white border-black rounded-full cursor-pointer border-1 hover:translate-x-1"
                         onclick="window.location.assign('../view/HomePage.php') "><i class="ri-news-line"></i> Views <i
                              class="ri-arrow-right-line"></i>
                    </li>
               </div>
          </ul>
     </nav>
</body>

</html>