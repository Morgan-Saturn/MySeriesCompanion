<?php

    require_once("../private/config.php");
    require_once("../private/fonctions_ajout.php");

    $titre = 'Ajouter une série';
    require __DIR__ . '/../private/header.php';

?>
    <div class="ajout_serie">
        <form class="serie" method="post" action="details_saison.php">
            <label>Nom - champ obligatoire</label>
            <input type="text" id="ajouter_serie" name="nom_serie" maxlength="255" placeholder="Saisissez le titre de votre série ..." required>
            <label>Résumé</label>
            <input type="text" id="resume_serie" name="resume_serie" maxlength="255" placeholder="Saisissez un résumé pour votre série ...">
            <label>Vignette</label>
            <input type="image" id="vignette_serie" name="vignette_serie" maxlength="255" placeholder="Déposer une image pour votre série ici.">
            <label>Date de sortie - champ obligatoire</label>
            <input type="date" id="date_sortie_serie" name="date_sortie_serie" required>

            <button class="valider" type="submit">Valider</button>
            <button class="annuler" type="reset">Annuler</button>
        </form>
    </div>
</body>
</html>