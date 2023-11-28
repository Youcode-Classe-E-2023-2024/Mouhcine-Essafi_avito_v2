<?php

    include 'connection.php';

session_start();

if (isset($_POST['submit'])) {
    $conn->select_db($dbname);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $CheckPass = $_POST['password'];

    // Fetch the hashed password from the database based on the provided email
    $select = "SELECT * FROM $table_users WHERE email = '$email'";
    $result = mysqli_query($conn, $select);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        // Use password_verify to check if the entered password is correct
        if (password_verify($CheckPass, $row['password'])) {

            if ($row['role'] == 'Annoncer') {
                $_SESSION['user_type'] = $row['role'];
                $_SESSION['session_id'] = $row['id'];
                $_SESSION['session_name'] = $row['fullname'];
                $_SESSION['session_phone'] = $row['phone'];
                header('location: Annoncer.php');
            } elseif ($row['role'] == 'Viewer') {
                $_SESSION['user_type'] = $row['role'];
                $_SESSION['Viewer_name'] = $row['id'];
                header('location: Viewer.php');
            } elseif ($row['role'] == 'admin') {
                $_SESSION['session_name'] = $row['fullname'];
                $_SESSION['session_phone'] = $row['phone'];
                $_SESSION['user_type'] = $row['role'];
                $_SESSION['session_id'] = $row['id'];
                header('location: Annoncer.php');
            }
        } else {
            echo ' 1 Incorrect email or password!';
            header('location: register_form.php');
        }
    } else {
        echo '2Incorrect email or password!';
        header('location: register_form.php');
    }
}
$conn->close();
?>