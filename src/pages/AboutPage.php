<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/style.css">
   <title>Store Web | About</title>
</head>

<body>
   <!-- Navbar -->
   <?php
   include('../components/navbar.php');
   ?>
   <!-- End Navbar -->
   <!-- Main -->
   <main>
      <section id="greetings">
         <div class="flex flex-col items-center justify-center gap-5 h-96">
            <h1 class="text-5xl font-bold mt-52">Selamat datang di Website Tiket </h1>
            <div class="flex flex-col items-center justify-center">
               <p class="text-base font-semibold">Website ini dibuat untuk memudahkan kita dalam mempublikasikan buku di era digital ini.</p>
               <button class="px-5 py-2 mt-10 font-bold text-white transition-all ease-in bg-red-700 border-2 border-red-700 rounded-full hover:bg-red-600 hover:border-red-300 " onclick="window.location.assign('bookpage.php')">See
                  Product <i class="font-bold ri-arrow-right-line"></i></button>
            </div>
         </div>
      </section>
   </main>
   <!-- End Main -->
</body>

</html>