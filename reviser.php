<?php 
require_once('head.php');
require_once('menu.php');
$card = file_get_contents('js/json/cards.json');
$card = json_decode($card, true);
?>
<div class="container">
    <div class="field">
        <div class="mt-5 control">
            <input type="text" inputmode="numeric" pattern="[0-9]*" class="input number form-control-range w-50 is-primary search" name="search"
                placeholder="Numéro de carte">
        </div>
    </div>
    <div class="nextToForm">
        <button class="button icon searcher is-medium is-info is-medium">
            <i class="fas fa-search"></i>
        </button>
    </div>

    <div class="rightSideBorder">
        <span class="nb-here"></span>
    </div>

    <div class="mt-5 card">
        <div class="card-header">
            <p class="FCTitle"><?php echo$card[0]['title']; ?></p>
            <div class="nextToBorderRight">
                <span class="vtag tag is-success is-vcentered">Vérifié</span>
                <button class="button prev-btn" onclick="lodcarde()"><i class="fa fa-arrow-alt-circle-left"></i></button>
                <button class="button next-btn" onclick="lodcarde()"><i class="fa fa-arrow-alt-circle-right"></i></button>
            </div>
        </div>
        <div class="card-body">
            <p class="FCQuestion"><?php echo$card[0]['question']; ?></p>
            <div class="level">
                <div class="level-left">
                    <p class="FCAnswer"><?php echo$card[0]['answer']; ?></p>
                </div>
                <div class="level-right">
                    <input type="button" value="Afficher la réponse" class="is-info button Affa">
                </div>
            </div>
            <p class="FCNote"><?php echo$card[0]['note']; ?></p>
        </div>
        <div class="card-footer">
            <div class="from"><?php echo$card[0]['name']; ?></div>
        </div>
    </div>
    <!--
    <article class="message is-info mt-5">
    <div class="message-header">
        <p>Information</p>
        <button class="delete" aria-label="delete"onclick="$('.message').fadeOut();"></button>
    </div>
</article>
-->
</div>
<?php require_once("footer.php");
require_once("V0.1.php");//cache le corp du hero !
require_once('end.php');?>