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
          <!-- Start Contact -->
          <section class="flex flex-col items-center justify-center w-full h-full">
               <div class="flex flex-col items-center justify-center gap-3 h-72">
                    <h1 class="mt-10 text-4xl font-bold text-black">Contact <span
                              class="px-2 text-white bg-black rounded-full">Wind
                              Library</span>
                    </h1>
               </div>


               <div
                    class="flex items-center justify-center w-full bg-black border-2 border-black rounded-full container-sm h-72 drop-shadow-xl">
                    <form action="ContactPage.php" method="post" onsubmit="sendMessage()"
                         class="flex flex-row items-center justify-center py-32 rounded-b-3xl px-52">
                         <div class="flex flex-col">
                              <div class="flex gap-5 px-5 py-2">
                                   <!-- Name -->
                                   <label for="username"><i
                                             class="flex px-5 py-2 font-bold text-black transition-all ease-in bg-white border-2 border-black ri-user-fill rounded-xl "></i></label>
                                   <input type="text" name="username" id="username" placeholder="Your Name" required
                                        class="px-5 py-2 font-bold text-black border-2 border-black outline-none rounded-xl w-72">
                                   <!-- End Name -->
                              </div>

                              <div class="flex gap-5 px-5 py-2">
                                   <!-- Email -->
                                   <label for="email"><i
                                             class="flex px-5 py-2 font-bold text-black transition-all ease-in bg-white border-2 border-black ri-mail-fill rounded-xl "></i></label>
                                   <input type="email" name="email" id="email" placeholder="Your Email" required
                                        class="px-5 py-2 font-bold text-black border-2 border-black outline-none rounded-xl w-72">
                                   <!-- End Email -->
                              </div>

                              <div class="flex gap-5 px-5 py-2">
                                   <!-- Message-->
                                   <label for="message"><i
                                             class="flex px-5 py-2 font-bold text-black transition-all ease-in bg-white border-2 border-black ri-message-3-fill rounded-xl "></i></label>
                                   <textarea name="message" id="message" placeholder="Your Messages" required
                                        class="px-5 py-2 overflow-y-hidden font-bold text-black border-2 border-black outline-none rounded-xl w-72"></textarea>
                                   <!-- End Message-->
                              </div>
                         </div>

                         <button type="submit"
                              class="flex gap-2 px-5 py-2 font-bold text-black transition-all ease-in bg-white border-2 border-black rounded-xl">Submit<i
                                   class="ri-add-line"></i></button>
                    </form>

                    <img src="../img/shapes-5.png" class="absolute -z-20 w-full" alt="Shapes Contact">
               </div>
          </section>
          <!-- End Contact -->


          <!-- Footer -->
          <?php
          include('../components/Footer.php');
          ?>
          <!-- End Footer -->
     </main>
     <!-- End Content -->

     <!-- JS -->
     <script>
          function sendMessage() {
               window.open(
                    `https://wa.me/6287703577988?text=Nama : ${username.value} %3A Email : ${email.value} %3A Message : ${message.value}`,
                    "_blank"
               );
          }
     </script>
</body>

</html>