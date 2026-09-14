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
    <h1>Détails de votre série</h1>
    <button class="voir_details_saison">Voir les détails de la saison ...</button>

    <h2>Ajouter une nouvelle saison :</h2>
    <div class="ajout_saison">
        <form class="saison">
            <label>Nom - champ obligatoire</label>
            <input type="text" id="ajouter_saison" name="nom_saison" maxlength="255" placeholder="Saisissez le titre de la saison ..." required>
            <label>Résumé</label>
            <input type="text" id="resume_saison" name="resume_saison" maxlength="255" placeholder="Saisissez un résumé de la saison ...">
            <label>Vignette</label>
            <input type="image" id="vignette_saison" name="vignette_saison" maxlength="255" placeholder="Déposer une image de la saison ici.">
            <label>Date de sortie - champ obligatoire</label>
            <input type="date" id="date_sortie_saison" name="date_sortie_saison" required>

            <button class="valider">Valider</button>
            <button class="annuler">Annuler</button>
        </form>
    </div>
</body>