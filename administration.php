<?php
require_once __DIR__ . '/common/security/has-access.php';


$title = 'Administration · Archeo IT';
function renderPage()
{
    ?>


    <section id="administration" class="administration section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Retrouvez içi les membres du conseil administratif de Archeo-IT</h2>
                        <p>
                            Pour mener à bien ces activités et sa vision, l'associatiob <b>Archeo-IT</b> possedant
                            aujourd'hui plus de
                            500 nembre est dirigé par un groupe de jeunes dames dynamiques
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-3">
                    <div class="card text-black text-blue bg-blue pb-2">
                        <div class="img-area mb-4">
                            <img src="assets/image/presidente.jpg" alt="" class="img-fluid rounded-circle">
                            <div class="card-body">
                                <p>
                                <h3 class="card-title py-2">Ascaëlle Ruth YIMGA NANA</h3>
                                <p <b>Dev Fullstack</b> <br/>
                                <b>PRÉSIDENTE</b> de L'ASSOCIATION Archeo-IT. 10 ans d'expérience pro. Elle est très motivée et déterminer dans son travail.

                                <p class="socials">
                                    <li class="list-inline-item">
                                        <a href="https://www.facebook.com/"
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://twitter.com/ascaelle_ruth"
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://en.wikipedia.org/wiki/Google%2B"
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-google-plus"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.linkedin.com/feed/"
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.youtube.com/channel/UCz_1duAPy-7SiI4GVg9LvUA"
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-youtube"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.instagram.com/ascaelle_ruth?igsh=MTkzdTM3anF6Z2k0ag=="
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-instagram"></i></a>
                                    </li>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3">
                    <div class="card text-black text-blue bg-blue pb-2">
                        <div class="img-area mb-4">
                            <br>
                            <img src="assets/image/vice.jpeg" alt="" class="img-fluid rounded-circle">

                            <div class="card-body">

                                <p>
                                <h3 class="card-title py-2">Nadine NGUEKAM</h3>
                                <p class="card-text"><b>Testeuse</b> depuis 15 ans maintenant, <br/>
                                    Elle occupe le poste de <b>VICE PRÉSIDENTE</b> de L'ASSOCIATION
                                    Archeo-IT
                                </p>
                                <p class="socials">
                                    <li class="list-inline-item">
                                        <a href="https://www.facebook.com/"
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://twitter.com/ascaelle_ruth"
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://en.wikipedia.org/wiki/Google%2B"
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-google-plus"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.linkedin.com/feed/"
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.youtube.com/channel/UCz_1duAPy-7SiI4GVg9LvUA"
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-youtube"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.instagram.com/ascaelle_ruth?igsh=MTkzdTM3anF6Z2k0ag=="
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-instagram"></i></a>
                                    </li>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-3">
                    <div class="card text-black text-blue bg-blue pb-2">
                        <div class="img-area mb-4">
                            <br>
                            <img src="assets/image/secretaire.jpeg" alt=""
                                 class="img-fluid rounded-circle">

                            <div class="card-body">
                                <p>
                                    <br>
                                <h3 class="card-title py-2">Faquira FOLEFACK WAMBA</h3>
                                <p class="card-text"><b>Project Manager</b> exerçant il y'a quelques
                                    années, <br/>
                                    Elle est la <b>SECRETAIRE</b> de L'ASSOCIATION Archeo-IT
                                </p>
                                <p class="socials">
                                    <li class="list-inline-item">
                                        <a href="https://www.facebook.com/"
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://twitter.com/ascaelle_ruth"
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://en.wikipedia.org/wiki/Google%2B"
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-google-plus"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.linkedin.com/feed/"
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.youtube.com/channel/UCz_1duAPy-7SiI4GVg9LvUA"
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-youtube"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.instagram.com/ascaelle_ruth?igsh=MTkzdTM3anF6Z2k0ag=="
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-instagram"></i></a>
                                    </li>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-3">
                    <div class="card text-black text-blue bg-blue pb-2">
                        <div class="img-area mb-4">
                            <br>
                            <img src="assets/image/tresoriere.jpeg" alt=""
                                 class="img-fluid rounded-circle">

                            <div class="card-body">
                                <p>
                                    <br>
                                <h3 class="card-title py-2">Ines Blanche TENO</h3>
                                <p class="card-text"><b>DevOps</b> de formation,<br/>
                                    Tiens la <b>TRESORERIE</b> DE L'ASSOCIATION Archeo-IT
                                </p>
                                <p class="socials">
                                    <li class="list-inline-item">
                                        <a href="https://www.facebook.com/"
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://twitter.com/ascaelle_ruth"
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://en.wikipedia.org/wiki/Google%2B"
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-google-plus"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.linkedin.com/feed/"
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.youtube.com/channel/UCz_1duAPy-7SiI4GVg9LvUA"
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-youtube"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.instagram.com/ascaelle_ruth?igsh=MTkzdTM3anF6Z2k0ag=="
                                           class="btn-floating btn-sm text-black"
                                           style="font-size: 23px;"><i class="fab
                                fa-instagram"></i></a>
                                    </li>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
    </section>


    <?php
}

require_once __DIR__ . '/common/fragments/layout.php';