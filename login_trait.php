<?php

    include 'connection.php';

session_start();

if (isset($_POST['submit'])) {
    $conn->select_db($dbname);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $Password = $_POST['password'];

    // Fetch the hashed password from the database based on the provided email
    $select = "SELECT * FROM $table_users WHERE email = '$email' && password = '$Password'  ";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);

        if($row['role'] == 'Viewer'){

            $_SESSION['admin_name'] = $row['fullname'];
            header('location: Viewer.php');
   
         }elseif($row['role'] == 'Annoncer'){
   
            $_SESSION['user_name'] = $row['fullname'];
            header('location:Annoncer.php');
   
         }
    }

    // if ($result && mysqli_num_rows($result) > 0) {
    //     $row = mysqli_fetch_array($result);
    //     var_dump($CheckPass, $row['password']);

    //     // Use password_verify to check if the entered password is correct
    //     if (password_verify($CheckPass, $row['password'])) {
          

    //         if ($row['role'] == 'annoncer') {
    //             $_SESSION['Announcer_name'] = $row['Id'];
    //             header('location: Annoncer.php');
    //         } elseif ($row['role'] == 'viewer') {
    //             $_SESSION['Viewer_name'] = $row['Id'];
    //             header('location: Viewer.php');
    //         }
    //     } else {
    //         echo ' 1 Incorrect email or password!';
    //     }
    // } else {
    //     echo '2Incorrect email or password!';
    // }
}
$conn->close();
?>