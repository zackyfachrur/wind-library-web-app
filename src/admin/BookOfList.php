<?php
include("../admin/db/Connection.php");

$kategori = $_POST['kategori_buku'];
if (empty($kategori)) {
     header('Location:BookPage.php');
     exit;
} else {
     $tampilkan_novel = mysqli_query($connection, "SELECT * FROM tabel_buku WHERE kategori_buku='$kategori'");
     mysqli_query($connection, "ALTER TABLE tabel_buku AUTO_INCREMENT = 1");
     $results_novel = mysqli_fetch_all($tampilkan_novel, MYSQLI_ASSOC);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
     <?php include('../components/header.php') ?>
     <title>Store Web | Contact</title>
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
          <div class="container items-center justify-center w-full h-full">
               <table class="table border-2 table-striped table-borderless table-hover table-sm">
                    <thead>
                         <tr>
                              <th class="w-32"> Tiket Buku</th>
                              <th class="w-52">Nama Buku</th>
                              <th class="w-72">Deksripsi Buku</th>
                              <th class="w-52">Tanggal Rilis
                              </th>
                              <th class="w-32">Kategori Buku
                              </th>
                              <th class="w-52"></th>
                         </tr>
                    </thead>
                    <tbody class="table-group-divider">
                         <?php foreach ($results_novel as $result) { ?>
                              <tr class="font-bold text-white border-2 ">
                                   <td><?php echo $result['tiket_buku'] ?></td>
                                   <td><?php echo $result['nama_buku'] ?></td>
                                   <td><?php echo $result['deskripsi_buku'] ?></td>
                                   <td><?php echo $result['tanggal_rilis'] ?></td>
                                   <td class="capitalize"><?php echo $result['kategori_buku'] ?></td>
                                   <td><button
                                             class="px-6 text-black transition-all ease-in bg-white border-2 border-black rounded-full cursor-pointer hover:translate-x-1"
                                             onclick="window.location.assign('EditPage.php?id=<?php echo $result['tiket_buku'] ?>')">Edit</button>

                                        <button
                                             class="px-6 text-white transition-all bg-black border-black rounded-full cursor-pointer ease-inborder-2 hover:translate-x-1"
                                             onclick="showPopUp()">Delete</button>
                                   </td>
                              </tr>
                         <?php } ?>

                         <div class="fixed top-0 bottom-0 right-0 flex-col items-center self-center justify-center hidden text-black bg-white border-2 border-black w-96 h-52 rounded-l-xl"
                              id="popUp">
                              <h1 class="text-4xl font-bold">Information</h1>
                              <p class="text-xl font-bold">Anda yakin ingin menghapus data ?</p>
                              <div class="flex flex-row gap-2 pt-2">
                                   <button
                                        class="px-3 py-1 font-bold text-white bg-black border-2 border-black rounded-xl hover:translate-x-1"
                                        onclick="confirmPopUp()">Confirm</button>
                                   <button
                                        class="px-3 py-1 font-bold text-black bg-white border-2 border-black rounded-xl hover:translate-x-1"
                                        onclick="showPopUp()">Cancel</button>
                              </div>
                         </div>
                    </tbody>
               </table>
          </div>
     </main>
     <!-- End Main -->

     <!-- JS -->
     <script>
          const popUpConfirm = document.getElementById('popUp');

          const showPopUp = () => {
               if (popUpConfirm.classList.contains('hidden')) {
                    popUpConfirm.classList.add('flex');
                    popUpConfirm.classList.remove('hidden');
               } else {
                    popUpConfirm.classList.add('hidden');
                    popUpConfirm.classList.remove('flex');
               }
          }

          const confirmPopUp = () => {
               window.location.assign('./db/DeleteBook.php?id=<?php echo $result['tiket_buku'] ?>')
          }
     </script>

</body>
</body>

</html>