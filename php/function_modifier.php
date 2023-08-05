
<?php session_start();
mysql_connect("127.0.0.1","root","");
mysql_select_db("btp");

$req=mysql_query("select * from formation");
$res=mysql_fetch_array($req);
$id_form=$_POST['id_form'];
$nom_form=$_POST['nom_form'];
$desc_form=$_POST['desc_form'];
$prix=$_POST['prix'];
$duree=$_POST['duree'];

if(empty($_POST['id_form']) ||empty($_POST['nom_form']) ||empty($_POST['desc_form']) ||empty($_POST['prix']) ||empty($_POST['duree']))
{ 
    echo "<script>alert('VSous devez remplir au moin un champs ou annuler l'opération !!');window.location='modifier_formation.php'</script>";
}
elseif (!empty($_POST['id_form']) || !empty($_POST['nom_form'])|| !empty($_POST['desc_form']) || !empty($_POST['prix']) || !empty($_POST['duree']))
{
$update="UPDATE formation SET id_form='$id_form',nom_form='$nom_form',desc_form='$desc_form',prix='$prix',duree='$duree' WHERE id_form='id_form'";
mysql_query($update);
echo "<script>alert('Modification effectué avec succés ');window.location='afficher.php'</script>";
}
@mysql_close();
?>