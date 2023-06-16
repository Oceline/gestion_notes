<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>administrateur</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-light color1">
     <div class="container-fluid px-5 ">
    <a class="navbar-brand ">
    <img src="images/logo2.png" alt="logo"  class="w-50 h-50 img-fluid">
    </a>
    <button class="btn  rounded-pill btn-outline-success bg-black  text-white col-lg-2" type="submit">Création de compte administrateur</button>
      <button class="btn rounded-pill btn-outline-success bg-black text-white col-lg-2" type="submit">Création de compte parent</button>
      <button class="btn rounded-pill btn-outline-success bg-black text-white col-lg-2" type="submit">Déconnexion</button>
  </div>
</nav>
</header>

    <main>
    <section class="section_index  ">
      <div class="container-fluid row py-5">
      <h2>Veuillez creer un compte pour administrateur</h2>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <img src="images/image5.png" alt=""  class=" w-100 h-100 img-fluid" >
       </div>
        <div class="color2 col-md-6 col-sm-6 col-lg-4  rounded-5">
                <h3 class="titre font-weight-bold" >Création de compte pour administrateur</h3>
            <form method="post" action="" >
                <div class="form-group px-5">
                <label for="username">Nom:</label> <br> 
                    <input type="text" name="username" placeholder="Nom" class="form-control rounded-pill" autocomplete="off" required > <br>
                    <label for="">Prénom(s):</label> <br>
                    <input type="text" name="prenom" placeholder="prénom" class="form-control rounded-pill" autocomplete="off" required ><br>
                    <label for="">Email:</label> <br>
                    <input type="text" name="email" placeholder="email" class="form-control rounded-pill" required><br>
                    <label for="">Mot de passe</label><br>
                    <input type="password" name="mot_pass" placeholder="mot de passe" class="form-control rounded-pill" required> <br>
                    <button type="submit" class="btn btn-success">
                    <span></span>
                    Valider
                </button> <br> <br>
            </form>
        </div>
    </div>
</div>
<br>
 </section>
    </main>
    <?php include("footer.php");?>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="/javascript/javascript.js"></script>   
</body>
</html>



