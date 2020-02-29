<?php 
if(empty($_COOKIE['check'])) {
    header('Location: /index.php');
}
require_once('menu.php'); ?>
<div class="main">
    <div class="container mt-lg-5">
<p style="color : #fff;"><video controls src="tuto.mp4" style="width : 400px;height : 200px;float : left;padding-right : 25px;"></video>
    Bienvenue sur le reglement interieur du site merci de bien vouloir le respecter :)
Ce site est pour le moment ce que nous appelons un site static c'est à dire que pour appliquer une modification sur le site 
les créateur devront le faire manuelement donc vous, simple visiteur n'avez pas la permission de modifier le contenu
ex : Flash Cards , Affichage ... 

Pour comprendre l'utilisation fort peu compliqué de ce site nous vous proposons une formation d'environ 5minutes sur le fonctionnement
du site. Nous nous excusons d'avances car la qualité sonore n'est pas au rendez-vous ^^'.</p>

<table name="rules" style="float : right;top : 0;"class="mt-lg-5 table table-bordered table-dark">
<thead>
    <th>Numéros</th>
    <th>Régles</th>
</thead>
<tbody>
<td>1</td><td>D'apres l article 1 du réglement d'utilisation du site , tout utilisateur trouvant une faille de sécurité
critique sur le site est dans l'obligation d'en informer Nicolas Giannettini au collège ou la CPE du collège .</td>
<tr><td>2</td><td>Toute cartes crées contenant du vocabulaire chartié sera supprimé et suivant la gravité du vocabulaire chartié employé une sanction pourra être appliqué</td>
<tr><td>3</td><td>Le racisme,l'homophobie et toute forme de discrimination est formelement interdite !</td>
</tbody>
</table>
</div>
</div>
<?php require_once('footer.php');?>