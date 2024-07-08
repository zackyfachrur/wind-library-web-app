<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../../node_modules/remixicon/fonts/remixicon.css">
   <link rel="stylesheet" href="../css/style.css">
   <title>Navbar</title>
</head>

<body>
   <nav class="flex flex-col items-center justify-center w-screen h-32 m-auto bg-red-700">
      <ul class="flex flex-row items-center justify-center px-6 py-3 m-auto mt-2 font-bold text-white bg-white rounded-full gap-96">
         <div class="flex gap-5 px-5 text-3xl text-red-700 bg-white">
            <h1><i class="ri-book-3-line"></i> WEB TIKET</h1>
         </div>
         <div class="pl-40">
            <label for="searchMovie"><i class="text-2xl text-red-700 ri-search-line"></i></label>
            <input type="search" placeholder="Search a book.." name="searchMovie" id="searchMovie" class="px-5 py-2 font-bold text-red-700 border-2 border-red-700 rounded-full outline-none">
         </div>
      </ul>
      <ul class="flex flex-row items-center justify-center h-20 m-auto font-bold text-red-700">
         <div class="flex gap-20 text-lg">
            <li class="px-6 transition-all ease-in bg-white rounded-full cursor-pointer hover:translate-x-1" onclick="window.location.assign('aboutpage.php') ">
               <i class="ri-home-4-line"></i>
               About
            </li>
            <li class="px-6 transition-all ease-in bg-white rounded-full cursor-pointer hover:translate-x-1" onclick="window.location.assign('bookpage.php') "><i class="ri-book-line"></i>
               Books</li>
            <li class="px-6 transition-all ease-in bg-white rounded-full cursor-pointer hover:translate-x-1" onclick="window.location.assign('addbookpage.php') "><i class="ri-user-2-line"></i>
               Add Books</li>
            <li class="px-6 transition-all ease-in bg-white rounded-full cursor-pointer hover:translate-x-1" onclick="window.location.assign('contactpage.php') "><i class="ri-customer-service-line"></i> Contact
            </li>
            <li class="px-6 transition-all ease-in bg-white rounded-full cursor-pointer hover:translate-x-1" onclick="window.location.assign('newspage.php') "><i class="ri-news-line"></i> News
            </li>
         </div>
      </ul>
   </nav>
</body>

</html>