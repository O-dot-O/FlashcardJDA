<?php
if(!empty($_COOKIE['check'])) {
require_once('menu.php');
?>
    <main class="main container-fluid" style="min-height: 100vh;">
        <div class="row row-counter">
            <div class="col-lg-4 col-md-4 col-xs-4">
                <button type="button" id="prevBtn" class="prev-btn btn btn-secondary">
                    <</button> </div> <div class="col-lg-4 col-md-4 col-xs-4 txt_here text-dark">
                        <h1 class="nb-here"></h1>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4">
                <button type="button" id="nextBtn" style="position: absolute;display: block;"class="next-btn btn btn-secondary">></button>
            </div>
        </div>
        <div class="flashCards div1">
            <div class="flashCards-content">
                <div class="question">
            <i class="fa fa-question"></i>
            </div>
                <div class="flashCards-header">
                    <h3 class="FCTitle"></h3>
                </div>
                <div class="flashCards-text">
                    <p class="FCQuestion"></p>
                </div>
                <div class="ans">
                    <p class="answer alert alert-primary FCAnswer"></p>
                </div>
                <div class="littleplus">
                    <p class="FCNote alert alert-info"></p>
                </div>
                <button type="button" class="btn btn-primary affA">Afficher la réponse <i class="fas fa-long-arrow-alt-right fa-lg"></i></button>
            </div>
        </div>
</main>

    <div class="footer"></div>
<?php 
require_once('talk.php');
require_once('footer.php');?>
<?php }else {?>
<a href="/index.php">Approuvez nos cookies</a><?php }?>
</body>

</html>