<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>inscription</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-light color1">
     <div class="container-fluid px-5 ">
    <a class="navbar-brand ">
    <img src="images/logo2.png" alt="logo"  class="w-50 h-50 img-fluid">
    </a>
      <button class="btn a rounded-pill btn-outline-success   text-white col-lg-2" type="submit">Inscrire un élève</button>
      <button class="btn a rounded-pill btn-outline-success  text-white col-lg-2" type="submit">Liste des élèves</button>
      <button class="btn a rounded-pill btn-outline-success  text-white col-lg-2" type="submit">Déconnexion</button>
  </div>
</nav>
</header>

    <main>
    <section class="section_index  ">
      <div class="container-fluid row py-5">
        <div class="container col-lg-6 col-md-6 col-sm-6">
         <h2>Veuillez enregistrer les informations de l'élève</h2>
          <img src="images/image3.png" alt=""  class=" w-100 h-100 img-fluid" >
       </div>
        <div class="container color2 col-md-6 col-sm-6 col-lg-4 px-5 mt-5 pt-2 rounded-5">
                <h2 class="titre font-weight-bold" >Informations de l'élève</h2> <br>
            <form method="post" action="" >
                <div class="form-group ">
                <label for="username">Nom:</label> <br> 
                    <input type="text" name="username" placeholder="Nom" class="form-control rounded-pill" autocomplete="off" required >
                    <label for="">Prénom(s):</label> <br>
                    <input type="text" name="prenom" placeholder="prénom" class="form-control rounded-pill" autocomplete="off" required >
                    <label for="">Date de naissance:</label> <br>
                    <input type="date" name="date_naissance" placeholder="Nom" class="form-control rounded-pill" autocomplete="off" required>
                    <label for="">Genre:</label><br>
                    <select class="" name="genre"  class="form-control rounded-pill border" autocomplete="off" required> <br>
                        <option value="" selected hidden> sélectioner</option>
                        <option value="Féminin">Féminin</option>
                        <option value="Féminin">Masculin</option>
                    </select> <br>
                    <label for="">Lieu de naissance:</label> <br>
                    <input type="text" name="lieu_naissance" placeholder="Lieu_naissance" class="form-control rounded-pill" required>
                    <label for="">Classe:</label><br>
                    <input type="text" name="classe" placeholder="classe" class="form-control rounded-pill" required> 
                    <label for="">Nom du tuteur:</label> <br>
                    <input type="text" name="tuteur" placeholder="tuteur" class="form-control rounded-pill" required> <br>
                    <button type="submit" class="btn bg-primary b btn-success">
                    <span></span>
                    Enregistrer
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



