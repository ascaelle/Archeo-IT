<?php
require_once __DIR__.'/common/security/has-access.php';

if (!empty($_POST)) {
    require_once __DIR__.'/common/persistence/contact-request.php';
    if (array_key_exists('envoyer',$_POST)){
        contactrequest($_POST['nom'], $_POST['prenom'], $_POST['email'],$_POST['age'],$_POST['message']);
        header('Location: confirm-send.php');
        exit();

    }
}

$title = 'Demandes de contact · Archeo IT';
function renderPage()
{
    if (isset($_POST['Envoyer'])){
        if(!empty($_POST['nom']) AND !empty($_POST['prenom'])
            AND !empty($_POST['email'])){
            echo "Veuillez remplir tous les champs!!";
        }
    }

    if (isset($_POST['Valider'])){
        if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail'])
            AND !empty($_POST['naissance']) AND !empty($_POST['stage'])){
            echo "Veuillez remplir tous les champs!!";
        }
    }
    ?>


    <section id="contact" class="contact section-padding">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Nous contacter....</h2>
                </div>
            </div>
        </div>
        <form method="post" action="./contact.php">
            <div class="col-md-12 p-0 pt-4 p-4 m-auto">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label>Nom: </label>
                            <input type="text" class="form-control" name="nom" placeholder="YIMGA NANA">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label>Prénom: </label>
                            <input type="text" class="form-control" name="prenom" placeholder="Ruth Ascaëlle">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label>Email: </label>
                            <input type="email" class="form-control" name="email" placeholder="ascaelleruth@gmail.com">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label>Message: </label>
                            <input type="text" class="form-control" name="message"
                                   placeholder="Nous vous contactons pour...">
                        </div>
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary" name="envoyer">Envoyer</button>
                </div>
            </div>
        </form>
    </section>


    <?php
}
require_once __DIR__.'/common/fragments/layout.php';