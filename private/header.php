<?php 

$titre = $titre ?? "Bienvenue ! Qu'allons-nous regarder aujourd'hui ?"

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="png" href="../assets/favicon.png" />
    <title>MySeriesCompanion</title>
</head>

<body>
    <h1><?php echo $titre; ?></h1>