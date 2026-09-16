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
    <div class="hero bg-base-200">
        <div class="hero-content flex-col lg:flex-row">
            <h1 class="text-5xl font-bold"><?php echo $titre; ?></h1>
            