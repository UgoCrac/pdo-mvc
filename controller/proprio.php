<?php


$connecte = false;
$message = "";
$proprio = null;

if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['name'])) {
    $proprio = new Proprio($_POST["id"], $_POST["name"]);

    $proprio = ProprioPDO::verifOne($proprio);

    if (gettype($proprio) == 'integer') {
        $message = "Erreur de connexion : utilisateur inconnu";
    } elseif (gettype($proprio) == 'string') {
        $message = $proprio;
    } else {
        $message = 'Utilisateur Ok';
        $connecte = true;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['new_nom'])) {

    $proprio = new Proprio($_POST["id"], $_POST["new_nom"], $_POST["new_prenom"], $_POST["new_adresse"], $_POST["new_ville"],  $_POST["new_cp"]);
    $connecte = true;
    $result = ProprioPDO::updateOne($proprio);
    if (gettype($result) == 'string') {
        $message = "Erreur de connexion";
    } else {
        $message = "Utilisateur mis à jour";
    }
}

echo $twig->render('proprio.html.twig', [
    'message' => $message,
    'connecte' => $connecte,
    'proprio' => $proprio
]);
