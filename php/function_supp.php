<?php
require 'connexion.php';
$id_form=$_GET['supp'];
$supProfile=mysql_query("DELETE FROM formation WHERE id_form='$id_form'");
header('location:supprimer.php');//redirection
?>