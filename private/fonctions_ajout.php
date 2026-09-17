<?php

    declare(strict_types=1);

    //fonctions de recherche des séries, saisons et épisodes

    function trouver_series_par_nom(PDO $pdo, string $nom): ?array {
        $sql = "SELECT id, nom, resume, vignette, date_sortie
        FROM series
        WHERE nom = :nom";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([':nom' => $nom]);

        $serie = $stmt->fetch(PDO::FETCH_ASSOC);

        return $serie ?: null;
    }

    function trouver_saisons_par_nom(PDO $pdo, string $nom): ?array {
        $sql = "SELECT id, nom, resume, vignette, date_sortie
        FROM saisons
        WHERE nom = :nom";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([':nom' => $nom]);

        $saison = $stmt->fetch(PDO::FETCH_ASSOC);

        return $saison ?: null;
    }

    function trouver_episodes_par_nom(PDO $pdo, string $nom): ?array {
        $sql = "SELECT id, nom, resume, vignette, date_sortie, duree
        FROM episode
        WHERE nom = :nom";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([':nom' => $nom]);

        $episode = $stmt->fetch(PDO::FETCH_ASSOC);

        return $episode ?: null;
    }

    function trouver_series_par_id(PDO $pdo, int $id): ?array {
        $sql = "SELECT id, nom, resume, vignette, date_sortie
        FROM series
        WHERE id = :id";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);

        $serie = $stmt->fetch(PDO::FETCH_ASSOC);

        return $serie ?: null;
    }

    function trouver_saison_par_id(PDO $pdo, int $id): ?array {
        $sql = "SELECT id, nom, resume, vignette, date_sortie
        FROM saisons
        WHERE id = :id";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);

        $saison = $stmt->fetch(PDO::FETCH_ASSOC);

        return $saison ?: null;
    }

    //fonctions d'ajout de séries, saisons ou épisodes dans la bdd

    function ajouter_serie(PDO $pdo, array $series): int {
        try {
            $serie_existe = trouver_series_par_nom($pdo, $series['nom']);

            if ($serie_existe !== null) {
                $serie_id = (int) $serie_existe['id'];
            } else {
                $sql_serie = "INSERT INTO series (nom, resume, vignette, date_sortie) VALUES (:nom, :resume, :vignette, :date_sortie)";

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

    function ajouter_saison(PDO $pdo, array $saisons): int {
        try {
            $saison_existe = trouver_saisons_par_nom($pdo, $saisons['nom']);

            if ($saison_existe !== null) {
                $saison_id = (int) $saison_existe['id'];
            } else {
                $sql_saison = "INSERT INTO saisons (nom, resume, vignette, date_sortie, serie_id) VALUES (:nom, :resume, :vignette, :date_sortie, :serie_id)";

                $resume = isset($saisons['resume']) ? $saisons['resume'] : null;
                $vignette = isset($saisons['vignette']) ? $saisons['vignette'] : null;

                $stmt_saison = $pdo->prepare($sql_saison);
                $stmt_saison->execute([":nom" => $saisons['nom'],
                                      ":resume" => $resume,
                                      ":vignette" => $vignette,
                                      ":date_sortie" => $saisons['date_sortie'],
                                      ":serie_id" => $saisons['parent_id']
                                    ]);
                $saison_id = (int) $pdo->lastInsertId();
            }
            return $saison_id;
        } catch (Throwable $e) {
            throw $e;
        }
    }

    function ajouter_episode(PDO $pdo, array $episode): int {
        try {
            $episode_existe = trouver_episodes_par_nom($pdo, $episode['nom']);

            if ($episode_existe !== null) {
                $episode_id = (int) $episode_existe['id'];
            } else {
                $sql_episode = "INSERT INTO episode (nom, resume, vignette, date_sortie, duree, saison_id) VALUES (:nom, :resume, :vignette, :date_sortie, :duree, :saison_id)";

                $resume = isset($episode['resume']) ? $episode['resume'] : null;
                $vignette = isset($episode['vignette']) ? $episode['vignette'] : null;
                $duree = isset($episode['duree']) ? intval($episode['duree']) : null;

                $stmt_episode = $pdo->prepare($sql_episode);
                $stmt_episode->execute([":nom" => $episode['nom'],
                                      ":resume" => $resume,
                                      ":vignette" => $vignette,
                                      ":date_sortie" => $episode['date_sortie'],
                                      ":duree" => $duree,
                                      ":saison_id" => $episode['parent_id']
                                    ]);
                $episode_id = (int) $pdo->lastInsertId();
            }
            return $episode_id;
        } catch (Throwable $e) {
            throw $e;
        }
    }
