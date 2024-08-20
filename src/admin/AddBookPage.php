<!DOCTYPE html>
<html lang="en">

<head>
     <?php include('../components/header.php') ?>
     <title>Store Web | Admin</title>
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
     <main class="flex items-center justify-center w-full ml-96">
          <img src="../img/logo-book.png" alt="">
          <div class="flex items-center justify-center w-full">
               <form action="./db/AddBook.php" method="post"
                    class="flex flex-row items-center justify-center py-32 rounded-b-3xl px-52">
                    <div class="flex flex-col">
                         <div class="flex gap-5 px-5 py-2" id="book_tiket">
                              <!-- Books Tiket -->
                              <label for="tiket_buku"><i
                                        class="flex px-5 py-2 font-bold text-white transition-all ease-in bg-black border-2 border-black ri-ticket-line rounded-xl "></i></label>
                              <input type="text" name="tiket_buku" id="tiket_buku" placeholder="Your Books Ticket"
                                   class="flex flex-row px-5 py-2 font-bold text-black border-2 border-black outline-none rounded-xl w-72 cursor-not-allowed"
                                   required readonly>
                              <!-- End Books Tiket -->
                         </div>

                         <div class="flex gap-5 px-5 py-2" id="book_name">
                              <!-- Books Name -->
                              <label for="nama_buku"><i
                                        class="flex px-5 py-2 font-bold text-white transition-all ease-in bg-black border-2 border-black ri-book-2-line rounded-xl "></i></label>
                              <input type="text" name="nama_buku" id="nama_buku" placeholder="Your Books Name"
                                   class="px-5 py-2 font-bold text-black border-2 border-black outline-none rounded-xl w-72"
                                   required>
                              <!-- End Books Name -->
                         </div>
                         <div class="flex gap-5 px-5 py-2" id="book_release">
                              <!-- Books Release -->
                              <label for="tanggal_rilis"><i
                                        class="flex px-5 py-2 font-bold text-white transition-all ease-in bg-black border-2 border-black ri-calendar-2-line rounded-xl "></i></label>
                              <input type="date" name="tanggal_rilis" id="tanggal_rilis"
                                   class="px-5 py-2 font-bold text-black border-2 border-black outline-none rounded-xl w-72"
                                   required>
                              <!-- End Books Release -->
                         </div>

                         <div class="flex gap-5 px-5 py-2" id="book_category">
                              <!-- Books Category -->
                              <label for="kategori_buku"><i
                                        class="flex px-5 py-2 font-bold text-white transition-all ease-in bg-black border-2 border-black ri-ticket-line rounded-xl "></i></label>
                              <div class="flex flex-col items-center justify-center">

                                   <ul class="flex flex-col gap-1 px-3 py-1 font-bold text-black bg-white border-2 border-black w-72 rounded-xl bottom-40"
                                        id="show-categories">
                                        <div class="flex flex-row justify-between gap-2">
                                             <li class="flex gap-2"><input type="radio" name="kategori_buku" id="komik"
                                                       value="komik" onchange="radioInput(303)" required><label
                                                       for="komik">Komik</label>
                                             </li>
                                             <li class="flex gap-2"><input type="radio" name="kategori_buku"
                                                       value="kamus" id="kamus" onchange="radioInput(404)"
                                                       required><label for="kamus">Kamus</label>
                                             </li>
                                             <li class="flex gap-2"><input type="radio" name="kategori_buku"
                                                       value="novel" id="novel" onchange="radioInput(505)"
                                                       required><label for="novel">Novel</label>
                                             </li>
                                        </div>
                                        <div class="flex flex-row justify-between gap-2">
                                             <li class="flex gap-2"><input type="radio" name="kategori_buku"
                                                       value="majalah" id="majalah" onchange="radioInput(606)"
                                                       required><label for="majalah">Majalah</label>
                                             </li>
                                             <li class="flex gap-2"><input type="radio" name="kategori_buku"
                                                       value="digital" id="digital" onchange="radioInput(707)"
                                                       required><label for="digital">Digital</label>
                                             </li>
                                             <li class="flex gap-2"><input type="radio" id="manga" name="kategori_buku"
                                                       value="manga" onchange="radioInput(808)" required><label
                                                       for="manga">Manga</label>
                                             </li>
                                        </div>
                                   </ul>
                              </div>
                              <!-- End Books Category -->
                         </div>



                         <div class="flex gap-5 px-5 py-2">
                              <!-- Books Desc -->
                              <label for="deskripsi_buku"><i
                                        class="flex px-5 py-2 font-bold text-white transition-all ease-in bg-black border-2 border-black ri-blogger-line ri-ticket-line rounded-xl "></i></label>
                              <textarea name="deskripsi_buku" id="deskripsi_buku"
                                   class="px-5 py-2 overflow-y-hidden font-bold text-black border-2 border-black outline-none rounded-xl w-72"
                                   rows="8"></textarea>
                              <!-- End Books Desc -->
                         </div>


                    </div>

                    <div class="flex flex-col gap-2">

                         <button type="submit"
                              class="flex gap-2 px-5 py-2 font-bold text-white transition-all ease-in bg-black border-2 border-black rounded-xl ">Submit<i
                                   class="ri-add-line"></i></button>
                         <button type="button"
                              class="flex gap-2 px-5 py-2 font-bold text-black transition-all ease-in bg-white border-2 border-black rounded-xl"
                              onclick="window.location.assign('./BookPage.php')">Cancel<i
                                   class="ri-subtract-line"></i></button>
                    </div>
               </form>
          </div>
     </main>
     <!-- End Main -->

     <!-- JS -->
     <script>
          const bookTiket = document.getElementById('tiket_buku');
          const radioInput = (p) => {
               const bookTiketValue = bookTiket.value;
               const newValue = `${p}`;
               if (bookTiketValue.includes(newValue)) {
                    bookTiket.value = bookTiketValue.replace(newValue, '');
                    bookTiket.classList.remove('cursor-not-allowed');
                    bookTiket.setAttribute("readonly", true);
               } else {
                    bookTiket.classList.add('cursor-text');
                    bookTiket.value = newValue;
                    bookTiket.removeAttribute("readonly");
               }
          }
     </script>
</body>

</html>