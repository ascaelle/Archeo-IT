<?php
require_once __DIR__ . '/common/security/has-access.php';


$title = 'Conference · Archeo IT';
function renderPage()
{
    ?>
    <section id="conference" class="conference section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h1 class="text-center mt-5 display-3 fw-bold">PARTICIPEZ AUX CONFERENCES</h1>
                        <p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-black text-blue bg-blue pb-2">
                        <div class="img-area mb-4">
                            <img src="assets/image/conf.jpeg" alt="" class="img-fluid">
                            <div class="card-body">
                                <p>
                                <p><b>SecureWorld:</b></p>
                                <p><h4><b>Date: 14 et 25 aout 2024 </b></h4></p>
                                <p>Les conférences sur la cybersécurité rassemblent les plus grands leaders
                                    d'opinion et fournisseurs de solutions du secteur pour une éducation, une
                                    collaboration et un réseautage de haute qualité et à faible coût. Les
                                    participants quittent SecureWorld avec les connaissances et les outils
                                    nécessaires pour protéger l'entreprise à l'ère numérique.
                                </p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-black text-blue bg-blue pb-2">
                        <div class="img-area mb-4">
                            <img src="assets/image/con.jpeg" alt="" class="img-fluid">

                            <div class="card-body">

                                <p>
                                <p><b>JavaLand:</b></p>
                                <p><h4><b>Date: 06 avril 2024</b></h4></p>
                                <p>JavaLand a débuté la veille, le 7 avril, avec la Community Unconference.
                                    Les participants ont pu discuter spontanément de sujets dans un groupe
                                    spécifique ou simplement profiter de l'occasion pour avoir de premières
                                    discussions et se mettre dans l'ambiance des prochains jours – un peu
                                    comme un échauffement lors d'un Grand Prix.
                                </p>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-black text-blue bg-blue pb-2">
                        <div class="img-area mb-4">
                            <img src="assets/image/c.jpeg" alt="" class="img-fluid">

                            <div class="card-body">
                                <p>
                                <p><b>DevFest Paris:</b></p>
                                <p><h4><b>Date: Du 15 au 18 mai 2024</b></h4></p>
                                <p>DevFest Paris est de retour pour sa 6ème édition ! Rejoignez-nous pour
                                    une journée complète de conférences, d'ateliers et de réseautage avec
                                    la communauté des développeurs.
                                </p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <?php
}

require_once __DIR__ . '/common/fragments/layout.php';