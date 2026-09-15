<?php

    require_once("../private/config.php");
    $titre = 'Details de la saison';
    require __DIR__ . '/../private/header.php';

?>
    <h2>Ajouter un nouvel épisode :</h2>
    <div class="ajout_episode">
        <form class="episode" method="post" action="details_saison.php">
            <label>Nom - champ obligatoire</label>
            <input type="text" id="ajouter_episode" name="nom_episode" maxlength="255" placeholder="Saisissez le titre de l'épisode ..." required>
            <label>Résumé</label>
            <input type="text" id="resume_episode" name="resume_episode" maxlength="255" placeholder="Saisissez un résumé de l'épisode ...">
            <label>Vignette</label>
            <input type="image" id="vignette_episode" name="vignette_episode" maxlength="255" placeholder="Déposer une image de l'épisode ici.">
            <label>Date de sortie - champ obligatoire</label>
            <input type="date" id="date_sortie_episode" name="date_sortie_episode" required>
            <label>Durée</label>
            <input type="number" id="duree_episode" name="duree_episode">

            <button type="submit" class="valider">Valider</button>
            <button class="annuler" type="reset">Annuler</button>
        </form>
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