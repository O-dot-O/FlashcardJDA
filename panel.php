<?php 
session_start(); 
if($_COOKIE['admin'] != 'poulet'){
    header('location: ./');
}
require_once('head.php');
require_once('menu.php');
require_once('V0.1.php');
?>
<div class="container">

<?php if($_SESSION['error'] != NULL) { ?>
<article class="message is-danger mt-5">
    <div class="message-header">
        <p>Erreur</p>
        <button class="delete" aria-label="delete"onclick="$('.message').fadeOut();"></button>
    </div>
    <div class="message-body">
    <?php echo($_SESSION['error']);?>
    </div>
</article>
<?php $_SESSION['error'] = NULL;}?>

<?php if($_SESSION['success'] != NULL) { ?>
<article class="message is-success mt-5">
    <div class="message-header">
        <p>Information</p>
        <button class="delete" aria-label="delete" onclick="$('.message').fadeOut();"></button>
    </div>
    <div class="message-body">
    <?php echo($_SESSION['success']);?>
    </div>
</article>
<?php $_SESSION['success'] = NULL;}?>
<label for="cardContent">Contenu de cards.json :</label>
    <div class="field">
        <div class="control">
            <form action="admin.php" method="post">
            <textarea class="form-control bg-dark text-light" placeholder="Contenu normalment placé ici " name="cardContent" style="min-height : 400px;"><?php
              $my_File = fopen('js/json/cards.json','r+');
              $str;
              $i = 0;
              while($char != ']') {
                $char = fgetc($my_File);
                    $str[$i] = $char;
                    echo($str[$i]);
                    $i++;
                 }
                 fclose($my_File);
             ?></textarea>
             <input type="submit" class="button w-100 mt-2 is-info" value="Envoyer le nouveau fichier">
             </form>
        </div>
    </div>
                 <hr>

                 <div class="field">
        <div class="control">
            <h1 class="title">Ajouter une pop-up</h1>
            <form action="news.php" method="post">
                
            <div class="field">
                    <div class="control">
                        <label for="subject">Votre prénom :</label>
                        <input type="text" class="input" name="from" placeholder="Veuillez entrer le titre de la pop-up">
                    </div>
                </div>
            
                <div class="field">
                    <div class="control">
                        <label for="subject">Titre :</label>
                        <input type="text" class="input" name="title" placeholder="Veuillez entrer le titre de la pop-up">
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <label for="subject">Sujet :</label>
                        <input type="text" class="input" name="subject" placeholder="Veuillez entrer le sujet de la pop-up">
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <label for="subject">Message :</label>
                        <input type="text" class="input" name="message" placeholder="Veuillez entrer le message de la pop-up">
                    </div>
                </div>

                <input type="submit" class="mb-5 mt-2 w-100 button is-primary" value="Ajouter ma pop-up">
             </form>
        </div>
    </div>
        
</div>
<?php require_once('end.php');?>