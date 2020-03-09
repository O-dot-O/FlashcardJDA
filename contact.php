<?php require_once('head.php');require_once('menu.php');
if($_COOKIE['admin'] != 'poulet'){
    header('location: ./');
}
?>
<div class="containers">
    <div class="contact">
    <div class="brd">
        Contact Us
    </div>
        <div class="contact-into">
        <form action="msg.php" method="post">
        <label for="name">Entrez votre prénom :</label>
        <input type="text" class="form-input" require placeholder="ex : Jean-Claude" name="name"/>
        <br><br>
        <label for="email">Entrez votre email :</label>
        <input type="email" class="form-input" require placeholder="Votre email" name="email"/>
        <br><br>
        <label for="message" >Entrez votre message :</label>
        <textarea name="message" require class="form-input msg"  placeholder="Votre message"></textarea>
        
        <input type="submit" class="myBtn" value="Envoyer mon message" />
        
        </form>
        </div>
    </div>
</div>

<style>
.myBtn {
    display : block;
    border : 1px solid #90d0ff ;
    border-radius : 4px;
    padding : .6rem;
    margin-top : 20px;
    position : relative;
    right : -87%;
    transition : .3s ease-in-out;
}.myBtn:hover {
    background-color :#90d0ff ;
    color: #fff;
}
.brd {
    width : 100%;
    height : auto;
    padding : 2rem;
    color : #1f1f1f;
    font-size : 1.5rem;
    font-weight : bolder;
}
.containers {
    margin-right : 10%;
    margin-left : 10%;
}
.contact {
    background-color : #efefef;
    margin-top : 5%;
    box-shadow: 0px 8px 8px rgba(10, 10, 10, 0.1);
}
.contact-into {
    padding-left : 3%;
    padding-right : 3%;
    padding-bottom : 3%;
    padding-top : 1%;
}
.contact-into label {
    display : block;
    color : #1f1f1f;
    font-weight : bolder;
}
.form-input {
    width : 100%;
    min-height : 2.5rem;
    font-size : 1.2rem;
    border : 1px solid transparent;
    border-radius : 3px;
    padding-left : 7px;
    font-family : sans-serif; 
}
.form-input:focus {
    border : 1px solid #90d0ff;
    border-radius : 3px;
}
.msg {
    min-height : 100px;
}
</style>
<?php require_once('end.php');require_once('v0.1.php');?>