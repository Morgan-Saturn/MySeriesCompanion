<?php

    require_once("../private/config.php");
    $titre = "Bonjour ! Qu'allons-nous regarder aujourd'hui ?";
    require __DIR__ . '/../private/header.php';
    require_once("../private/fonctions_affichage.php");

    $pdo = connect();
    $les_series = recuperer_serie($pdo);
?>
<div class="flex justify-center">
    <a class="btn btn-accent btn-xs sm:btn-sm md:btn-md lg:btn-lg xl:btn-xl" href="ajout_series.php">Ajouter une série</a>
</div>
<div class="lg:mx-15">
    <h2 class="text-4xl font-bold m-3">Mes séries</h2>
    <div class="grid grid-cols-3 gap-4 m-3 justify-items-center">
        <?php if(empty($les_series)) { ?>
                <p>Pas de séries disponibles.</p>
        <?php } else { 
            foreach ($les_series as $la_serie){ ?>
                <div class="card bg-base-100 shadow-sm lg:w-100">
                    <figure>
                        <img src="<?= e($la_serie['vignette']) ?>" alt="vignette représentant la série"/>
                    </figure>
                    <div class="card-body">
                        <h3 class="card-title"><?= e($la_serie['nom']) ?></h3>
                        <p class="resume"><?= e($la_serie['resume']) ?></p>
                        <div class="card-actions justify-center">
                            <a class="btn btn-info btn-xs sm:btn-sm md:btn-md lg:btn-lg xl:btn-xl" href="details_serie.php?serie_id=<?= $la_serie['id'] ?>">Voir les détails</a>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>
    </div>
</div>
</body>
</html>
