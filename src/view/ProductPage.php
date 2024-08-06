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
          <section class="flex items-center justify-center w-full h-full m-auto">
               <div class="flex flex-col items-center justify-center gap-3 h-96">
                    <h1 class="mt-10 text-4xl font-bold text-black">Product <span
                              class="px-2 text-white bg-black rounded-full">Wind
                              Library</span>
                    </h1>
               </div>
          </section>
          <!-- End Product -->

          <!-- Deksripsi -->
          <section></section>
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