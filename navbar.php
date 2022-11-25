<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><?php echo t('Accueil') ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo t('Lien') ?></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo t('Menu') ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled"><?php echo t('Handicapé') ?></a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="<?php echo t('Chercher') ?>" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><?php echo t('Chercher') ?></button>
                <a href="?lang=fr">
                    <img src="https://cdn-icons-png.flaticon.com/512/6070/6070113.png" alt="fr" style="width: 6vh;">
                </a>

                <a href="?lang=en">
                    <img src="https://cdn-icons-png.flaticon.com/512/4009/4009124.png" alt="en" style="width: 6vh;">
                </a>
            </form>
        </div>
    </div>
</nav>