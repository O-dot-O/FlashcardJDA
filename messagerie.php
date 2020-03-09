<?php require_once('head.php');require_once('menu.php');
if($_COOKIE['admin'] != 'poulet'){
    header('location: ./');
}
?>

<div class="container">
<?php $message = file_get_contents('js/json/messages.json');
    $message = json_decode($message , true);

    for($i = 0;$i <count($message);$i++) :
?>
    <div class="mt-5 card">
        <div class="card-header">
        <p class="FCTitle"><?php echo"Messages de " . $message[$i]['name'] ?></p>
        <?php if($_COOKIE['admin'] == 'poulet') :?><a class="delete" href="messageCheck.php?del=<?php echo$message[$i]['id'];?>" name="del" aria-label="delete"></a>
        <?php endif;?>
        <style>
        .delete {
            position : relative;
            right : 5px;
        }
        </style>
        </div>
        <div class="card-body">
        <p class="FCAnswer">Email : <?php echo$message[$i]['email']; ?></p>
        <p class="FCNote">Message : <?php echo$message[$i]['message']; ?></p>
        </div>
        <div class="card-footer">
        <div class="from"><?php echo$message[$i]['name']; ?></div>
        <div class="time"><?php echo$message[$i]['date']; ?></div>
        </div>
    </div>

    <?php endfor; ?>
<style>
.delete {
    position : absolute!important;
    right : 20px !important;
}

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
</div>