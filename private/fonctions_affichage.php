<?php
    declare(strict_types=1);

    //htmlspecialchars
    function e(?string $valeur): string
    {
        return htmlspecialchars($valeur ?? '', ENT_QUOTES, 'UTF-8');
    }

    function recuperer_serie(PDO $pdo): ?array
    {
        $serie = $pdo->query("SELECT id, nom, resume, vignette, date_sortie
                              FROM series
                              ORDER BY nom
                            ");
        return $serie->fetchAll(PDO::FETCH_ASSOC);
    }

    function recuperer_saisons(PDO $pdo, int $serie_id): ?array
    {
        $stmt = $pdo->prepare("SELECT id, nom, resume, vignette, date_sortie
                               FROM saisons
                               WHERE serie_id = :serie_id
                               ORDER BY date_sortie");
        $stmt->execute([":serie_id" => $serie_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function recuperer_episodes(PDO $pdo, int $saison_id): ?array
    {
        $stmt = $pdo->prepare("SELECT id, nom, resume, vignette, date_sortie, duree
                               FROM episode
                               WHERE saison_id = :saison_id
                               ORDER BY date_sortie");
        $stmt->execute([":saison_id" => $saison_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }