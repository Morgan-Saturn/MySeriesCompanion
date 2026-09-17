<?php
function echo_form(string $form_type, bool $has_duree, ?int $parent_id) {
?>
    <form class="serie" method="post" action="">
        <label>Nom - champ obligatoire</label>
        <input type="text" id="ajouter_serie" name="nom" maxlength="255" placeholder="Saisissez le titre" required>
        <label>Résumé</label>
        <textarea id="resume_serie" name="resume" maxlength="255" placeholder="Saisissez un résumé"></textarea>
        <label>Vignette</label>
        <input type="url" id="vignette_serie" name="vignette" maxlength="255" placeholder="Déposer l'url d'une image ici.">
        <label>Date de sortie - champ obligatoire</label>
        <input type="date" id="date_sortie_serie" name="date_sortie" required>
        <?php if ($has_duree){ ?>
            <label>Durée</label>
            <input type="number" id="duree_episode" name="duree">
        <?php } ?>
        <button class="btn btn-accent btn-xs sm:btn-sm md:btn-md lg:btn-lg xl:btn-xl" type="submit">Valider</button>
        <button class="btn btn-warning btn-xs sm:btn-sm md:btn-md lg:btn-lg xl:btn-xl" type="reset">Annuler</button>
        <input type="hidden" name="form_type" value="<?= $form_type ?>"/>
        <?php 
            if ($parent_id != null) {
                echo '<input type="hidden" name="parent_id" value="'. $parent_id . '"/>';
            }
        ?>
    </form>
<?php
}