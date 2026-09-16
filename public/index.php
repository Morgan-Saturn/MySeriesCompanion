<?php

    require_once("../private/config.php");
    $titre = "Bonjour ! Qu'allons-nous regarder aujourd'hui ?";
    require __DIR__ . '/../private/header.php';
?>
</div>
</div>
</div>
    <a href="ajout_series.php"><button class="btn btn-accent btn-xs sm:btn-sm md:btn-md lg:btn-lg xl:btn-xl">Ajouter une série</button></a>
    <div class="series_container">
        <h2>Mes séries</h2>
        <div class="card bg-base-100 w-96 shadow-sm">
            <figure>
                <img src="" alt="vignette représentant la série"/>
            </figure>
            <div class="card-body">
                <h3 class="card-title">Titre série</h3>
                <p class="resume">Résumé série</p>
                <div class="card-actions justify-end">
                    <a href="details_serie.php"><button class="btn btn-info btn-xs sm:btn-sm md:btn-md lg:btn-lg xl:btn-xl">Voir les détails</button></a>
                </div>
            </div>
        </div>
</body>
</html>
