<! DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <base href="http://localhost/archeo-it/"/>
    <link rel="stylesheet" href="assets/styles/index.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./assets/image/archeologo.png" type="image/png">
    <link rel="shortcut icon" href="/archeo-it/assets/image/archeologo.png" type="image/png">
    <link rel="stylesheet" href="assets/styles/index.css">
    <link rel="stylesheet" href="<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<?php require_once __DIR__ . '/navbar.php'; ?>
<body>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/image/space.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5>L’IA au cœur du quotidien</h5>
                <p>Une des avancées technologiques les plus prometteuses pour l’avenir de l’IA est le deep learning, qui repose sur l’utilisation de réseaux neuronaux profonds. Ces techniques permettent à l’IA d’apprendre de manière autonome à partir de données massives, ce qui ouvre de nouvelles perspectives passionnantes.</p>
                <p><a href="contact.php" class="btn btn-primary mt-3">Apprendre plus</a></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/image/ordi.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5>Résoudre le problème</h5>
                <p>La création rapide de données et l'escalade des besoins en matière de stockage et de traitement des IA, peuvent entraîner une pression importante sur l'infrastructure existante au sein de votre entreprise. Pour mettre en œuvre l'IA et maximiser sa valeur opérationnelle, il est essentiel de résoudre ces problèmes d'infrastructure informatique.</p>
                <p><a href="#" class="btn btn-primary mt-3">Apprendre plus</a></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/image/arriere.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5>Innovation et création</h5>
                <p>Le développement des IA est également susceptible de bouleverser notre rapport à l’innovation et à la création. Les processus d’apprentissage et de création automatisés pourront assister de nombreux corps de métier. L’objectif ? Être plus productif, plus rapide, plus créatif. De nombreux secteurs d’activité pourront donc être touchés (voire remplacés). </p>
                <p><a href="#" class="btn btn-primary mt-3">Apprendre plus</a></p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

    <main>
        <?php renderPage(); ?>
    </main>
    <?php require_once __DIR__ . '/footer.php'; ?>

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous">
    </script>
</body>
</html>