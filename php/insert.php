<?php session_start();
include('connexion.php');
$req=mysql_query("select * from client");
$res=mysql_fetch_array($req);
$nom_cl=$_POST["nom_cl"];
$naiss_cl=$_POST["naiss_cl"];
$tel_cl=$_POST["tel_cl"];
$mail_cl=$_POST["mail_cl"];


if(empty($_POST['nom_cl']) ||empty($_POST['naiss_cl'])||empty($_POST['tel_cl'])||empty($_POST['mail_cl']))
{
    echo"<script>alert('vous devez repmlir tous les champs !!');window.location='inscrit.php'</script>";
}
else
{
$sql=("INSERT INTO client VALUES('','$nom_cl','$naiss_cl','$tel_cl','$mail_cl')");
mysql_query($sql)or die("erreur insert".mysql_error());
{
    echo"<SCRIPT>alert('Ajout avec succes!');</SCRIPT>";
    echo"<SCRIPT>window.location='afficher.php'</script>";
}
}
@mysql_close();
?>