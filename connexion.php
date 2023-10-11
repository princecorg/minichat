<?php

// ------------------------------------------------------------------------------ Connexion à la base de données 'tchat' ------------------------------------------------------------------------------------------------------------

// Test de connexion
try
{
    $bdd = new PDO('mysql:host=SERVERNAME;dbname=DBNAME;charset=utf8', 'LOGIN', 'PASSWORD'); // insérez vos paramètres de connexion à la BDD.
}

// Gestion des erreurs
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>
