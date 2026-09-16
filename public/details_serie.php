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
        <h2>Liste des saisons</h2>
        <div class="series_grid">
            <div class="serie">
                <img src="" alt="vignette représentant la saison"/>
                <h3>Titre saison</h3>
                <p class="resume">Résumé saison</p>
                <a href="details_saison.php"><button class="details">Voir les détails</button></a>
            </div>
        </div>
    </div>
</body>
</html>