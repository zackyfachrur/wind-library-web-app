<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/style.css">
   <title>Store Web | About</title>
</head>

<body style="background: url('../img/bg-home.jpg');">
   <!-- Navbar -->
   <?php
   include('../components/navbar.php');
   ?>
   <!-- End Navbar -->
   <!-- Main -->
   <main>
      <div class="flex text-white justify-center items-center h-96 flex-col">
         <h1 class="text-5xl font-bold mt-52">Hello World!</h1>
         <p>Lorem ipsum dolor sit amet.</p>
         <button class="bg-black px-5 py-2 mt-10 rounded-full border-2 hover:bg-transparent"
            onclick="window.location.assign('product.php')">See
            Product</button>
      </div>
   </main>
   <!-- End Main -->
</body>

</html>