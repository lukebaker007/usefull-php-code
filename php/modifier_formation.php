<?php
session_start();
mysqli_connect("localhost","root","");
mysqli_select_db("btp");
$req=mysqli_query("select * FROM formation");
$res=mysqli_fetch_array($req);
$id_form=$_POST['id_form'];
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Modification</title>
    <meta charset="utf-8" />
    <meta name="viwport" content="width=device-width, initial-scale=1" />
    <style tupe="text/css"></style>
    <link rel="stylesheet" href="stylemodif.css">
</head>
<body>
    <div id="container">
        <form action="function_modifier.php" method="post">
            <fieldset>
                <legend>Modifier les données</legend>
                <label><font size="+1" face="Georgia, Times New Roman, Times, Serif">id_Formation</font></label>
                <input type="text" name="id_form" required readonly="readonly" value="<?php mysql_connect("127.0.0.1","root","");
                mysqli_select_db("btp");
                $req="SELECT * FROM formation where id_form=$id_form";
                $res=mysqli_query($req);$A=mysqli_fetch_array($res);
                echo $A['id_form']; ?>
                <?php mysqli_free_result ($res); mysqli_close (); ?>">

                <label><font size="+1" face="Georgia, Times New Roman, Times, Serif">nom Formation</font></label>
                <input type="text" name="nom_form" required  value="<?php mysqli_connect("127.0.0.1","root","");
                mysqli_select_db("btp");
                $req="SELECT * FROM formation where id_form=$id_form";
                $res=mysqli_query($req);$A=mysqli_fetch_array($res);
                echo $A['nom_form']; ?>
                <?php mysqli_free_result ($res); mysqli_close (); ?>">

                <label><font size="+1" face="Georgia, Times New Roman, Times, Serif">Description</font></label>
                <input type="text" name="desc_form" required  value="<?php mysqli_connect("127.0.0.1","root","");
                mysqli_select_db("btp");
                $req="SELECT * FROM formation where id_form=$id_form";
                $res=mysqli_query($req);$A=mysqli_fetch_array($res);
                echo $A['desc_form']; ?>
                <?php mysqli_free_result ($res); mysqli_close (); ?>">

                <label><font size="+1" face="Georgia, Times New Roman, Times, Serif">Prix Formation</font></label>
                <input type="text" name="prix" required  value="<?php mysqli_connect("127.0.0.1","root","");
                mysqli_select_db("btp");
                $req="SELECT * FROM formation where id_form=$id_form";
                $res=mysqli_query($req);$A=mysqli_fetch_array($res);
                echo $A['prix']; ?>
                <?php mysqli_free_result ($res); mysqli_close (); ?>">

                <label><font size="+1" face="Georgia, Times New Roman, Times, Serif">Durée</font></label>
                <input type="text" name="duree" required  value="<?php mysqli_connect("127.0.0.1","root","");
                mysqli_select_db("btp");
                $req="SELECT * FROM formation where id_form=$id_form";
                $res=mysqli_query($req);$A=mysqli_fetch_array($res);
                echo $A['duree']; ?>
                <?php mysqli_free_result ($res); mysqli_close (); ?>">
                <input type="submit" name="submit" value="MODIFIER" class="btn">
                <input type="reset" name="reset" value="ANNULER" class="btn">
            </fieldset>
        </form>
    </div>
</body>
</html>