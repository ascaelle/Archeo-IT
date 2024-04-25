<?php
require_once __DIR__.'/database.php';

function login($email, $password)
{
    global $database;
    $statement = $database->prepare('
        SELECT COUNT(*)
        FROM administrators
        WHERE email = :email AND password = :password');
    $statement->execute([
        ':email' => $email,
        ':password' => $password,
    ]);
    $result = $statement->fetch();
    return '1' == $result[0];
}