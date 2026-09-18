<?php

    require_once("../private/config.php");
    $titre = 'Détails de votre série';
    require __DIR__ . '/../private/header.php';
    require_once("../private/forms.php");
    require_once("../private/traitement_formulaire.php");
    require_once("../private/fonctions_affichage.php");

    $pdo = connect();
    $les_saisons = afficher_saison($pdo);

    $form_type = "saison";
    traiteFormulaire($pdo, $form_type);

    $serie = null;

    if(isset($_GET['serie_id'])) {
        $serie_id = intval($_GET['serie_id']);
        $serie = trouver_series_par_id($pdo, $serie_id);
    }
    if($serie == null) {
        header('Location: index.php');
        exit;
    }

?>
    <div class="series_container">
        <h2 class="text-4xl font-bold m-3">Liste des saisons</h2>
        <div class="grid grid-cols-3 gap-4 m-3 justify-items-center">
            <?php if(empty($les_saisons)) { ?>
                <p>Pas de saisons disponibles.</p>
            <?php } else
            { 
            foreach($les_saisons as $la_saison) { ?>
                <div class="card bg-base-100 shadow-sm lg:w-100">
                    <figure>
                        <img src="<?php echo(e($la_saison['vignette'])) ?>" alt="vignette représentant la série"/>
                    </figure>
                    <div class="card-body">
                        <h3 class="card-title"><?php echo(e($la_saison['nom'])) ?></h3>
                        <p class="resume"><?php echo(e($la_saison['resume'])) ?></p>
                        <div class="card-actions justify-center">
                            <a class="btn btn-info btn-xs sm:btn-sm md:btn-md lg:btn-lg xl:btn-xl" href="details_saison.php?saison_id=2">Voir les détails</a>
                        </div>
                    </div>
                </div>
            <?php }} ?>
            <?php echo_form($form_type, false, $serie['id']); ?>
        </div>
    </div>
</body>
</html>