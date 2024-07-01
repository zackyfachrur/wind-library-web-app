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
   <nav class="flex flex-col items-center justify-center w-screen h-32 m-auto bg-black">
      <ul
         class="flex flex-row items-center justify-center px-6 py-3 m-auto font-bold text-white bg-white rounded-full gap-96 mt-2">
         <div class="flex gap-5 px-5 text-3xl text-black bg-white">
            <h1><i class="ri-film-line"></i> WEB TIKET</h1>
         </div>
         <div class="pl-40">
            <label for="searchMovie"><i class="text-2xl text-black ri-search-line"></i></label>
            <input type="search" placeholder="Search movie" name="searchMovie" id="searchMovie"
               class="px-5 py-2 font-bold text-black border-2 rounded-full outline-none">
         </div>
      </ul>
      <ul class="flex flex-row items-center justify-center m-auto font-bold text-black h-20">
         <div class="flex gap-20 text-lg">
            <li class="px-6 bg-white rounded-full cursor-pointer hover:translate-x-1"
               onclick="window.location.assign('about.php') ">
               <i class="ri-home-4-line"></i>
               About
            </li>
            <li class="px-6 bg-white rounded-full cursor-pointer hover:translate-x-1"
               onclick="window.location.assign('product.php') "><i class="ri-movie-line"></i>
               Product</li>
            <li class="px-6 bg-white rounded-full cursor-pointer hover:translate-x-1"
               onclick="window.location.assign('admin.php') "><i class="ri-user-2-line"></i>
               Admin</li>
            <li class="px-6 bg-white rounded-full cursor-pointer hover:translate-x-1"
               onclick="window.location.assign('contact.php') "><i class="ri-customer-service-line"></i> Contact</li>
            <li class="px-6 bg-white rounded-full cursor-pointer hover:translate-x-1"
               onclick="window.location.assign('news.php') "><i class="ri-news-line"></i> News
            </li>
         </div>
      </ul>
   </nav>
</body>

</html>