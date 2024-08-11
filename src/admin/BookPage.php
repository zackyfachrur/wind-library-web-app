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
     include('../db_admin/Book.php')
     ?>
     <!-- End NavbarAdmin -->
     <!-- Main -->
     <main>
          <div class="container flex flex-col items-center justify-center w-full h-full">
               <table class="table border-2 table-striped">
                    <tr class="font-bold text-white border-2 ">
                         <th class="flex px-5 py-2"><i class="pr-2 ri-ticket-line"></i>Tiket Buku</th>
                         <th class="px-5 py-2"><i class="pr-2 ri-book-2-line"></i>Nama Buku</th>
                         <th class="px-5 py-2"><i class="pr-2 ri-blogger-line"></i>Deksripsi Buku</th>
                         <th class="px-5 py-2"><i class="pr-2 ri-calendar-2-line"></i>Tanggal Rilis</th>
                         <th></th>
                         <th></th>
                    </tr>
                    <?php foreach ($results as $result) { ?>
                    <tr class="font-bold text-white border-2">
                         <td class="px-5 py-2"><?php echo $result['tiket_buku'] ?></td>
                         <td class="px-5 py-2"><?php echo $result['nama_buku'] ?></td>
                         <td class="px-5 py-2"><?php echo $result['deskripsi_buku'] ?></td>
                         <td class="px-5 py-2"><?php echo $result['tanggal_rilis'] ?></td>
                         <td><button
                                   class="px-6 transition-all ease-in bg-white border-2 border-red-700 rounded-full text-red-700 cursor-pointer hover:translate-x-1"
                                   onclick="window.location.assign('EditPage.php?id=<?php echo $result['tiket_buku'] ?>')">Edit</button>
                         </td>
                         <td><button
                                   class="px-6 transition-all ease-inborder-2 border-red-700 bg-red-700 rounded-full text-white cursor-pointer hover:translate-x-1"
                                   onclick="window.location.assign('../db_admin/DeleteBook.php?id=<?php echo $result['tiket_buku'] ?>')">Delete</button>
                         </td>
                    </tr>
                    <?php } ?>
               </table>
          </div>
     </main>
     <!-- End Main -->


</body>
</body>

</html>