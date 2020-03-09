
<section class="hero is-info is-medium">
    <div class="hero-head">
        <nav class="navbar">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="index.php">
                        <h2 class="title is-2">FlashcardsJDA</h2>
                    </a>
                    <a role="button" class="navbar-burger burger ml-3 float-right" style="z-index : 20;" data-target="navbarMenuHeroA" aria-label="menu"
                        aria-expanded="false">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div id="navbarMenuHeroA" class="navbar-menu">
                    <div class="navbar-end">
                        <!-- Désactiver car il ne fonctionne pas <span class="navbar-item"> 
                            <div class="dropdown">
                                <div class="dropdown-trigger">
                                    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                                        <span>Classe</span>
                                        <span class="icon is-small">
                                            <i class="fas fa-angle-down" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                </div>
                                <div class="dropdown-menu" id="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        <a href="#" class="dropdown-item">
                                            6<span class="sup">ème</span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            5<span class="sup">ème</span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            4<span class="sup">ème</span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            3<span class="sup">ème</span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            2<span class="sup">de</span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            1<span class="sup">ère</span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            T<span class="sup">le</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </span> -->
                        <a class="navbar-item" href="https://www.jda-argentat.fr/contact/">
                            Contact
                        </a>
                        <a class="navbar-item" href="NouvelleCarte.php">
                            Ajouter une flashcard
                        </a>
                        <a class="navbar-item" href="reviser.php">
                            Réviser
                        </a>
                        <?php if($_COOKIE['admin'] == 'poulet') :?>
                        <a class="navbar-item" href="panel.php">
                            Gérer
                        </a>
                        <?php endif; ?>
                        <a class="navbar-item" href="https://github.com/O-dot-O/FlashcardJDA">
                            Github
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title">
                Bienvenue
            </h1>
            <h2 class="subtitle">
                FlashcardsJDA, un simple moyen de réviser
            </h2>
        </div>
    </div>
    <div class="hero-foot">
    </div>

</section>
<!--<nav class="phoneNav nav">
    <div class="nav-item">
        <h1><a href="index.php">Flashcard-JDA</a></h1>

    </div>
    <div class="justify-content-end nav-item">
        <a href="#" class="bars"><i style="position: absolute;right : 5px;font-size : 40px;color : #ffffff"
                class="fa fa-bars"></i></a>
    </div>



</nav>
<div class="phone-more">
    <div class="container-fluid">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="#">Plus</a></li>
            <li><a href="themes.php">Thème</a></li>
            <li><button data-toggle="modal" data-target="#leModal">Contactez nous</button>

            </li>
        </ul>
    </div>
</div>
-->