<?php
include("connection.php");

$id = $_GET['id'];
$sql  = "SELECT * FROM $table_annonces WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Avito.ma</title>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <style>
        /* Hide the number input arrows */
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
        }
    </style>

    <form class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg" method="POST" action="update.php" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <h2 class="text-3xl font-semibold text-gray-900 mb-8">Announcement Information</h2>

        <div class="grid grid-cols-1 gap-6">
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" value="<?php echo $row['title'] ?>" autocomplete="off" class="mt-1 p-2 w-full border rounded-md text-gray-700 focus:outline-none focus:ring focus:border-indigo-500">
            </div>

            <div>
                <label for="about" class="block text-sm font-medium text-gray-700">About</label>
                <textarea id="about" name="about" rows="3" class="mt-1 p-2 w-full border rounded-md text-gray-700 focus:outline-none focus:ring focus:border-indigo-500"><?php echo $row['about'] ?></textarea>
                <p class="mt-2 text-sm text-gray-500">Write a few sentences about your announcement.</p>
            </div>

            <div>
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="number" name="price" id="price" value="<?php echo $row['price'] ?>" autocomplete="off" class="mt-1 p-2 w-full border rounded-md text-gray-700 focus:outline-none focus:ring focus:border-indigo-500">
            </div>

            <div>
                <label for="img" class="block text-sm font-medium text-gray-700">Announcement Photo</label>
                <div class="mt-1 flex items-center">
                    <label for="file-upload" class="relative cursor-pointer bg-white border border-gray-300 p-2 rounded-md font-semibold text-indigo-600 hover:text-indigo-500">
                        <span>Upload a file</span>
                        <input id="file-upload" name="img" type="file" value="<?php echo $row['img'] ?>" class="sr-only">
                    </label>
                    <p class="pl-3">or drag and drop</p>
                </div>
                <p class="mt-2 text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
            </div>
        </div>

        <div class="mt-8 flex items-center justify-end gap-x-4">
            <a href="mes_annonces.php" class="text-sm text-gray-700 hover:text-indigo-500">Cancel</a>
            <button type="submit" name="submit" class="px-4 py-2 bg-indigo-600 text-sm font-semibold text-white rounded-md shadow-md hover:bg-indigo-500 focus:outline-none focus:ring focus:border-indigo-500">Save</button>
        </div>
    </form>

</body>
</html>
