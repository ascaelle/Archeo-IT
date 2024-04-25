<?php
require_once __DIR__.'/common/security/has-access.php';


$title = 'Sites · Archeo IT';
function renderPage()
{
    ?>
    <h1 class="text-center mt-5 display-3 fw-bold">RETROUVEZ DES SITES DE FOUILLE EN FRANCE</h1>

    <iframe src="https://www.google.com/maps/d/embed?mid=1cY3giH6q4pUFS2Caok7GAZceDRTuMQQ&ehbc=2E312F" width="640" height="480"></iframe>    <?php
}
require_once __DIR__.'/common/fragments/layout.php';

