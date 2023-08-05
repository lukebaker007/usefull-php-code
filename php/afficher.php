<html>
<head>
<title>afficher</title>
<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,600&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<body>
<div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              <img src="images/kiki.png" >
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="afficher.php"><button name="button"class="call_to-btn btn_white-border">Afficher </button></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="ajouter.php"> <button name="button"class="call_to-btn btn_white-border"> Ajouter </button> </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="supprimer.php"><button name="button"class="call_to-btn btn_white-border"> Supprimer</button> </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="modifier.php"> <button name="button"class="call_to-btn btn_white-border">Modifier</button> </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
<div id="contain">
<div id="header">
<h1>ESPACE ADMINISTRATEUR</h1>
</div>
</div>
<h2 align="center">Liste des clients</h2>
<table width="90%" align="center" border="1" bordercolor="#D8BFD8">
<tr bgcolor="#D8BFD8" align="center">
<th width="10%"><strong>Nom client</strong></th>
<th width="20%"><strong>date naisse client</strong></th>
<th width="30%"><strong>télèphone client</strong></th>
<th width="10%"><strong>mail client</strong></th>
</tr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("btp");
$query="SELECT * FROM client";
if ($result = mysql_query($query))
{
    /*récupére un tableau assocaiatif*/
while ($row = mysql_fetch_assoc($result))
{
?>
<tr>
<td><font size="+1"><strong>
<?php echo $row["nom_cl"];?></strong></font>
</td>
<td algin="justify"><font size="+1"><strong>
<?php echo $row["naiss_cl"];?></strong></font>
</td>
<td><font size="+1"><strong>
<?php echo $row["tel_cl"];?></strong></font>
</td>
<td><font size="+1"><strong>
<?php echo $row["mail_cl"];?></strong></font>
</td>
</tr>
<?php
}
mysql_free_result($result);
mysql_close ();
}
?>

</table>
<div id="contain">
<div id="header">
<h1>liste de formation</h1>
</div>
</div>
<h2 align="center">Liste de formation</h2>
<table width="90%" align="center" border="1" bordercolor="#D8BFD8">
<tr bgcolor="#D8BFD8" align="center">
<th width="10%"><strong>Nom formation</strong></th>
<th width="20%"><strong>description de formation</strong></th>
<th width="30%"><strong>prix</strong></th>
<th width="10%"><strong>duree</strong></th>
</tr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("btp");
$query="SELECT * FROM formation";
if ($result = mysql_query($query))
{
    /*récupére un tableau assocaiatif*/
while ($row = mysql_fetch_assoc($result))
{
?>
<tr>
<td><font size="+1"><strong>
<?php echo $row["nom_form"];?></strong></font>
</td>
<td algin="justify"><font size="+1"><strong>
<?php echo $row["desc_form"];?></strong></font>
</td>
<td><font size="+1"><strong>
<?php echo $row["prix"];?></strong></font>
</td>
<td><font size="+1"><strong>
<?php echo $row["duree"];?></strong></font>
</td>
</tr>
<?php
}
mysql_free_result($result);
mysql_close ();
}
?>

</table>
</body>
</html>