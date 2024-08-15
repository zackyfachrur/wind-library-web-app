<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../../node_modules/remixicon/fonts/remixicon.css">
     <link rel="stylesheet" href="../css/style.css">
     <title>NavbarAdmin</title>
</head>

<body class="flex transition-all ease-in-out justify-start items-start m-auto">
     <nav class="flex flex-col items-center justify-center h-full m-auto bg-red-700 w-96">
          <ul class="flex flex-col items-center justify-center h-screen m-auto font-bold text-red-700">
               <div class="flex flex-col gap-20 text-lg">
                    <li class="px-6 transition-all ease-in bg-white rounded-full cursor-pointer hover:translate-x-1"
                         onclick="window.location.assign('aboutpage.php') ">
                         <i class="ri-home-4-line"></i>
                         About
                    </li>
                    <li class="px-6 transition-all ease-in bg-white rounded-full cursor-pointer hover:translate-x-1"
                         onclick="window.location.assign('bookpage.php') "><i class="ri-book-line"></i>
                         Books</li>
                    <li class="px-6 transition-all ease-in bg-white rounded-full cursor-pointer hover:translate-x-1"
                         onclick="window.location.assign('addbookpage.php') "><i class="ri-user-2-line"></i>
                         Add Books</li>
                    <li class="px-6 transition-all ease-in bg-white rounded-full cursor-pointer hover:translate-x-1"
                         onclick="window.location.assign('../view/HomePage.php') "><i class="ri-news-line"></i> Views <i
                              class="ri-arrow-right-line"></i>
                    </li>
               </div>
          </ul>
     </nav>
</body>

</html>