<?php 

$titre = $titre ?? "Bienvenue ! Qu'allons-nous regarder aujourd'hui ?"

?>
<!DOCTYPE html>
<html lang="fr" data-theme="retro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="png" href="../assets/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <title>MySeriesCompanion</title>
</head>

<body>
    <h1 class="text-5xl font-bold text-center m-5"><?php echo $titre; ?></h1>
