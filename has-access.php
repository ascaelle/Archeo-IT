<?php

function isAdmin(): bool
{
    session_start();
    return !empty($_SESSION['email']);
}

function requireAdminAccess(): void
{
    if (!isAdmin()) {
        header('Location: /archeo-it/login.php?access=require-admin');
        exit();
    }
}