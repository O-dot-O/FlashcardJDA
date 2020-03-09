<?php 
require_once('head.php');
require_once("menu.php");
?>

<body>


<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <div class="titleOfAnnonce">Informations</div>
        </div>
        <div class="card-content">
        <div class="messageOfAdmin">Le site n'est qu'en Béta donc soyez indulgents s'il vous plait !</div>
        </div>
        <div class="card-footer">
        <div class="from">L'équipe de développement</div>
        </div>
    </div>
</div>
<?php if($_COOKIE['admin'] == 'poulet') :?>
<?php $card = file_get_contents('js/json/cards.json');
    $card = json_decode($card , true);

    for($i = 0;$i <count($card);$i++) :
?>
    <div class="mt-5 card">
        <div class="card-header">
        <p class="FCTitle"><?php echo$card[$i]['title']; ?></p>
<a class="delete" href="cardCheck.php?del=<?php echo$card[$i]['id'];?>" name="del" aria-label="delete"></a>
        
        <style>
        .delete {
            position : absolute;
            right : 5px;
        }
        </style>
        </div>
        <div class="card-body">
        <p class="FCQuestion"><?php echo$card[$i]['question']; ?></p>
        <p class="FCAnswer"><?php echo$card[$i]['answer']; ?></p>
        <p class="FCNote"><?php echo$card[$i]['note']; ?></p>
        </div>
        <div class="card-footer">
        <div class="from"><?php echo$card[$i]['name']; ?></div>
        <div class="time"><?php echo$card[$i]['date']; ?></div>
        </div>
    </div>

    <?php endfor; ?>
    <?php endif;?>
<style>
.subject::after {
    content : "";
    display : block;
    width : 100%;
    height : 1px;
    background-color : #dfdfdf;
    margin : 5px 0;
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
<?php require_once("end.php");?>
<script src="js/json/annonce.js"></script>
</body>

</html>