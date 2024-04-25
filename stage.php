<?php
require_once __DIR__ . '/common/security/has-access.php';

if (!empty($_POST)) {
    require_once __DIR__ . '/common/persistence/request.php';
    if (array_key_exists('valider', $_POST)) {
        request($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['age'], $_POST['stage'], $_POST['commentaire']);
        header('Location: confirm-send.php');
        exit();

    }
}

$title = 'Demandes de stage · Archeo IT';
function renderPage()
{
    ?>

    <h1 class="text-center mt-5 display-3 fw-bold">TROUVEZ UN STAGE SELON VOTRE PROFILE</h1>
    <article class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="assets/image/k.jpeg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">STAGES POUR ENFANTS </h3><b>Durée: 2 Mois</b>
                        <p>Basiques d'un système informatique: Les notions tel que: Le processeur, la mémoire
                            vive (RAM), la
                            carte graphique,
                            le disque dur, la carte mère, le lecteur/graveur, l'alimentation seront abordés
                            au cours de stage.</p>
                    </div>
                    <div class="card-body">
                        <b>Durée: 2 Mois</b>
                        <p>Bureautique: Il s'agit d'un ensemble de techniques et d'outils servant à automatiser
                            les travaux
                            de bureau. Plus largement, les outils bureautiques désignent tout logiciel qui aide
                            à la création de documents, de présentations ou de tableurs (feuilles de
                            calculs)..</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">

                <div class="card">
                    <img src="assets/image/fem.jpeg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">STAGES POUR JEUNES </h3><b>Durée: 3 Mois</b>
                        <p>Basiques d'un système informatique: Les notions tel que: Le processeur, la mémoire
                            vive (RAM), la
                            carte graphique,
                            le disque dur, la carte mère, le lecteur/graveur, l'alimentation seront abordés
                            au cours de stage.</p>
                    </div>
                    <div class="card-body">
                        <b>Durée: 2 Mois</b>
                        <hr class="w-75">
                        <p>Maintenance informatique de base: La maintenance informatique consiste à assurer le
                            bon
                            fonctionnement du matériel, des logiciels et des réseaux informatiques. Elle
                            comprend des
                            tâches telles que l'installation de mises à jour et de correctifs, la sauvegarde des
                            données et la mise en place de mesures de sécurité.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="assets/image/htm.jpeg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">STAGES POUR TRAVAILLEUR </h3><b>Durée: 5 Mois</b>
                        <p>Basiques d'un système informatique: Les notions tel que: Le processeur, la mémoire
                            vive (RAM), la
                            carte graphique,
                            le disque dur, la carte mère, le lecteur/graveur, l'alimentation seront abordés
                            au cours de stage.</p>
                    </div>
                    <div class="card-body">
                        <b>Durée: 5 Mois</b>
                        <p>Reseau informatique de base: Le réseau informatique mondial accessible au public.
                            Il s'agit d'un réseau de réseaux, à commutation de paquets, sans centre névralgique,
                            composé de millions de réseaux aussi bien publics que privés, universitaires,
                            commerciaux
                            et gouvernementaux, eux-mêmes regroupés en réseaux autonomes</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="assets/image/old.jpeg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">STAGES PERSONNES AGÉES</h3><b>Durée: 1 Mois</b>
                        <p>Tech lead Java: Intégrer à notre équipe de développeurs, sur la stack technique
                            Java/Angular/Spring, vous
                            participerez à la réalisation des nouveaux besoins de notre client, le tout dans un
                            contexte défini.
                        </p>
                    </div>
                    <div class="card-body">
                        <b>Durée: 1 Mois</b>
                        <p>PFE (Devops CI/CD): Archéo-IT concevoir des solutions de gestion des identités et de
                            protection
                            des données au
                            cœur de la sécurité numérique. Les entreprises et les gouvernements comptent sur
                            nous
                            pour donner confiance aux d’interactions numériques.</p>
                    </div>
                </div>
            </div>
        </div>
    </article>


    <section id="contact" class="contact section-padding">
    <div class="row">
        <div class="col-md-12">
            <div class="section-header text-center pb-5">
                <div class="text-center">
                    <p class="btn btn-primary" name="envoyer">Postulez et trouvez un stage adapté pour vous!!</p>
                </div>
            </div>
        </div>
    </div>
    <form method="post" action="./stage.php">
    <div class="col-md-12 p-0 pt-4 p-4 m-auto">
    <div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <label>Nom: </label>
            <input type="text" id="nom" class="form-control" name="nom" value="<?= $_POST['nom'] ?>"
                   placeholder="YIMGA NANA">
        </div>
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label>Prénom: </label>
            <input type="text" id="prenom" class="form-control" name="prenom" value="<?= $_POST['prenom'] ?>"
                   placeholder="Ruth Ascaëlle">
        </div>
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label>Mail: </label>
            <input type="email" id="email" class="form-control" name="email" value="<?= $_POST['mail'] ?>"
                   placeholder="ascaelleruth@gmail.com">
        </div>
    </div>

    <div class="col-md-12">
        <div class="mb-3">
            <label>Naissance: </label>
            <input id="age" name="age" type="date" value="<?= $_POST['age'] ?>" class="form-control">
            <div class="text-end">
                <button type="submit" class="btn btn-primary" name="ok">OK</button>
            </div>
        </div>
    </div>
    <?php

    if (!empty($_POST['age'])) {
        $age = intval(date('Y')) - intval(explode('-', $_POST['age'])[0]);
    }

    if ($age !== NULL) {
        if ($age < 18) {
            ?>

            <div class="col-md-12">
                <div class="mb-3">
                    <span>Choisi un stage:</span>
                    <select name="stage" id="stage">
                        <option value="">--Veuillez choisir une option--</option>
                        <option value="Basiques d'un système informatique">Basiques d'un système informatique</option>
                        <option value="Bureautique">Bureautique</option>
                        <option value="Maintenance informatique de base">Maintenance informatique de base</option>
                        <option value="Internet">Internet</option>
                        <option value="TML/CSS, Go, Ruby, PHP">TML/CSS, Go, Ruby, PHP</option>
                    </select>
                </div>
            </div>

            <div class="col-md-12">
                <div class="mb-3">
                    <label>Commentaire: </label>
                    <input type="text" class="form-control" name="message" id="commentaire">
                </div>
            </div>
            <div class="text-end">
                <button type="submit" id="valider" class="btn btn-primary" name="valider">valider</button>
            </div>
            </div>
            <?php
        }
        if ($age >= 18) {
            ?>

            <div class="col-md-12">
                <div class="mb-3">
                    <span>Choisi un stage:</span>
                    <select name="stage" id="stage">
                        <option value="">--Veuillez choisir une option--</option>
                        <option value="PFE (Devops CI/CD)">PFE (Devops CI/CD)</option>
                        <option value="Tech lead Java">Tech lead Java</option>
                        <option value="Ingénieur R&D Algorithmie Radar">Ingénieur R&D Algorithmie Radar</option>
                        <option value="Développement d’un langage de programmation">Développement d’un langage de
                            programmation
                        </option>
                        <option value="Support processus & outils bid et projet">Support processus & outils bid et
                            projet
                        </option>
                        <option value="Développement d’un Framework de simulation">Développement d’un Framework de
                            simulation
                        </option>
                        <option value="Business Analyst">Business Analyst</option>
                        <option value="Ingénieur Electronique Informatique">Ingénieur Electronique Informatique</option>
                        <option value="System Engineer">System Engineer</option>
                        <option value="Prototypage ou Réalité Virtuelle">Prototypage ou Réalité Virtuelle</option>
                    </select>
                </div>
            </div>

            <div class="col-md-12">
                <div class="mb-3">
                    <label>Commentaire: </label>
                    <input type="text" class="form-control" name="message" id="commentaire">
                </div>
            </div>
            <div class="text-end">
                <button type="submit" id="valider" class="btn btn-primary" name="valider">valider</button>
            </div>
            </div>
            <?php
        } else {
            echo("Validez votre date de naissance");
        }
        ?>
        </form>
        </section>

        <?php
    }
}

require_once __DIR__ . '/common/fragments/layout.php';