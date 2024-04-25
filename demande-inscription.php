<?php
require_once __DIR__.'/../common/persistence/database.php';
require_once __DIR__.'/../common/security/has-access.php';
requireAdminAccess();


$title = 'Liste demandes inscription a un stage · Archeo IT';
function renderPage(){

    function inscriptionlist(): array
    {
        global $database;
        $statement = $database->prepare('
        SELECT *
        FROM request;
    ]');
        $statement->execute();
        return $statement->fetchAll();
    }
    ?>
    <style>
        table, th, tr, td{
            border:2px solid skyblue;
            border-collapse:collapse ;
        }
        th, td{
            padding: 8px;
        }
        th{
            background-color: blue;
        }
    </style>


    <h1 class="text-center mt-5 display-3 fw-bold">Liste des demandes d'inscription</h1>
    <br>

    <table >
        <caption>Demandes d'inscription</caption>
        <tr>
            <th>#</th>
            <th><b>NOM</b></th>
            <th><b>PRENOM</b></th>
            <th><b>MAIL</b></th>
            <th><b>NAISSANCE</b></th>
            <th><b>STAGE</b></th>
            <th><b>COMMENTAIRE</b></th>
        </tr>

        <?php
        $counter = 0;
        foreach (inscriptionlist() as ['id' => $id, 'nom' => $nom, 'prenom' => $prenom, 'mail' => $mail,
                 'age' => $age, 'stage' => $stage,'commentaire' => $commentaire]) {
            ?>
            <tr>
                <td><?= ++$counter ?></td>
                <td><?= $nom ?></td>
                <td><?= $prenom ?></td>
                <td><?= $mail ?></td>
                <td><?= $age ?></td>
                <td><?= $stage ?></td>
                <td><?= $commentaire ?></td>
            </tr>
            <?php
        }
        ?>

    </table>
    <br>
    <br>
    <?php
}

require_once '../common/fragments/layout.php';
