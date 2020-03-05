<?php 
session_start();
require_once('head.php');
require_once("menu.php");
?>

<body>

    <main class="main container-fluid">
        <div class="flashCards div1">
        <?php
if($_SESSION['error'] != NULL) { ?>
            <article class="message is-danger">
              <div class="message-header">
                <p>Erreur</p>
                <button class="delete" aria-label="delete"></button>
              </div>
                <div class="message-body">
                    <?php echo($_SESSION['error']);?>
                </div>
            </article>
            <?php $_SESSION['error'] = NULL;}?>

<?php if($_SESSION['success'] != NULL) { ?>
            <article class="message is-success">
              <div class="message-header">
                <p>Information</p>
                <button class="delete" aria-label="delete"></button>
              </div>
                <div class="message-body">
                    <?php echo("Votre flashcard à été ajoutée avec succès !\nPour supprimer cette alerte , merci de réactualiser votre page !");?>
                </div>
            </article>
            <?php $_SESSION['success'] = NULL;}?>
                    <form action="cardCheck.php" method="POST">
            <label for="name">Votre nom et prenom : <span class="boutonform">(obligatoire)</span></label>
            <div class="field">
                <div class="control">
                    <input type="text" class="input is-primary is-normal" require name="name"
                        placeholder="Entrez votre nom et votre prénom" />
                </div>
            </div>
            <br>
            <label for="title">Matière de la Flashcard : <span class="boutonform">(obligatoire)</span></label>
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
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <label for="question">Question de la Flashcard : <span class="boutonform">(obligatoire)</span></label>
            <div class="field">
                <div class="control">
                    <input type="text" class="input is-primary is-normal" require name="question"
                        placeholder="Entrez la question de la Flashcard" />
                </div>
            </div>
            <br>
            <label for="answer">Réponse de la Flashcard : <span class="boutonform">(obligatoire)</span></label>
            <div class="field">
                <div class="control">
                    <input type="text" class="input is-primary is-normal" require name="answer"
                        placeholder="Entrez la réponse de la Flashcard" />
                </div>
            </div>
            <br>
            <label for="note">Une aide ou une information que vous souhaitez apporter : <span
                    class="boutonform">(facultatif)</span></label>
            <div class="field">
                <div class="control">
                    <input type="text" class="input is-primary is-normal" name="note"
                        placeholder="Entrez une note à cette Flashcard" />
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <input type="submit" class=" mt-lg-4 button is-info" value="Ajouter ma Flashcard" />
                </div>
            </div>
        </form>
        </div>
    </main>
    <?php 
require_once("modal.php");
require_once("end.php");
?>
</body>
<script>
var x = document.querySelector('.delete');
x.addEventListener('click', function() {
    $('.message').hide();"
});
</script>
</html>