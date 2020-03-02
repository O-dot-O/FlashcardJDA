<?php 
require_once('head.php');
require_once("menu.php");
?>
<body>
    <main class="main container-fluid">
        <div class="row row-counter">
            <div class="flashCards">
                <div class="flashCards-content">

                    <form>
                        <h4>Thèmes disponibles :</h4>
                        <div>
                            <input type="radio" id="theme1" name="themes" value="Dark theme">
                            <label for="theme1">DarkTheme</label>

                            <input type="radio" id="theme2" name="themes" value="Light theme">
                            <label for="theme2">LightTheme</label>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-info">Sélectionner</button>
                        </div>
                    </form>
                
                </div>
            </div>

        </div>

    </main>
        <?php 
require_once("modal.php");
?>
    <script src="js/script.js"></script>
    <script src="js/json/storagea.js"></script>
</body>

</html>