<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Option 1: Include in HTML -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Accueil</title>
</head>

<body>
    <article class="dispo">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://cdn.pixabay.com/photo/2018/09/06/00/35/temple-3657496_960_720.jpg" class="d-block w-100" alt="temple-jupiter-romain-antique">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.pixabay.com/photo/2015/12/28/11/40/sculpture-1111260_960_720.jpg" class="d-block w-100" alt="sculpture-grec-statue-figure-art">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.pixabay.com/photo/2014/12/05/19/49/art-558483_960_720.jpg" class="d-block w-100" alt="art-dieux-scène-de-chasse">
                </div>
            </div>
        </div>
    </article>
    <main>
        <div class="fr">
            <h3 class="fr_h3"><?php echo t('Texte en Français') ?></h3>
            <p class="fr_p1">
                <?php
                $url = $_SERVER['REQUEST_URI'];
                if (strpos($url, "fr")) {
                    print "Je chante les combats du héros prédestiné qui, le premier, 

                    fuyant les rivages de Troie, aborda en Italie, près de Lavinium ;
    
                    longtemps sur terre et sur mer les dieux puissants
    
                    le malmenèrent, à cause de la colère tenace de la cruelle Junon ;";
                } else {
                    print "I sing of arms and the man, he who, exiled by fate,

                    first came from the coast of Troy to Italy, and to
                    
                    Lavinian shores – hurled about endlessly by land and sea,
                    
                    by the will of the gods, by cruel Juno’s remorseless anger, ";
                }
                ?>
            </p>
            <p class="fr_p2">
                <?php
                $url = $_SERVER['REQUEST_URI'];
                if (strpos($url, "fr")) {
                    print "il endura aussi bien des maux à la guerre, avant de fonder sa ville

                    et d'introduire ses dieux au Latium, le berceau de la race latine,
    
                    des Albains nos pères et de Rome aux altières murailles.
    
                    Muse, rappelle-moi quelle cause, quelle offense à sa volonté, quel chagrin
    
                     poussa la reine des dieux à imposer à un héros d'une piété si insigne";
                } else {
                    print " long suffering also in war, until he founded a city

                    and brought his gods to Latium: from that the Latin people
                    
                    came, the lords of Alba Longa, the walls of noble Rome.
                    
                    Muse, tell me the cause: how was she offended in her divinity, ";
                }
                ?>
            </p>
            <p class="fr_p3">
                <?php
                $url = $_SERVER['REQUEST_URI'];
                if (strpos($url, "fr")) {
                    print "de traverser tant d'aventures, d'affronter tant d'épreuves ?

                    Les âmes des dieux éprouvent-elles de si grands ressentiments ?";
                } else {
                    print "how was she grieved, the Queen of Heaven, to drive a man,

                    noted for virtue, to endure such dangers, to face so many
                    
                    trials? Can there be such anger in the minds of the gods? ";
                }
                ?>
            </p>
        </div>
        <div class="lt">
            <h3 class="lt_h3"><?php echo t('Texte en Latin') ?></h3>
            <p class="lt_p1">
                Arma uirumque cano, Troiae qui primus ab oris

                Italiam, fato profugus, Lauiniaque uenit

                litora, multum ille et terris iactatus et alto

                ui superum saeuae memorem Iunonis ob iram ;
            </p>
            <p class="lt_p2">
                multa quoque et bello passus, dum conderet urbem,

                inferretque deos Latio, genus unde Latinum,

                Albanique patres, atque altae moenia Romae.

                Musa, mihi causas memora, quo numine laeso,

                quidue dolens, regina deum tot uoluere casus
            </p>
            <p class="lt_p3">
                insignem pietate uirum, tot adire labores

                impulerit. Tantaene animis caelestibus irae ?
            </p>
        </div>
    </main>

    <article class="cards">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://www.arretetonchar.fr/wp-content/uploads/2020/11/Lille_Wicar_Virgile.jpg" class="card-img-top" alt="Enéide">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo t('Enéide') ?></h5>
                        <p class="card-text"><?php echo t('Auteur') ?> : Virgile</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <a href="#" class="btn btn-primary"><?php echo t('Découvrir') ?></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://www.inspirant.fr/wp-content/uploads/2017/06/Marc-Aur%C3%A8le.jpg" class="card-img-top" alt="Pensées pour moi-même">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo t('Pensées pour moi-même') ?></h5>
                        <p class="card-text"><?php echo t('Auteur') ?> : Marc Aurel</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <a href="#" class="btn btn-primary"><?php echo t('Découvrir') ?></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://toysondor.files.wordpress.com/2019/07/platon.jpg" class="card-img-top" alt="platon">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo t('timée et criztias') ?></h5>
                        <p class="card-text"><?php echo t('Auteur') ?> : Platon</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <a href="#" class="btn btn-primary"><?php echo t('Découvrir') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </article>
</body>

</html>