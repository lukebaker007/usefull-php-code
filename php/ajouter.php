.<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Hannibal</title>



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
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <script src="" type="text/javascript">
  </script>


</head>

<body class="sub_page">
  <div class="top_container ">
    <!-- header section strats -->
    <header class="header_section">
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
                  <a class="nav-link" href="index.html"><button name="button"class="call_to-btn btn_white-border">Accueil </button></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="initial.html"> <button name="button"class="call_to-btn btn_white-border"> F.initial </button> </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="continue.html"><button name="button"class="call_to-btn btn_white-border"> F.continue</button> </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="apropos.html"> <button name="button"class="call_to-btn btn_white-border"> Apropros </button> </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="contact.html"><button name="button"class="call_to-btn btn_white-border">Contact </button> </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="connexion.html"> <button name="button"class="call_to-btn btn_white-border">Connexion </button> </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="inscrit.html"><button name="button"class="call_to-btn btn_white-border"> Inscrire </button></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

  </div>
  <!-- end header section -->



  <!-- contact section -->

  <section class="contact_section ">

    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <div class="d-flex justify-content-center d-md-block">
            <h2>
              Inscription
            </h2>
          </div>
          <form action="ajout.php" method="post" name="f2">
            <div class="contact_form-container">
              <div>
                <div>
                  <input type="text" name="nom_form" placeholder="Nom de formation">
                </div>
                <div>
                  <input type="text" name="desc_form" placeholder="Description de formation">
                </div>
                <div>
                  <input type="text" name="prix" placeholder="prix ">
                </div>
                  <div>
                    <input type="text" name="duree" placeholder="duree">
                  </div>
              </div>
              <div class="mt-5">
                <button type="submit" onclick="verifier()">
                  Connecter
                </button> 
                <button type="reset">
                  Annuler
                </button>
              </div>
            </div>
        </div>
        <div class="col-md-6">
          <div class="contact_img-box">
            <img src="images/t.jfif" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>