<?php 
require_once('head.php');
require_once("menu.php");
?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <div class="titleOfAnnonce">Informations</div>
        </div>
        <div class="card-content">
        <div class="messageOfAdmin">Le site n'en est qu'à l'une de ses premières versions.</div>
        </div>
        <div class="card-footer">
        <div class="from">Nicolas Giannettini</div>
        </div>
    </div>
</div>
<?php if($_COOKIE['admin'] == 'poulet') :?>
<?php $card = file_get_contents('js/json/cards.json');
    $card = json_decode($card , true);

    for($i = 0;$i <count($card);$i++) :
?>
    <div class="mt-5 card">
        <div class="card-content">
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
<?php require_once("footer.php");
require_once('end.php');?>
</body>

</html>
