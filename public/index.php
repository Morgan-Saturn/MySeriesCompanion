<?php

    require_once("../private/config.php");
    $titre = "Bonjour ! Qu'allons-nous regarder aujourd'hui ?";
    require __DIR__ . '/../private/header.php';
?>
<div class="flex justify-center">
    <a class="btn btn-accent btn-xs sm:btn-sm md:btn-md lg:btn-lg xl:btn-xl" href="ajout_series.php">Ajouter une série</a>
</div>
<div class="lg:mx-15">
<h2 class="text-4xl font-bold m-3">Mes séries</h2>
<div class="grid grid-cols-3 gap-4 m-3 justify-items-center">
    <div class="card bg-base-100 shadow-sm lg:w-100">
        <figure>
            <img src="../assets/vignette_test.jpg" alt="vignette représentant la série"/>
        </figure>
        <div class="card-body">
            <h3 class="card-title">Titre série</h3>
            <p class="resume">Résumé série</p>
            <div class="card-actions justify-center">
                <a class="btn btn-info btn-xs sm:btn-sm md:btn-md lg:btn-lg xl:btn-xl" href="details_serie.php">Voir les détails</a>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
