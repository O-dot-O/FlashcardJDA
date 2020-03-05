<?php 
session_start();
require_once('head.php');
require_once("menu.php");
?>

<body>

    <main class="main container-fluid" style="min-height: 100vh;">
        <div class="flashCards div1">
            <form action="#" method="get">
                <?php
if($_SESSION['error'] != NULL) { ?>
                <div class="alert alert-danger">
                    <span class="dismissAlert" style="float : right;cursor : pointer;">&times;</span>
                    <?php echo($_SESSION['error']);?>
                </div>
                <?php $_SESSION['error'] = NULL;}?>
                <label for="name">Votre nom et prenom :</label>
                <input type="text" class="NFC" require name="name" placeholder="Entrez votre nom et votre prénom" />
                <br>
                <label for="title">Titre de la Flashcard :</label>
                <input type="text" class="NFC" require name="title" placeholder="Entrez le titre de la Flashcard" />
                <br>
                <label for="question">Question de la Flashcard :</label>
                <input type="text" class="NFC" require name="quetion"
                    placeholder="Entrez la question de la Flashcard" />
                <br>
                <label for="answer">Réponse de la Flashcard :</label>
                <input type="text" class="NFC" require name="answer" placeholder="Entrez la réponse de la Flashcard" />
                <br>
                <label for="note">Une information en plus que vous souhaitez apporter ?</label>
                <select name="note" class="select">
                    <option value="yes">Oui</option>
                    <option value="No">Non</option>
                    <input type="text" class="NFC" name="note" placeholder="Entrez la note" disabled />
                </select>
                <input type="submit" value="Ajouter ma Flashcard" />
            </form>
        </div>
    </main>
    <?php 
require_once("modal.php");
require_once("end.php");
?>
</body>

</html>