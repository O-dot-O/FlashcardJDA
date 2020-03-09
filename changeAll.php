<?php
session_start(); 
if($_COOKIE['admin'] == 'poulet') {
if(!empty($_POST['cardContent'])) {
    unlink('js/json/cards.json');
$myFile = fopen('js/json/cards.json','a+');
    $i = 0;
      while($char != ']') {
        $char = $_POST['cardContent'][$i];
            $str[$i] = $char;
            fputs($myFile,$str[$i]);
            $i++;
         }
         fclose($myFile);
         $_SESSION['success'] = "Le fichier a été modifié avec succès !"; 
         header('Location: /panel.php');
        exit();
}else{
    $_SESSION['error'] = "Un problème est survenu durant le remplacement du fichier existant : le fichier est vide !";
    header('Location: /panel.php');
    exit();
}
}else {
    header('Location: /checkFlashCard.php');
    exit();
}