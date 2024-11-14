<?php
include "conn.php";
$sql = "SELECT * FROM students";
$results = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Students</title>
    <script src="./tailwindcss.js"></script>

</head>

<body class="flex justify-center items-center min-h-screen bg-gray-200 dark:bg-gray-900 px-10 text-gray-500 ">
    <div>
        <h1 class="text-2xl uppercase tracking-widest">All registered Students</h1>
        <a href="/">
            <button class="py-5 text-red-500" >Back</button>
        </a>
        <table>
            <thead class="border">
                <tr class="border">
                    <th class="border px-4">#</th>
                    <th class="border px-4">Names</th>
                    <th class="border px-4">Address</th>
                    <th class="border px-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $results->fetch_object()) {
                    ?>
                    <tr class="border">
                        <td class="border px-4"> <?php echo $row->id ?> </td>
                        <td class="border px-4"> <?php echo $row->names ?> </td>
                        <td class="border px-4"> <?php echo $row->address ?> </td>
                        <td>
                            <div>
                                <a href="#"> <button class="px-6  text-red-500">delete</button> </a>
                                <a href="#"> <button class="px-6  text-green-500">Update</button> </a>
                            </div>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>