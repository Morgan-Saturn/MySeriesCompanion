<?php
    require_once("../private/config.php");
    $titre = 'Details de la saison';
    require __DIR__ . '/../private/header.php';
    require_once("../private/forms.php");
    require_once("../private/traitement_formulaire.php");
    require_once("../private/fonctions_affichage.php");

    $pdo = connect();
    
    $saison = null;
    if(isset($_GET['saison_id'])) {
        $saison_id = intval($_GET['saison_id']);
        $saison = trouver_saison_par_id($pdo, $saison_id);
    }
    if($saison == null) {
        header('Location: index.php');
        exit;
    }

    $form_type = "episode";
    traiteFormulaire($pdo, $form_type);

    $les_episodes = recuperer_episodes($pdo, $saison['id']);
?>
    <div class="saisons_container">
        <h2 class="text-4xl font-bold m-3">Liste des épisodes</h2>
        <div class="grid grid-cols-3 gap-4 m-3 justify-items-center">
            <div class="card bg-base-100 shadow-sm lg:w-100">
                <?php if(empty($les_episodes)) { ?>
                <p>Pas d'épisodes disponibles.</p>
                <?php } else
                { 
                    foreach($les_episodes as $un_episode) { ?>
                        <figure>
                            <img src="<?php echo(e($un_episode['vignette'])) ?>" alt="vignette représentant la série"/>
                        </figure>
                        <div class="card-body">
                            <h3 class="card-title"><?php echo(e($un_episode['nom'])) ?></h3>
                            <h4 class="card-title"><?= e($un_episode['date_sortie']) ?></h4>
                            <h4 class="card-title">Durée : <?php echo(e($un_episode['duree'])) ?> mins</h4>
                            <p class="resume"><?php echo(e($un_episode['resume'])) ?></p>
                        </div>
            </div>
                <?php }} ?>
            <?php echo_form($form_type, true, $saison['id']); ?>
        </div>
    </div>
</body>
</html>