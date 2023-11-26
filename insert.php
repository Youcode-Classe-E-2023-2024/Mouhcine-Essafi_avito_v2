<?php
    include "connection.php";
    
/**
 * Check if the form is submitted
 */
if (isset($_POST['submit'])) {
    /**
     * Get form data
     */
    session_start();
    $phone_number = $_SESSION['Announcer_phone'];
    $full_name = $_SESSION['Announcer_name'];
    $title = $_POST["title"];
    $about = $_POST["about"];
    $price = $_POST["price"];
    $img_name = $_FILES["img"]["name"];
    $img_tmp = $_FILES["img"]["tmp_name"];
    $id_user = $_SESSION['Announcer_id'];
   
    /**
     * uploaded image to the specified directory
     */
    move_uploaded_file($img_tmp, "images/" . $img_name);
    /**
     * SQL for insert data
     */
    $sql = "INSERT INTO $table_annonces (fullname, phonenumber, title, about, price, img, id_user) VALUES ('$full_name', '$phone_number', '$title', '$about', '$price', '$img_name', '$id_user')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    /**
     * Close connection
     */
    $conn->close();
} else {
    header("Location: add_annonce.php");
    exit;
}
/**
 * switch to home page after insert data
 */
header("Location: Annoncer.php");

?>
