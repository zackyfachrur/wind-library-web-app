<!DOCTYPE html>
<html lang="en">

<head>
     <?php include('../components/header.php') ?>
     <title>Store Web | About</title>
</head>

<body>
     <!-- NavbarAdmin -->
     <?php
     include('../components/NavbarAdmin.php');
     ?>
     <!-- End NavbarAdmin -->
     <!-- Main -->
     <main class="w-full">
          <section id="greetings">
               <div class="flex flex-col items-center justify-center gap-5 h-96">
                    <h1 class="text-5xl font-bold text-black mt-52">Website Administrator Ticket</h1>
                    <div class="flex flex-col items-center justify-center">
                         <!-- <p class="text-base font-semibold">Website ini dibuat untuk memudahkan kita dalam
                  mempublikasikan buku di
                  era digital ini.</p> -->
                         <div class="flex gap-3">
                              <button
                                   class="flex flex-row items-center justify-center gap-1 font-bold transition-all ease-in-out"
                                   onclick="GotoAbout()">
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