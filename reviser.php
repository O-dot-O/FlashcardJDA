<?php require_once('head.php');require_once('menu.php');
$card = file_get_contents('js/json/cards.json');
$card = json_decode($card, true);
?>
<div class="container">
    <div class="field">
        <div class="mt-5 control">
            <input type="number" class="input number form-control-range w-50 is-primary search" name="search" placeholder="Numéro de carte">
        </div>
    </div>
<style>
.nextToForm {
    position : absolute;
    top : 0rem;
    left : 52%;
}
</style>
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
        <button class="button prev-btn"><i class="fa fa-arrow-alt-circle-left"></i></button>
        <button class="button next-btn"><i class="fa fa-arrow-alt-circle-right"></i></button>
        </div>
        </div>
        <div class="card-body">
        <p class="FCQuestion"><?php echo$card[0]['question']; ?></p>
        <p class="FCAnswer"><?php echo$card[0]['answer']; ?></p>
        <p class="FCNote"><?php echo$card[0]['note']; ?></p>
        </div>
        <div class="card-footer">
        <div class="from"><?php echo$card[0]['name']; ?></div>
        </div>
    </div>

    <article class="message is-info mt-5">
    <div class="message-header">
        <p>Information</p>
        <button class="delete" aria-label="delete"onclick="$('.message').fadeOut();"></button>
    </div>
</article>

</div>
<style>
.nextToBorderRight {
    position : absolute;
    right : 10px;
    top : 5px;
    padding : 0 10px;
}

.rightSideBorder {
    position : absolute;
    right : 20px;
    top : -0.5rem;
    font-size : 2rem;
    font-weight : bold;
}
.from {
    float : left;
}
.from::before {
    content : "De : "
}
.time {
    position : absolute;
    right : 10px;
}
.time::before {
    content : "Le : "
}

</style>

<?php require_once("V0.1.php");//cache le corp du hero !
require_once('end.php');?>