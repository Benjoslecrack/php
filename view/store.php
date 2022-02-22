<?php

ob_start();

require '../entity/MusiqueEntity.php';
require '../repository/MusiqueRepository.php';

require '../entity/CategorieEntity.php';
require '../repository/CategorieRepository.php';

require '../entity/ArtisteEntity.php';
require '../repository/ArtisteRepository.php';

$musiqueRepository = new MusiqueRepository;
$musiqueRepository->chargementMusiques();

$categorieRepository = new CategorieRepository;
$categorieRepository->chargementCategories();

$artisteRepository = new ArtisteRepository;
$artisteRepository->chargementartistes();

?>

<div class="container">
    <div class="row mx-auto justify-content-center">
        <?php
            $categories = $categorieRepository->getCategories();
            foreach($categories as $categorie):
        ?>
        <div class="btn-group col-md-2" role="group" aria-label="Button group with nested dropdown">
           <a href="rap.php"><button type="button" class="btn btn-dark"><?=$categorie->getNomCat()?></button></a>
            <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href=""></a>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>

<div class="container">
    <div class="row text-center mx-auto justify-content-center">
        <?php
            $musiques = $musiqueRepository->getMusiques();
            foreach($musiques as $musique) :
        ?>
        <div class="card mt-5" style="width: 18rem;">
        <img src="../images/<?=$musique->getImage()?>" class="card-img-top" alt="2pac">
            <div class="card-body">
                <h5 class="card-title"><?=$musique->getTitre()?></h5>
                <p><?=$musique->getDescription()?></p>
                <span>Prix : <?=$musique->getPrix()?> €</span><br>
                <a href="#" class="btn btn-secondary mt-2">Ajouter au panier <i class="bi bi-cart-plus"></i></a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php

$content = ob_get_clean();
$titre = "musiques";
require "template.php";
?>