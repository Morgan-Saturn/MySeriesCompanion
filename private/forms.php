<form class="serie" method="post" action="details_saison.php">
    <label>Nom - champ obligatoire</label>
    <input type="text" id="ajouter_serie" name="nom_serie" maxlength="255" placeholder="Saisissez le titre" required>
    <label>Résumé</label>
    <textarea id="resume_serie" name="resume_serie" maxlength="255" placeholder="Saisissez un résumé"></textarea>
    <label>Vignette</label>
    <input type="url" id="vignette_serie" name="vignette_serie" maxlength="255" placeholder="Déposer l'url d'une image ici.">
    <label>Date de sortie - champ obligatoire</label>
    <input type="date" id="date_sortie_serie" name="date_sortie_serie" required>
    <?php if (isset($champ_duree)){ ?>
    <label>Durée</label>
    <input type="number" id="duree_episode" name="duree_episode">
    <?php } ?>
    <button class="btn btn-accent btn-xs sm:btn-sm md:btn-md lg:btn-lg xl:btn-xl" type="submit">Valider</button>
    <button class="btn btn-warning btn-xs sm:btn-sm md:btn-md lg:btn-lg xl:btn-xl" type="reset">Annuler</button>
</form>