<?php 
require_once('header.php');
?>
<body>
    <nav class="navbar">
        <div class="links">
            <h4 style="display: inline;position: relative;" href="index.html">FlashCards-JDA</h4>
            <div style="margin : none; width : 40%;position: relative;left : 0px;" class="separator"></div>
            <!--<a href="liste.html">Liste</a>-->
            <a href="mailto:nicolasgiannettini1@gmail.com">Contact</a>
            <a href="index.php">Accueil</a>
            <a href="themes.php">Theme</a>
        </div>
        <ul class="nav justify-content-end">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle arrow-down btn btn-light" data-toggle="dropdown" href="#"
                    role="button" aria-haspopup="true" aria-expanded="false">Bac </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Mathématiques</a>
                    <a class="dropdown-item" href="#">Histoire</a>
                    <a class="dropdown-item" href="#">Français</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle arrow-down btn btn-light" data-toggle="dropdown" href="#"
                    role="button" aria-haspopup="true" aria-expanded="false">Brevet </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Mathématiques</a>
                    <a class="dropdown-item" href="#">Histoire</a>
                    <a class="dropdown-item" href="#">Français</a>
                    <a class="dropdown-item" href="#">EMC</a>
                    <a class="dropdown-item" href="#">Géographie</a>
                </div>
            </li>

        </ul>

    </nav>
    <asside class="asside container-fluid" style="height: 100vh;">
        <h2 class="uppasside">FlashCards-JDA</h2>
        <div class="separator uppasside"></div>
        <h2 class="asside-header">Catégorie</h2>
        <form class="form-inline" action="#" method="get">
            <input type="number" placeholder="Numéro de carte" class="numero form-control mr-sm-2">
        </form>
        <ul class="matierre">
            <div class="needed">
                <drop class="bug">
                    <span class="bug txt dropdown-btn arrow-down">Brevet </span>
                    <nav class="navbarr">

                        <ul class="matierre matierre1">
                            <li><a class="DropDown brevet math" href="#">Mathématique</a></li>
                            <li><a class="DropDown brevet fran" href="#">Français</a></li>
                            <li><a class="DropDown brevet angl" href="#">Anglais</a></li>
                            <li><a class="DropDown brevet phys" href="#">Physique</a></li>
                            <li><a class="DropDown brevet svt" href="#">S.V.T</a></li>
                            <li><a class="DropDown brevet tech" href="#">Technologie</a></li>
                            <li><a class="DropDown brevet hist" href="#">Histoire</a></li>
                            <li><a class="DropDown brevet Geog" href="#">Géographie</a></li>
                            <li><a class="DropDown brevet emc" href="#">EMC</a></li>
                            <li><a class="DropDown brevet musi" href="#">Musique</a></li>
                            <li><a class="DropDown brevet art" href="#">Art</a></li>
                        </ul>
                    </nav>
                </drop>
            </div>


            <div class="needed">
                <drop class="bug2">
                    <span class="bug2 txt dropdown-btn arrow-down">Bac </span>
                    <nav class="navbarr">

                        <ul class="matierre matierre2">
                            <li><a class="DropDown2 bac math" href="#">Mathématiques</a></li>
                            <li><a class="DropDown2 bac fran" href="#">Français</a></li>
                            <li><a class="DropDown2 bac angl" href="#">Anglais</a></li>
                            <li><a class="DropDown2 bac phys" href="#">Physique</a></li>
                            <li><a class="DropDown2 bac svt" href="#">S.V.T</a></li>
                            <li><a class="DropDown2 bac tech" href="#">Technologie</a></li>
                            <li><a class="DropDown2 bac hist" href="#">Histoire</a></li>
                            <li><a class="DropDown2 bac Geog" href="#">Géographie</a></li>
                            <li><a class="DropDown2 bac emc" href="#">EMC</a></li>
                            <li><a class="DropDown2 bac art" href="#">Art</a></li>
                            <li><a class="DropDown2 bac espa" href="#">Espagnol</a></li>
                        </ul>
                    </nav>
                </drop>
            </div>
        </ul>

        <h2 class="asside-header">Autre</h2>
        <ul class="matierre">
            <!--<li><a href="liste.html">Listes et Matière</a></li>-->
            <li><a href="mailto:nicolasgiannettini1@gmail.com">Contactez nous </a><i style="margin : 4px;" class="fa fa-envelope" aria-hidden="true"></i></li>
            <li><a href="#">Plus d'information</a><i style="margin : 2px" class="fa fa-info-circle" aria-hidden="true"></i></li>
            <li><a href="themes.php">Thèmes</a><i style="margin: 4px;" class="fa fa-clipboard" aria-hidden="true"></i></li>
        </ul>

        <h2 class="asside-header">Fondateurs</h2>
        <ul class="matierre">
            <li><a href="#">Nicolas Giannettini</a></li>
            <li><a href="https://github.com/Boudial">Maxence Raynal</a></li>

        </ul>


    </asside>
    <nav class="phoneNav nav">
        <div class="nav-item">
            <h1 style="position : relative;margin :0; padding: 0;">FlashCards-JDA</h1>
            
        </div>
        <div class="justify-content-end nav-item">
        <a href="#" class="bars"><i style="position: absolute;right : 5px;font-size : 40px;color : #ffffff" class="fa fa-bars"></i></a>
    </div>
        <!--
        <div style="width: 9%;"></div>
        <div class="justify-content-end">
            <div class="menuicocontainer">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </div>-->

    </nav>
    <!--VVV  CONTENU DE LA PAGE  VVV-->
    <div class="phone-more">
        <div class="c">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#">Plus</a></li>
                <li><a href="themes.html">Thème</a></li>
                <li><a href="mailto:nicolasgiannettini1@gmail.com">Contactez nous</a></li>
            </ul>
        </div>
 </div>