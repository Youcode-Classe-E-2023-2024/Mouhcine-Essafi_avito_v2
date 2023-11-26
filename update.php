<?php
include_once ("creation.php");

    $id = $_POST["id"];
    $titre = $_POST["titre"];
    $description = $_POST["description"];
    $prix = $_POST["prix"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];

    $sql = "UPDATE $table_annonces SET title='$titre', about='$description', price=$prix' WHERE id=$id";

    $res = mysqli_query($conn, $sql);

    if ($res) {
        header("Location: Annoncer.php");
        exit();
    }

?>
