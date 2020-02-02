<?php require_once('index.php');?>
<div class="main container-fluid">

     <div class="container">
         <a href="index.html" class="btn btn-outline-light return">Retour a la page principal</a>
        <h1>Liste</h1>
        <label for="yourClass">Votre classe :</label>
        <select name="yourClass"class="yourClass form-control"><option value="1" class="3e">3eme</option> <option class="Terminal"value="2">Terminal</option></select>
        <div class="content-list-brevet">
            <div class="row row-a">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <h3>Matierre :</h3>
                    Histoire : 1 -> 15 <br>
                    EMC : 15 -> 30 <br>
                    Géographie : 30 -> 45<br>
                    Français : 45 -> 60<br>
                    Anglais : 60 -> 75 <br>
                    Maths : 75 -> 90<br>
                    Technologie : 90 -> 105<br>
                    Physique : 105 -> 120<br>
                    S.V.T : 120 -> 135<br>
                    Musique : 135 -> 150<br>
                    Art : 150 -> 165<br>
                </div>

                <div class="col-lg-6 col-md-6 col-xs-12">
                    <h3>Professeur :</h3>
                    Mme Detour : Histoire -> Géographie<br>
                    Mme.Douillard : Français <br>
                    Mme.Champagne : Anglais<br>
                    Mr.Le Breton : Maths -> Technologie<br>
                    Mme.Valente : Physique<br>
                    Mme.Clément : S.V.T <br>
                    Mr.{...} : Musique<br>
                    Mme.Auberty : Art<br>
                </div>
            </div>
         </div>

        <div class="content-list-bac">
            <div class="row row-a">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <h3>Matierre :</h3>
                    Histoire : 1 -> 15 <br>
                    EMC : 15 -> 30 <br>
                    Géographie : 30 -> 45<br>
                    Français : 45 -> 60<br>
                    Anglais : 60 -> 75 <br>
                    Maths : 75 -> 90<br>
                    Technologie : 90 -> 105<br>
                    Physique : 105 -> 120<br>
                    S.V.T : 120 -> 135<br>
                    Art : 135 -> 150<br>
                </div>

                <div class="col-lg-6 col-md-6 col-xs-12">
                    <h3>Professeur :</h3>
                    Mme Detour : Histoire -> Géographie<br>
                    Mme.Douillard : Français <br>
                    Mme.Champagne : Anglais<br>
                    Mr.Le Breton : Maths -> Technologie<br>
                    Mme.Valente : Physique<br>
                    Mme.Clément : S.V.T <br>
                    Mr.{...} : Musique<br>
                    Mme.Auberty : Art<br>
                </div>
            </div>
         </div>
        </div>

    </div>
    <div class="footer">
    </div>
    <script src="animation.js"></script>
    <script>
        $(".content-list-bac").hide(0);
        afficherClassCorespondante();
        function afficherClassCorespondante() {
        $(".3e").on({
            click : function() {
                $(".content-list-bac").hide(800);
                $('.content-list-brevet').show(1500);
            }
        });
        $(".Terminal").on({
            click : function(){
                $(".content-list-brevet").hide(800);
                $(".content-list-bac").show(1500);
            }
        });
        }
    </script>
</body>
</html>
