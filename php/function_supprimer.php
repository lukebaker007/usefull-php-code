<?php
require 'connexion.php';
$id_cl=$_GET['supp'];
$supProfile=mysqli_query("DELETE FROM client WHERE id_cl='$id_cl'");
header('location:supprimer.php');//redirection
?>