<?php

    declare(strict_types=1);

    function trouver_series_par_nom(PDO $pdo, string $nom): ?array {
        $sql = "SELECT id, nom, resume, vignette, date_sortie
        FROM series
        WHERE nom = :nom";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([':nom' => $nom]);

        $serie = $stmt->fetch(PDO::FETCH_ASSOC);

        return $serie ?: null;
    }

    function ajouter_serie(PDO $pdo, array $series): int {
        try {
            $serie_existe = trouver_series_par_nom($pdo, $series['nom']);

            if ($serie_existe !== null) {
                $serie_id = (int) $serie_existe['id'];
            } else {
                $sql_serie = "INSERT INTO series (nom, resume, vignette, date_sortie) VALUES (:nom, :resume, :vignette, :date_sortie";

                $resume = isset($series['resume']) ? $series['resume'] : null;
                $vignette = isset($series['vignette']) ? $series['vignette'] : null;

                $stmt_serie = $pdo->prepare($sql_serie);
                $stmt_serie->execute([":nom" => $series['nom'],
                                      ":resume" => $resume,
                                      ":vignette" => $vignette,
                                      ":date_sortie" => $series['date_sortie']
                                    ]);
                $serie_id = (int) $pdo->lastInsertId();//id auto-incrémenté donc on ne le définit pas nous-même, on se contente de récupérer ici pour l'assigner à la série
            }
            return $serie_id;
        } catch (Throwable $e) {
            throw $e;
        }
    }

?>