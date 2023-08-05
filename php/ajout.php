<?php session_start();
include('connexion.php');
$req=mysql_query("select * from formation");
$res=mysql_fetch_array($req);
$nom_form=$_POST["nom_form"];
$desc_form=$_POST["desc_form"];
$prix=$_POST["prix"];
$duree=$_POST["duree"];


if(empty($_POST['nom_form']) ||empty($_POST['desc_form'])||empty($_POST['prix'])||empty($_POST['duree']))
{
    echo"<script>alert('vous devez repmlir tous les champs !!');window.location='ajouter.php'</script>";
}
else
{
$sql=("INSERT INTO formation VALUES('','$nom_form','$desc_form','$prix','$duree')");
mysql_query($sql)or die("erreur insert".mysql_error());
{
    echo"<SCRIPT>alert('Ajout avec succes!');</SCRIPT>";
    echo"<SCRIPT>window.location='afficher.php'</script>";
}
}
@mysql_close();
?>