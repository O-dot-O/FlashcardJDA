<?
if(!empty($_POST['choice'])){
    $choice = $_POST['choice'];
    setcookie("check",$choice,time() + 365*24*3600);
    header('Location: /body.php');
    exit;
}
if(!empty($_COOKIE['check'])){
  header('Location: /body.php');
  exit;
}
require_once('menu.php');
?>
<div class="main">
<div class="flashCards">
  <div class="flashCards-content">
    <h3 class="FCTitle">Bienvenue sur FlashCards JDA</h3>
      <p>FlashCards JDA c'est un simple moyen de révision, utilisant des FlashCards , pour savoir ce que c'est et/ou même réviser nous vous invitons à accepter les cookies afin d'avoir accèes au site !</p>
  </div>
</div>
</div>
<!-- $name = "Nicolas";
setcookie('Nom',$name,time() + 365*24*3600);
if(!empty($_POST['NAME'])) {
  $name = $_POST['NAME'];
  setcookie("Nom",$name,time() + 365*24*3600);
}
if($_COOKIE['Nom'] == "Malya") {
  echo("La plus jolie");
}
?> -->
<style media="screen">
* {box-sizing: border-box;}
body {
  margin : 0;
  padding : 0;
  font-family: 'Arial',sans-serif;
}
  .cookieCheck {
    z-index : 1000;
    position: fixed;
    display: flex;
    flex-wrap: wrap;
    bottom : 0px;
    height : auto;;
    padding : 30px 5px;
    width : 100%;
    background-color: #71a3b8;
  }
  .cookieCheck span {
    float: left;
    font-size: 1.2em;
    color : #dfdfdf;
  }
  form {
    margin : 0;
  }
  .form {
    padding : 0 50px;
    position: absolute;
    right : 0;
  }
</style>
<?php if(empty($_COOKIE['check'])){ ?>
  <div class="cookieCheck">
    <span>Notre site utilise des cookie afin de pouvoir sauvegarder les themes que vous séléctionez !</span>
<div class="form">
  <form action="#" method="post">
    <label for="choice">Accepter</label>
    <input type="radio" name="choice" value="oui"/>

    <input type="submit" class="btn btn-success" value="Envoyer"/>
  </form>
</div>
</div>
<?php }?>