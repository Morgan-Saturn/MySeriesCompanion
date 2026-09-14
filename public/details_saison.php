<?php

    require_once("../private/config.php");

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="png" href="assets/favicon.png" />
    <title>MySeriesCompanion</title>
</head>

<body>
    <h1>Détails de la saison</h1>

   <!-- si pas d'épisodes, rien, sinon liste des épisodes à récupérer en base -->
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="png" href="assets/favicon.png" />
    <title>MySeriesCompanion</title>
</head>

<body>
    <h1>Détails de votre série</h1>
    <button class="voir_details_saison">Voir les détails de la saison ...</button>

    <h2>Ajouter un nouvel épisode :</h2>
    <div class="ajout_episode">
        <form class="episode">
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

            <button class="valider">Valider</button>
            <button class="annuler">Annuler</button>
        </form>
    </div>
</body>
</body>