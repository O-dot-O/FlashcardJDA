<?php 
if(!empty($_POST['themes'])){
    $selectTheme = $_POST['themes'];
    setcookie("theme",$selectTheme,time() + 365*24*3600);
    header('Location: /body.php');
} 
if(empty($_COOKIE['check'])) {
    header('Location: /index.php');
}
require_once("menu.php");
?>
    <main class="main container-fluid">
        <p style="color : red"><?php echo($_COOKIE['theme']); ?></p>
        <div class="row row-counter">
            <div class="flashCards">
                <div class="flashCards-content">
                    <div class="alert alert-info">
                    Merci de bien vouloir réactualiser votre page une fois la seléction éfféctué !
                    </div>
                    <form action="#" method="post">
                        <h4>Thèmes disponibles :</h4>
                        <div class="row">
                            <div class="col-xs-6 col-md-6 col-lg-4">
                        <label for='themes'>Light theme</label>
                            <input type="radio" id="themes" class="form-control"name="themes" value="Light theme"></input>
                            </div>
                        <div class="col-xs-6 col-md-6 col-lg-4">
                        <label for='themes'>Dark theme</label>
                            <input type="radio" id="themes" class="form-control"name="themes" value="Dark theme"></input>
                        </div>
                        <div class="col-xs-6 col-md-6 col-lg-4">
                        <label for='themes'>Secondary theme</label>
                            <input type="radio" id="themes" class="form-control"name="themes" value="Secondary theme"></input>
                        </div>
                    </div>
                        <div>
                            <button type="submit" class="btn btn-info">Sélectionner</button>
                        </div>
                    </form>
                
                </div>
            </div>

        </div>

    </main>
    <script src="js/script.js"></script>
</body>
</html>