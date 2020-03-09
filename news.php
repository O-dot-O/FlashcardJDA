<?php
if(!empty($_POST['from']) && !empty($_POST['title']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
    unlink('js/json/annonce.json');
    echo('hello');
    $jour = date('d'); $mois = date('m'); $annee = date('Y'); $heure = date('H') + 1; $minute = date('i'); 

    $myFile = fopen('js/json/annonce.json', 'a');

        fputs($myFile,'{"from" : "'. $_POST['from'] . '","title" : "' . $_POST['title'] . '","subject" : "' . $_POST['subject'] . '","message" : "' . $_POST['message'] . '","time" : "'.$jour .'/' . $mois . '/' .$annee.'     ' . $heure . ':' . $minute .'"}');

    fclose($myFile);
}