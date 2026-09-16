<?php
    require_once("../private/config.php");
    $titre = 'Details de la saison';
    require __DIR__ . '/../private/header.php';
    $champ_duree = true;
?>
    <h2>Ajouter un nouvel épisode :</h2>
    <div class="ajout_episode">
        <?php include '../private/forms.php' ?>
    </div>
    <div class="series_container">
        <h2>Liste des épisodes</h2>
        <div class="series_grid">
            <div class="serie">
                <img src="" alt="vignette représentant l'épisode"/>
                <h3>Titre saison</h3>
                <p class="resume">Résumé épisode</p>
            </div>
        </div>
    </div>
</body>
</html>