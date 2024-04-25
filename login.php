<?php
if (!empty($_POST)) {
    require_once __DIR__.'/common/persistence/administrator.php';
    if (login($_POST['email'], $_POST['password'])) {
        session_start();
        $_SESSION['email'] = $_POST['email'];
        header('Location: admin/index.php');
        exit();
    }
}

$title = 'Contact · Archeo IT';
function renderPage()
{
    if ('require-admin' == $_GET['access']) {
        ?>
        <strong>Vous n'avez pas les droits d'accès a cette page</strong>
        <?php
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
        <form method="post" action="./login.php">
            <div class="col-md-12 p-0 pt-4 p-4 m-auto">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label>Email: </label>
                            <input type="email" value="<?= $_POST['email'] ?>" class="form-control" name="email" placeholder="ascaelleruth@gmail.com">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label>Mot de passe: </label>
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary" name="connecter">Login</button>
                </div>
            </div>
        </form>
    </section>
    <?php
}
require_once __DIR__.'/common/fragments/layout.php';
