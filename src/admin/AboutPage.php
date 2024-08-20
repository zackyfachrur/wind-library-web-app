<!DOCTYPE html>
<html lang="en">

<head>
     <?php include('../components/header.php') ?>
     <title>Store Web | About</title>
</head>

<body>
     <!-- NavbarAdmin -->
     <nav>
          <?php
          include('../components/NavbarAdmin.php');
          ?>
     </nav>
     <!-- End NavbarAdmin -->
     <!-- Main -->
     <main class="w-full ml-96">
          <section id="greetings">
               <div class="flex flex-col items-center justify-center gap-5 h-96">
                    <h1 class="text-5xl font-bold text-black mt-52">Administrator</h1>
                    <div class="flex flex-col items-center justify-center">
                         <div class="flex gap-3">
                              <button
                                   class="flex flex-row items-center justify-center gap-1 font-bold transition-all ease-in-out"
                                   onclick="window.location.assign('./BookPage.php')">
                                   <div
                                        class="flex px-3 py-2 text-xl text-white bg-black rounded-s-xl hover:translate-x-2">
                                        <h1>See Administrator</h1>
                                   </div>
                                   <div
                                        class="flex px-3 py-2 text-sm text-white transition-all ease-in-out bg-black border-2 border-black rounded-e-xl">
                                        <i class="ri-arrow-right-s-line"></i>
                                   </div>
                              </button>
                         </div>
                    </div>
               </div>
          </section>
     </main>
     <!-- End Main -->
</body>

</html>