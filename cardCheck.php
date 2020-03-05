<?php
 session_start();
 $_SESSION['error'] = NULL;
 $_SESSION['success'] = NULL;
 $error = NULL;
 if(!empty($_POST['name']) && !empty($_POST['title']) && !empty($_POST['question']) && !empty($_POST['answer'])) {
     $my_File = fopen('js/json/cards.json','r+');//on ouvre le fichier cards.json 
 $nombre = 0;
 $char;
 while($char != ']') {
$char = fgetc($my_File);
     $nombre++;
 }
 fseek($my_File,$nombre-1);
 fputs($my_File,',{"name" : " '.$_POST['name'].'","title" : "'.$_POST['title'].'","question" : "'.$_POST['question'].'","answer" : "'.$_POST['answer'].'","Note" : "'.$_POST['note'].'"}');
 fputs($my_File,"]");
 fclose($my_File);//on ferme le fichier contenu dans $my_File en occurence cards.json
 $nombre = 0;
 $char = '';
$_SESSION['success'] = 1;
header("Location: /NouvelleCarte.php");
}else {
     $_SESSION['error'] = "Un ou plusieur champ obligatoire n'ont pas été rempli !\nPour supprimer cette alerte , merci de réactualiser votre page !";
     header('Location: /NouvelleCarte.php');
 }