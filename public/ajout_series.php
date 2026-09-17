<?php

    require_once("../private/config.php");
    require_once("../private/fonctions_ajout.php");
    require_once("../private/forms.php");
    require_once("../private/traitement_formulaire.php");

    $form_type = "serie";
    $pdo = connect();
    traiteFormulaire($pdo, $form_type);

    $titre = 'Ajouter une série';
    require __DIR__ . '/../private/header.php';

?>
<div class="flex justify-center m-3">
    <?php echo_form($form_type, false, null); ?>
</div>
</body>
</html>