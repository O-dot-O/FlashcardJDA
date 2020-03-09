<?php 
session_start();
require_once('head.php');
    require_once('menu.php');
    require_once("V0.1.php");//cache le corp du hero !
    require_once('end.php');

?>
<div class="container">
    <?php
if($_SESSION['error'] != NULL) { ?>
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

<article class="message is-info mt-5">
    <div class="message-header">
        <p>Demande</p>
        <button class="delete" aria-label="delete"onclick="$('.message').fadeOut();"></button>
    </div>
    <div class="message-body">
    <i>Pour le bien de tous les utilisateurs, veuillez ne rien écrire de déplacé dans vos flashcards. Merci.</i>
    </div>
</article>

<form action="cardCheck.php" method="POST">
<label for="name">Votre nom et prenom : <span class="disable">(obligatoire)</span></label>
<div class="field">
    <div class="control">
        <input type="text" class="input is-primary is-normal" require aria-valuemax="2500" name="name" placeholder="Entrez votre nom et votre prénom"/>
    </div>
</div>
<br>
<label for="title">Matière de la Flashcard : <span class="disable">(obligatoire)</span></label>
<div class="field">
    <div class="control">
        <div class="select is-primary is-fullwidth">
        <select name="title">
            <option value="Mathématiques">Mathématiques</option>
            <option value="Français">Français</option>
            <option value="Physique">Physique</option>
            <option value="S.V.T">Science et vie de la terre</option>
            <option value="Technologie">Technologie</option>
            <option value="Anglais">Anglais</option>
            <option value="Espagnol">Espagnol</option>
            <option value="Histoire">Histoire</option>
            <option value="Géographie">Géographie</option>
            <option value="EMC">EMC</option>
            <option value="SES">SES</option>
        </select>
        </div>
    </div>
</div>
<br>
<label for="question">Question de la Flashcard : <span class="disable">(obligatoire)</span></label>
<div class="field">
    <div class="control">
        <input type="text" aria-valuemax="2500" class="input is-primary is-normal" require name="question" placeholder="Entrez la question de la Flashcard"/>
    </div>
</div>
<br>
<label for="answer">Réponse de la Flashcard : <span class="disable">(obligatoire)</span></label>
<div class="field">
    <div class="control">
        <input type="text" aria-valuemax="2500" class="input is-primary is-normal" require name="answer" placeholder="Entrez la réponse de la Flashcard"/>
    </div>
</div>
<br>
<label for="note">Une aide ou une information que vous souhaitez apporter : <span class="disable">(facultatif)</span></label>
<div class="field">
    <div class="control">
        <input type="text" aria-valuemax="2500" class="input is-primary is-normal" name="note" placeholder="Entrez une note à cette Flashcard"/>
    </div>
</div>
<div class="field">
<div class="control">
<input type="submit" class=" mt-lg-4 button is-info"value="Ajouter ma Flashcard"/>
</div>
</div>
</form>
</div>
<style>
    form {
        margin : 1%;
    }
    .disable {
        opacity : .5;
    }
</style>
<script>
    $('.dismissAlert').on({
        'click' : function() {
            $('.alert').hide(300);
        }
    })
</script>