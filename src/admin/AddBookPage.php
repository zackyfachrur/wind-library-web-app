<!DOCTYPE html>
<html lang="en">

<head>
     <?php include('../components/header.php') ?>
     <title>Store Web | Admin</title>
</head>

<body>
     <!-- NavbarAdmin -->
     <?php
     include('../components/NavbarAdmin.php');
     include('../collection/AddBook.php');
     ?>
     <!-- End NavbarAdmin -->
     <!-- Main -->
     <main class="flex items-center justify-center">
          <img src="../img/logo-book.png" alt="">
          <div class="flex items-center justify-center w-full">
               <form action="../db_admin/AddBook.php" method="post" class="flex flex-row items-center justify-center py-32 rounded-b-3xl px-52">
                    <div class="flex flex-col">
                         <?php for ($i = 0; $i < count($books_form["books_label"]); $i++) { ?>
                              <div class="flex gap-5 px-5 py-2">
                                   <label for="<?php echo $books_form["books_label"][$i] ?>"><i class="<?php echo $books_form["books_label_icon"][$i] ?> px-5 py-2 flex  font-bold text-white transition-all ease-in bg-red-700 border-2 border-red-700 rounded-full hover:border-red-300 hover:bg-red-600"></i></label>
                                   <input type="<?php echo $books_form["books_input_type"][$i] ?>" name="<?php echo $books_form["books_input_name"][$i] ?>" id="<?php echo $books_form["books_input_id"][$i] ?>" placeholder="<?php echo $books_form["books_input_placeholder"][$i] ?>" class="px-5 py-2 font-bold text-red-700 border-2 border-red-700 rounded-full outline-none w-72">
                              </div>
                         <?php } ?>
                    </div>

                    <button type="submit" class="flex gap-2 px-5 py-2 font-bold text-white transition-all ease-in bg-red-700 border-2 border-red-700 rounded-full hover:border-red-300 hover:bg-red-600">Submit<i class="ri-add-line"></i></button>
               </form>
          </div>
     </main>
     <!-- End Main -->
</body>

</html>