<?php
require_once __DIR__.'/database.php';


function request($nom, $prenom, $mail, $age, $stage, $commentaire): void
{
    global $database;
    $statement = $database->prepare(" 
        INSERT INTO request(nom,prenom, mail, age, stage,commentaire )
        VALUES (:nom, :prenom, :mail, :age, :stage, :commentaire)");
    $statement->execute([
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':mail' => $mail,
        ':age' => $age,
        ':stage' => $stage,
        ':commentaire' => $commentaire,
    ]);

}