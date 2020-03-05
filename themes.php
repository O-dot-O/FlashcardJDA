<?php 
require_once('head.php');
require_once("menu.php");
?>

<body>
    <main class="main container-fluid">
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
                                <input type="radio" id="themes" class="form-control" name="themes"
                                    value="Light theme"></input>
                            </div>
                            <div class="col-xs-6 col-md-6 col-lg-4">
                                <label for='themes'>Dark theme</label>
                                <input type="radio" id="themes" class="form-control" name="themes"
                                    value="Dark theme"></input>
                            </div>
                            <div class="col-xs-6 col-md-6 col-lg-4">
                                <label for='themes'>Secondary theme</label>
                                <input type="radio" id="themes" class="form-control" name="themes"
                                    value="Secondary theme"></input>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-info">Sélectionner</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>

        </div>

    </main>
    <?php 
require_once("modal.php");
require_once("end.php");
?>
</body>

</html>