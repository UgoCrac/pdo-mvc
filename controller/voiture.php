<?php

$message = '';




if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['immat'])) {
    for ($i = 0; $i < count($_POST['immat']); $i++) {
        $listVoitures[] = new Voiture($_POST['immat'][$i], $_POST['modele'][$i], $_POST['couleur'][$i], $_POST['date'][$i]);
        VoiturePDO::updateOne($listVoitures[$i]);
    }
}

$voitures = VoiturePDO::getAll();

echo $twig->render('voiture.html.twig', [
    'message' => $message,
    'voitures' => $voitures
]);
