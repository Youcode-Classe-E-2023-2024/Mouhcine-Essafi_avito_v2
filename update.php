<?php
include_once ("connection.php");

    $id = $_POST["id"];
    $titre = $_POST["title"];
    $description = $_POST["about"];
    $prix = $_POST["price"];

    $sql = "UPDATE $table_annonces SET title='$titre', about='$description', price='$prix' WHERE id = $id";

    $res = mysqli_query($conn, $sql);

    if ($res) {
        header("Location: Annoncer.php");
        exit();
    }

?>
