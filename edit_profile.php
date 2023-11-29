<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit profile</title>
</head>

<body>

    <?php 
    include('connection.php');
    include 'navbar.php';

    $user_id = $_SESSION['session_id'];
    
    //updating data
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $user_id = $_SESSION['session_id'];
    
        $query = "UPDATE $table_users SET fullname='$name', email='$email' WHERE id=$user_id";
        $result = mysqli_query($conn, $query);
        header('location: logout.php');
    }
    
    ?>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">User profile</h1>
        </div>
    </header>
    <main>
        <?php

        $user_id = $_SESSION['session_id'];
        $sql = "SELECT * FROM $table_users WHERE id = $user_id";
        $result = mysqli_query($conn, $sql);


        $row = mysqli_fetch_assoc($result);

            $name = $row['fullname'];
            $email = $row['email'];
            $phone = $row['phone'];      
            $user_type = $row['role'];

        ?>

<div class="mx-auto max-w-xl py-16 sm:px-12 lg:px-16">
    <div class="bg-white overflow-hidden shadow rounded-lg p-6">
        <form method="POST">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                    <input id="name" name="name" type="text" value="<?= $name ?>" class="mt-1 p-2 w-full border rounded-md">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                    <input id="email" name="email" type="text" value="<?= $email ?>" class="mt-1 p-2 w-full border rounded-md">
                </div> 
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-600">Phone</label>
                    <input id="phone" name="phone" type="text" value="<?= $phone ?>" class="mt-1 p-2 w-full border rounded-md">
                </div>
                <div class="col-span-2 text-center">
                    <p class="text-sm leading-5 font-medium text-indigo-600"><?= $user_type ?></p>
                </div>
            </div>
            <div class="mt-6 text-center">
                <button type="submit" name="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md">Update</button>
            </div>
        </form>
    </div>
</div>


    </main>
    </div>
</body>

</html>