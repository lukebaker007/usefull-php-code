<?php session_start();
include('connexion.php');
$req=mysql_query("SELECT * FROM admin");
$login=$_POST['login'];
$pass=$_POST['pass'];
if((empty($_POST['login']))||(empty($_POST['pass'])))
{
    echo "<script>alert('vous devez remplir tous les champs SVP' !!);
    window.location='authentification.php'</script>";
}
$req1=mysql_query("select * from admin where login='".$login."'");
$res1=mysql_fetch_array($req1);
$req2=mysql_query("select * from admin where pass='".$pass."'");
$res2=mysql_fetch_array($req2);
if(($res1=="")||($res2==""))
{
    echo"<script>alert('nom ou mot passe introuvable');
    window.location='authentification.php'</script>";
}
else
{
    echo"<script>window.location='afficher.php'</script>";
}
?>