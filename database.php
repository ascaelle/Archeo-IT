<?php
$database = new PDO('mysql:host=localhost;dbname=archeo-it', 'root', 'root');
$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

