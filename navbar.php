<?php
session_start();
?>
<div class="bg-blue-800 p-4 w-full animate-pulse flex justify-end z-10">
    <a href="nnonces.php" class="text-white"><?php echo "Accueil"  ?></a>
    <a href="list_user.php" class="text-white"><?php if($_SESSION['user_type'] == 'admin'){echo "all users";}  ?></a>
    <a href="mes_annonces.php" class="text-white"><?php if($_SESSION['user_type'] == 'Annoncer'){echo "Mes annonces";}  ?></a>
    <a href="add_annonce.php" class="text-white"><?php if($_SESSION['user_type'] == 'Annoncer' || $_SESSION['user_type'] == 'admin'){echo "Ajouter une annonce";} ?></a>
    <a href="edit_profile.php" class="text-white"><?php if($_SESSION['user_type'] == 'admin'){ echo "edit profile";} ?></a>
    <a href="logout.php" class="text-white"><?php echo "Se déconnecter"; ?></a>
</div>
