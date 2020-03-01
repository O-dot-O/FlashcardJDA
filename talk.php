    <script text='javascript'>
        function showBot () {
            $('.content').slideToggle(300);
                $('.botBtn').toggleClass('botHided');
                $('.botBtn').toggleClass('botUnhided');
        }

        function hideBot() {
            $('.content').slideToggle(300);
                $('.botBtn').toggleClass('botHided');
                $('.botBtn').toggleClass('botUnhided');
        }
    </script>
<div class="botBtn botHided" style="color : #fff;background-color : #6f7fff;width : 70px;height : 70px;cursor : pointer;" onclick='showBot()'><i class="fa fa-comments" style="font-size : 4em;padding : 15px;"></i></div>
    <div class="content">

    <div class="infoBar">
    <i class="fa fa-times" style="float : right;color : #fff; font-size : 1.3em;display : block;cursor : pointer;" onclick='hideBot()'></i>
    <c class="time"></c>
    </div>     
    <div class="textContent">   
    </div>
<div class="subBar">
        <div class="textCommand">
        <input type="text" class="form-control w-1000" maxlength="20" placeholder="Entrez votre commande"></input>
        </div>
        <div class="textSubmit">
            <button class="btn btn-success">Envoyer</button>
        </div>
</div>
    </div>
<script src="js/chatterBox.js"></script>