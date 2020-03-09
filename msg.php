<?php
 session_start();
 $_SESSION['error'] = NULL;
 $_SESSION['success'] = NULL;
 $canAccessToJSON = false;
 $error = NULL;
 if($_COOKIE['admin'] != 'poulet'){
    header('location: ./');
}
 if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
    $message = array();
    
    $message['name'] = $_POST['name'];
    $message['email'] = $_POST['email'];
    $message['message'] = $_POST['message'];
    $message['date'] = date("d/m/Y H:i");
    $message['id'] = date("dmYHis");

    $js = file_get_contents('js/json/messages.json');

    $js = json_decode($js, true);

    $js[] = $message;

    $js = json_encode($js); 

    file_put_contents('js/json/messages.json', $js);

    header("location: ./");
}elseif(isset($_GET['del'])) {//supprime la carte
    $message = file_get_contents('js/json/messages.json');
    $message = json_decode($message, true);

    $verifier = array();

    for($i = 0;$i < count($message);$i++) {
        if($message[$i]['id'] != $_GET['del']) {
            $verifier[] =  $message[$i];
        }
    }
    $verifier = json_encode($verifier) ;
    file_put_contents('js/json/messages.json', $verifier);

    header("location: /reviser.php");
}