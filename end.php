<?php if(empty($_COOKIE['check'])){ ?>   
    <div class="cookieCheck">
    <span>En poursuivant la navigation sur ce site, vous acceptez l'utilisation des cookies et nos conditions d'utilisation.</span>
    <input type="button" class="button is-primary" onclick="setCookie('check', 'oui', 365);$('.cookieCheck').hide();" value="OK">
    </div>
    <?php }?>
    <script src="js/json/storagea.js"></script>
    <script src="js/script.js"></script>