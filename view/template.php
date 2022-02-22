<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>
<body>
        

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link <?php if($_SERVER['PHP_SELF'] === "/index.php") : ?> active <?php endif;?>" href="index.php">Accueil
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($_SERVER['PHP_SELF'] === "/sophiePHP/view/store.php") : ?> active <?php endif;?>" href="store.php">store</a>
        </li>
      </ul>
      <ul class="d-flex navbar-nav ">
        <li class="nav-item">
            <a class="nav-link <?php if($_SERVER['PHP_SELF'] === "/panier.php") : ?> active <?php endif;?>" href="panier.php"><i class="bi bi-cart2"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if($_SERVER['PHP_SELF'] === "/deconnexion.php") : ?> active <?php endif;?>" href="deconnexion.php">Déconnexion</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if($_SERVER['PHP_SELF'] === "/sophiePHP/view/connexion.php") : ?> active <?php endif;?>" href="connexion.php">Connexion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid bg-secondary">
    <h1 class="text-center"><?= $titre?></h1>
    <?=$content?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>