<?php 
require_once('head.php');
require_once("menu.php");
?>

<body>
        <!--VVV  CONTENU DE LA PAGE  VVV-->
    <main class="main container-fluid" style="min-height: 100vh;">
        <div class="row row-counter">
            <p class="position"></p>
            <div class="col-lg-4 col-md-4 col-xs-4">
                <button type="button" id="prevBtn" class="prev-btn btn btn-light" rel="prev">
                    &#60;
                </button> 
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 txt_here text-dark">
                <h1 class="nb-here"></h1>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4">
                <button type="button" id="nextBtn" style="position: absolute;display: block;" class="next-btn btn btn-light" rel="next">
                    &#62;
                </button>
            </div>
        </div>
        <div class="flashCards div1">
            <div class="flashCards-content">
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
                    <p class="FCNote"></p>
                </div>
            </div>
        </div>
        <div class="btnNext">
            <button type="button" class="affA">
                Afficher la réponse   <i class="fas fa-long-arrow-alt-right fa-lg"></i>
            </button>
        </div>


    </main>
    <?php 
require_once("modal.php");
?>
    
    <script src="js/script.js"></script>
    <script src="js/json/storagea.js"></script>
</body>

</html>