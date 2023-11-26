<?php
include ("connection.php");

$id = $_GET['id'];
$sql  = "SELECT * FROM $table_annonces WHERE id = $id"; 
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Modifier Annonce</title> 
</head>
<body>
    <div class="cont_ajout">
        <div class="container">
            <div class="header">
                <h2>Modifier une Annonce</h2> 
            </div>
            <form class="form" id="form" method="post" action="update.php">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                <div class="form-control">
                    <label for="titre">Titre de l'Annonce</label>
                    <input type="text" id="titre" name="titre" value="<?php echo $row['titre'] ?>">
                </div>
                <div class="form-control">
                    <label for="description">Description du produit/service :</label>
                    <input type="text" id="description" name="description" value="<?php echo $row['Description'] ?>">
                </div>
                <div class="form-control">
                    <label for="prix">Prix:</label>
                    <input type="text" id="prix" name="prix" value="<?php echo $row['prix'] ?>">
                </div>
                <div class="form-control">
                    <label for="telephone">Telephone:</label>
                    <input type="text" id="telephone" name="telephone" value="<?php echo $row['telephone'] ?>">
                </div>
                <div class="form-control">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $row['email'] ?>">
                </div>
                <button type="submit"> <i class="fas fa-user-plus"></i> Modifier</button> 
            </form>
        </div>
    </div>
</body>
</html>
