<?php
require_once __DIR__.'/database.php';


function contactrequest($nom, $prenom, $email, $age, $message): void
{
    global $database;
    $statement = $database->prepare(" 
        INSERT INTO contactrequest(nom,prenom, email, message )
        VALUES (:nom, :prenom, :email, :message)");
    $statement->execute([
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':email' => $email,
        ':message' => $message,
    ]);

}