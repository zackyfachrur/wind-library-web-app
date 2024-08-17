<!DOCTYPE html>
<html lang="en">

<head>
     <?php include('../components/header.php') ?>
     <title>Store Web | Contact</title>
</head>

<body>
     <!-- NavbarAdmin -->
     <?php
     include('../components/NavbarAdmin.php');
     include('./db/Book.php')
     ?>
     <!-- End NavbarAdmin -->
     <!-- Main -->
     <main class="w-full">
          <div class="container items-center justify-center w-full h-full">
               <table class="table border-2 table-striped table-borderless table-hover table-sm">
                    <thead>
                         <tr>
                              <th class="w-32"> Tiket Buku</th>
                              <th class="w-52">Nama Buku</th>
                              <th class="w-72">Deksripsi Buku</th>
                              <th class="w-52">Tanggal Rilis
                              </th>
                              <th class="w-52"></th>
                         </tr>
                    </thead>
                    <tbody class="table-group-divider">
                         <?php foreach ($results as $result) { ?>
                         <tr class="font-bold text-white border-2 ">
                              <td><?php echo $result['tiket_buku'] ?></td>
                              <td><?php echo $result['nama_buku'] ?></td>
                              <td><?php echo $result['deskripsi_buku'] ?></td>
                              <td><?php echo $result['tanggal_rilis'] ?></td>
                              <td><button
                                        class="px-6 text-black transition-all ease-in bg-white border-2 border-black rounded-full cursor-pointer hover:translate-x-1"
                                        onclick="window.location.assign('EditPage.php?id=<?php echo $result['tiket_buku'] ?>')">Edit</button>

                                   <button
                                        class="px-6 text-white transition-all bg-black border-black rounded-full cursor-pointer ease-inborder-2 hover:translate-x-1"
                                        onclick="window.location.assign('./db/DeleteBook.php?id=<?php echo $result['tiket_buku'] ?>')">Delete</button>
                              </td>
                         </tr>
                         <?php } ?>
                    </tbody>
               </table>
          </div>
     </main>
     <!-- End Main -->


</body>
</body>

</html>