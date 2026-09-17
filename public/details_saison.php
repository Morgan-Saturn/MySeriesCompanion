<?php
    require_once("../private/config.php");
    $titre = 'Details de la saison';
    require __DIR__ . '/../private/header.php';
    require_once("../private/forms.php");
    require_once("../private/traitement_formulaire.php");

    $form_type = "episode";
    $pdo = connect();
    traiteFormulaire($pdo, $form_type);

    $saison = null;

    if(isset($_GET['saison_id'])) {
        $saison_id = intval($_GET['saison_id']);
        $saison = trouver_saison_par_id($pdo, $saison_id);
    }
    if($saison == null) {
        header('Location: index.php');
    }
?>
    <h2>Ajouter un nouvel épisode :</h2>
    <div class="ajout_episode">
        <?php echo_form($form_type, true, $saison['id']); ?>
    </div>
    <div class="saisons_container">
        <h2 class="text-4xl font-bold m-3">Liste des épisodes</h2>
        <div class="grid grid-cols-3 gap-4 m-3 justify-items-center">
            <div class="card bg-base-100 shadow-sm lg:w-100">
                <figure>
                    <img src="../assets/vignette_test.jpg" alt="vignette représentant la série"/>
                </figure>
                <div class="card-body">
                    <h3 class="card-title">Titre épisode</h3>
                    <h3 class="card-title">Durée : 45 mins</h3>
                    <p class="resume">Résumé épisode</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>