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
    <h1>ESPACE ADMINISTRATEUR<h1>
</div>
<div id="nav">
    <ul>
        <li><a href="afficher.php"><span>AFFICHER<span> </a></li>
        <li><a href="formation.php"><span>AJOUTER<span> </a></li>
        <li><a href="supprimer.php"><span>SUPPRIMER<span></a></li>
        <li><a href="modifier.php"><span>MODIFIER<span></a></li>
    </ul>
</div>
</div>
<div id="container">
    <form name="" action="modifier_formation.php" method="post">
        <fieldset>
            <legend>Veuillez introduire l'identifiant:</legend>
            <label for="id_form">I dentifiant formation</label>
            <input type="text" name="id_form" placeholder="saisir l'identifiant de la formation">
            <input type="submit" value="Envoyer"/>
            <input type="reset" value="Annuler"/>
        <fieldset>
    </form>
</div>
</body>
</html>