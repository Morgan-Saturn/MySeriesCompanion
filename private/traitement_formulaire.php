<?php

require_once("fonctions_ajout.php");

function traiteFormulaire(PDO $pdo, string $form_type) {
    if (isset($_POST['form_type']) && $_POST['form_type'] == $form_type)
    {
        switch ($form_type) {
            case "serie":
                $serie_id = ajouter_serie($pdo, $_POST);
                header("Location: ../public/details_serie.php?serie_id=" . $serie_id);
                exit;
            case "saison":
                ajouter_saison($pdo, $_POST);
                break;
            case "episode":
                ajouter_episode($pdo, $_POST);
                break;
        }
    }
}