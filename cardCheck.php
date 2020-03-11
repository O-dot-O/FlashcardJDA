<?php
 session_start();
 $_SESSION['success'] = NULL;
 $canAccessToJSON = false;
 $error = NULL;
 if(!empty($_POST['name']) && !empty($_POST['title']) && !empty($_POST['question']) && !empty($_POST['answer'])) {
    $card = array();
    
    $card['name'] = $_POST['name'];
    $card['title'] = $_POST['title'];
    $card['question'] = $_POST['question'];
    $card['answer'] = $_POST['answer'];
    $card['note'] = $_POST['note'];
    $card['date'] = date("d/m/Y H:i");
    $card['id'] = date("dmYHis");
    $card['is-adminchecked'] = false;
    if($_COOKIE['admin'] == 'poulet') :
        $card['is-adminchecked'] = true;
    endif;

    $js = file_get_contents('js/json/cards.json');

    $js = json_decode($js, true);

    $js[] = $card;

    $js = json_encode($js); 

    file_put_contents('js/json/cards.json', $js);

    $_SESSION['success'] = "Votre carte a bien été ajoutée !";


    header("location: /reviser.php");
}elseif(isset($_GET['del'])) {//supprime la carte
    $card = file_get_contents('js/json/cards.json');
    $card = json_decode($card, true);

    $verifier = array();

    for($i = 0;$i < count($card);$i++) {
        if($card[$i]['id'] != $_GET['del']) {
            $verifier[] =  $card[$i];
        }
    }
    $verifier = json_encode($verifier) ;
    file_put_contents('js/json/cards.json', $verifier);

    header("location: ./");
}