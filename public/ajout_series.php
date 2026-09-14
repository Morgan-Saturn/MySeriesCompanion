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
    <h1>Ajouter une série</h1>

    <div class="ajout_serie">
        <form class="serie">
            <label>Nom - champ obligatoire</label>
            <input type="text" id="ajouter_serie" name="nom_serie" maxlength="255" placeholder="Saisissez le titre de votre série ..." required>
            <label>Résumé</label>
            <input type="text" id="resume_serie" name="resume_serie" maxlength="255" placeholder="Saisissez un résumé pour votre série ...">
            <label>Vignette</label>
            <input type="image" id="vignette_serie" name="vignette_serie" maxlength="255" placeholder="Déposer une image pour votre série ici.">
            <label>Date de sortie - champ obligatoire</label>
            <input type="date" id="date_sortie_serie" name="date_sortie_serie" required>

            <button class="valider">Valider</button>
            <button class="annuler">Annuler</button>
        </form>
    </div>
</body>