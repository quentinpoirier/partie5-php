<?php
$array = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'];
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice1</title>
</head>
<body>
    <h1>exercice1</h1>
    <p>Créer un tableau months et l'initialiser avec les valeurs suivantes :</p>
    <ul>
        <li>janvier</li>
        <li>février</li>
        <li>mars</li>
        <li>avril</li>
        <li>mai</li>
        <li>juin</li>
        <li>jullet</li>
        <li>aout</li>
        <li>septembre</li>
        <li>octobre</li>
        <li>novembre</li>
        <li>décembre</li>
    </ul>
    <p><?= print_r($array) ?></p>
    
</body>
</html>