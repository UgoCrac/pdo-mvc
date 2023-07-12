<?php
try {
    define('BDD', new PDO("mysql:host=localhost:3306;dbname=tp;charset=utf8", "userweb", "userweb"));
} catch (PDOException $e) {
    echo "La connexion à la BDD à échoué : " . $e->getMessage();
    die();
}
