<?php
require_once __DIR__.'/common/security/has-access.php';


$title = 'Confirmation envoie · Archeo IT';
function renderPage()
{
    ?>
    <p><b><h2><i></i></h2></b></p>

    <section id="team" class="team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center   pb-5">
                        <h2>Féllicitation!! <br/> Votre demande a bien été envoyé! <br>
                        <b>Archeo-IT</b> la traitera dans les plus bref délai. <br>
                            Merci
                        </h2>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}
require_once __DIR__.'/common/fragments/layout.php';