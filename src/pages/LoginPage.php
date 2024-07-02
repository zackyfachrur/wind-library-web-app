<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/style.css">
   <title>Store Web | Login</title>
</head>

<body>
   <main class="flex items-center justify-center h-screen m-auto ">
      <div class="flex flex-col items-center justify-center m-auto text-white bg-red-700 rounded-lg h-96 w-96">
         <h1 class="pt-10 text-xl font-bold">Login into your account</h1>
         <form action="../db/Login.php" method="post" class="flex flex-col justify-center gap-1 m-auto font-bold text-black w-60">
            <input type="text" id="Name" name="name" class="px-5 text-sm font-bold transition-all ease-in border-2 rounded-lg outline-none hover:translate-x-1" placeholder="Type your name" required>
            <label for="Email" class="text-white">Email</label>
            <input type="Email" id="Email" name="email" class="px-5 text-sm font-bold transition-all ease-in border-2 rounded-lg outline-none hover:translate-x-1" placeholder="Type your email" required>
            <label for="Password" class="text-white">Password</label>
            <input type="Password" id="Password" name="pass" class="px-5 text-sm font-bold transition-all ease-in border-2 rounded-lg outline-none hover:translate-x-1" placeholder="Type your password" required>
            <label for="ConfirmPassword" class="text-white">Confirm Password</label>
            <input type="password" id="ConfirmPassword" name="confpass" class="px-5 text-sm font-bold transition-all ease-in border-2 rounded-lg outline-none hover:translate-x-1" placeholder="Confirm your password" required>
            <button type="submit" class="self-center w-32 mt-5 text-sm font-bold text-black transition-all ease-in bg-white rounded-full hover:translate-x-1 ">Submit</button>
         </form>
      </div>
   </main>
</body>

</html>