<?php

    require_once("../private/config.php");
    $titre = 'Détails de votre série';
    require __DIR__ . '/../private/header.php';

?>
    <h2>Ajouter une nouvelle saison :</h2>
    <div class="ajout_saison">
        <?php include '../private/forms.php' ?>
    </div>
    <div class="series_container">
        <h2 class="text-4xl font-bold m-3">Liste des saisons</h2>
        <div class="grid grid-cols-3 gap-4 m-3 justify-items-center">
            <div class="card bg-base-100 shadow-sm lg:w-100">
                <figure>
                    <img src="../assets/vignette_test.jpg" alt="vignette représentant la série"/>
                </figure>
                <div class="card-body">
                    <h3 class="card-title">Titre saison</h3>
                    <p class="resume">Résumé saison</p>
                    <div class="card-actions justify-center">
                        <a class="btn btn-info btn-xs sm:btn-sm md:btn-md lg:btn-lg xl:btn-xl" href="details_saison.php">Voir les détails</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>