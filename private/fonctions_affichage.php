<?php
    declare(strict_types=1);

    //htmlspecialchars
    function e(?string $valeur): string
    {
        return htmlspecialchars($valeur ?? '', ENT_QUOTES, 'UTF-8');
    }

    function afficher_serie(PDO $pdo): ?array
    {
        $serie = $pdo->query("SELECT id, nom, resume, vignette, date_sortie
                              FROM series
                              ORDER BY nom
                            ");
        return $serie->fetchAll(PDO::FETCH_ASSOC);
    }

    function afficher_saison(PDO $pdo): ?array
    {
        $saison = $pdo->query("SELECT id, nom, resume, vignette, date_sortie
                               FROM saisons
                               ORDER BY nom
                            ");
        return $saison->fetchAll(PDO::FETCH_ASSOC);
    }

    function afficher_episode(PDO $pdo): ?array
    {
        $episode = $pdo->query("SELECT id, nom, resume, vignette, date_sortie, duree
                               FROM episode
                               ORDER BY nom
                            ");
        return $episode->fetchAll(PDO::FETCH_ASSOC);
    }