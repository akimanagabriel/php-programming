<?php
// read data from html form and save it to the database
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  extract($_POST);
  // $names $address $gender
  $sql = "INSERT INTO `students`(`names`, `address`) VALUES ('$names','$address')";
  require "./conn.php";
  $conn->query($sql);

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script src="./tailwindcss.js"></script>
</head>

<body class="flex justify-center items-center min-h-screen bg-gray-200 dark:bg-gray-900 px-10">
  <div>
    <h1 class="text-gray-500 text-2xl uppercase tracking-widest">
      User management
    </h1>
    <a href="read.php">
      <button class="py-2 px-5 bg-indigo-800 rounded mt-10 text-white">
        Get all users
      </button>
    </a>

    <div class="p-20 rounded-xl bg-gray-100 dark:bg-gray-800 shadow mt-10 text-slate-400">
      <p class="mb-10 text-xl">Fill the forms to create a new user</p>

      <form action="" method="post" class="grid gap-5">
        <div class="grid">
          <label for="">Names</label>
          <input class="py-2 px-5 outline-none border rounded dark:bg-gray-700 dark:border-gray-600 " type="text"
            name="names" />
        </div>

        <div class="grid">
          <label for="">Address</label>
          <input class="py-2 px-5 outline-none border rounded dark:bg-gray-700 dark:border-gray-600 " type="text"
            name="address" />
        </div>

        <div class="flex gap-3 items-center>
            <label for=" male">Male </label>
          <input type="radio" name="gender" id="male" checked />

          <label for="female">Female </label>
          <input type="radio" name="gender" id="female" />
        </div>

        <div>
          <button class="py-2 w-full bg-indigo-800 uppercase rounded text-white" type="submit">Save user</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>