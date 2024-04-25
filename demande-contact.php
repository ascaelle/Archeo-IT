<?php
require_once __DIR__.'/../common/persistence/database.php';
require_once __DIR__.'/../common/security/has-access.php';
requireAdminAccess();


$title = 'Liste demandes de contact · Archeo IT';
function renderPage(){

    function contactlist(): array
    {
        global $database;
        $statement = $database->prepare('
        SELECT *
        FROM contactrequest;
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
            border: skyblue;
        }
        th{
            background-color: blue;
        }
    </style>

    <section id="team" class="team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center mt-5 display-3 fw-bold">Liste des demandes de contact</h1>
                    <br>

                    <div class="section-header text-center   pb-3">
                        <table>
                            <caption>Demandes de contact</caption>
                            <thead>

                                <tr>
                                    <th>#</th>
                                    <th><b>NOM</b></th>
                                    <th><b>PRENOM</b></th>
                                    <th><b>EMAIL</b></th>
                                    <th><b>MESSAGE</b></th>
                                </tr>
                            </thead>

                            <?php
                            $counter = 0;
                            foreach (contactlist() as ['id' => $id, 'nom' => $nom, 'prenom' => $prenom, 'email' => $email, 'message' => $message]) {
                                ?>


                            <tbody>

                                <tr>
                                    <td><?= ++$counter ?></td>
                                    <td><?= $nom ?></td>
                                    <td><?= $prenom ?></td>
                                    <td><?= $email ?></td>
                                    <td><?= $message ?></td>
                                </tr>

                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}

require_once '../common/fragments/layout.php';
