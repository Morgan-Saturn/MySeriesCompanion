<?php

    require_once("../private/config.php");
    $titre = 'Détails de votre série';
    require __DIR__ . '/../private/header.php';
    require_once("../private/forms.php");
    require_once("../private/traitement_formulaire.php");

    $form_type = "saison";
    $pdo = connect();
    traiteFormulaire($pdo, $form_type);

    $serie = null;

    if(isset($_GET['serie_id'])) {
        $serie_id = intval($_GET['serie_id']);
        $serie = trouver_series_par_id($pdo, $serie_id);
    }
    if($serie == null) {
        header('Location: index.php');
    }

?>
    <h2>Ajouter une nouvelle saison :</h2>
    <div class="ajout_saison">
        <?php echo_form($form_type, false, $serie['id']); ?>
    </div>
    <div class="series_container">
        <h2 class="text-4xl font-bold m-3">Liste des saisons</h2>
        <div class="grid grid-cols-3 gap-4 m-3 justify-items-center">
            <div class="card bg-base-100 shadow-sm lg:w-100">
                <figure>
                    <img src="../assets/vignette_test.jpg" alt="vignette représentant la série"/>
                </figure>
                <div class="card-body">
                    <h3 class="card-title">Titre saison</h3>
                    <p class="resume">Résumé saison</p>
                    <div class="card-actions justify-center">
                        <a class="btn btn-info btn-xs sm:btn-sm md:btn-md lg:btn-lg xl:btn-xl" href="details_saison.php?saison_id=2">Voir les détails</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>