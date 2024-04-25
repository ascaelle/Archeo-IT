<footer class="bg-light text-black pt-5 pb-4">

    <div class="container text-left">

        <div class="row">

            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase text-center mb-4 font-weight-bold  text-primary">Archeo-IT</h5>
                <p>Archeo-IT a pour objet d'étudier l'influence des nouvelles technologies de l'information et de la communication sur les sociétés et les cultures dans le monde, et d'apporter des réponses concrètes aux problèmes posés par leur usage.</p>
            </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-primary">vison</h5>
                    <p>
                        <a href="#" class="text-black " style="text-decoration: none;">Determination</a>
                    </p>
                    <p>
                        <a href="#" class=" text-black " style="text-decoration: none;">Apprendre</a>
                    </p>
                    <p>
                        <a href="#" class="text-black" style="text-decoration: none;">Comprendre</a>
                    </p>
                    <p>
                        <a href="#" class="text-black" style="text-decoration: none;">Consistance</a>
                    </p>
                    <p>
                        <a href="#" class="text-black" style="text-decoration: none;">Passion</a>
                    </p>
                    <p>
                        <a href="#" class="text-black" style="text-decoration: none;">Succes</a>
                    </p>
                </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Liens utile</h5>
                    <p>
                        <a href="https://kinsta.com/fr/blog/comment-devenir-un-developpeur-web/" class="text-black" style="text-decoration: none;">Devenir Dev</a>
                    </p>
                    <p>
                        <a href="https://apprendre-a-coder.com/" class="text-black" style="text-decoration: none;">Apprendre a coder</a>
                    </p>
                    <p>
                        <a href="https://www.nokia.com/thought-leadership/research/trend-report/?did=D00000007550&gad_source=1&gclid=CjwKCAjwuJ2xBhA3EiwAMVjkVDT4II-qoot2EUjQU775HKkIxylBHwbRPTqhtaEr5UO24Bm_cHY4JRoCFu0QAvD_BwE" class="text-black" style="text-decoration: none;">Nouvelles Technologies</a>
                    </p>
                    <p>
                        <a href="https://www.lemonde.fr/technologies/" class="text-black" style="text-decoration: none;">Le monde de la tech</a>
                    </p>
                </div>
            <div class="col-md-4 col-lg-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Nous contacter</h5>
                <p>
                    <i class="fas fa-home mr-3">54, Rue des paniers, 91800, Paris/France</i>
                </p>
                <p>
                    <i class="fas fa-envelope mr-3">archeoit@gmail.com</i>
                </p>
                <p>
                    <i class="fas fa-phone mr-3">+33 06 76 45 09 78</i>
                </p>
                <p>
                    <i class="fas fa-print mr-3">+01 335 633 77 </i>
                </p>
            </div>

            <hr class="mb-4">

            <div class="row align-items-center">

                <div class="col-md-7 col-lg-8">
                    <p>Copieright 02024 tout droits reservé par:
                        <a href="#" style="decoration: none;">
                            <strong class="text-primary">Archeo-IT</strong>
                        </a>
                    </p>
                </div>

                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-right">

                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/" class="btn-floating btn-sm text-black" style="font-size: 23px;"><i class="fab
                                fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/ascaelle_ruth" class="btn-floating btn-sm text-black" style="font-size: 23px;"><i class="fab
                                fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://en.wikipedia.org/wiki/Google%2B" class="btn-floating btn-sm text-black" style="font-size: 23px;"><i class="fab
                                fa-google-plus"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com/feed/" class="btn-floating btn-sm text-black" style="font-size: 23px;"><i class="fab
                                fa-linkedin-in"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.youtube.com/channel/UCz_1duAPy-7SiI4GVg9LvUA" class="btn-floating btn-sm text-black" style="font-size: 23px;"><i class="fab
                                fa-youtube"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/ascaelle_ruth?igsh=MTkzdTM3anF6Z2k0ag==" class="btn-floating btn-sm text-black" style="font-size: 23px;"><i class="fab
                                fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <ul>
        <li>
            <a class="nav-link" href="./login.php">Connexion</a>
        </li>
        <?php
        require_once __DIR__.'/../security/has-access.php';
        if (isAdmin()) {
            ?>
            <li>
                <a class="nav-link" href="./admin/demande-contact.php">
                    Demandes Contact
                </a>
            <li>
                <a class="nav-link" href="./admin/demande-inscription.php">
                    Demandes Inscription
                </a>
            </li>
            </li>
            <?php
        }
        ?>
    </ul>
</footer>

