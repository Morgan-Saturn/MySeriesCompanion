<?php

    require_once("../private/config.php");
    $titre = "Bonjour ! Qu'allons-nous regarder aujourd'hui ?";
    require __DIR__ . '/../private/header.php';
?>
    <a href="ajout_series.php"><button>Ajouter une série</button></a>
    <div class="series_container">
        <h2>Mes séries</h2>
        <div class="series_grid">
            <div class="serie">
                <img src="" alt="vignette représentant la série"/>
                <h3>Titre série</h3>
                <p class="resume">Résumé série</p>
                <a href="details_serie.php"><button class="details">Voir les détails</button></a>
            </div>
        </div>
    </div>
</body>
</html>