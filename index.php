<!--   déclaration de la partie head du code:
 le titre de la page, la feuille dde style externe et l'icone afficher dans l'onglet du navigateur     -->
<!DOCTYPE html >
<html lang="fr">
<head>
     <meta charset="UTF-8"/>
     <title> BAZARcom</title>
     <link rel="stylesheet" href="css/index.css"/>
     <link rel="icon" type="image/png" href="icons&photos/logo.png"/>
</head>
<body>
  <!--    déclaration de la partie entête  :
titre de la page au même temps c'est un lien interne vers la page principale, une bare de navigation: une liste non ordonée qui contient des liens vers des pages intérieurs    -->

<header><a href="index.php"><span class="titlefirstpart">BAZAR</span><span class="titlesecondpart">com</a></span>
  <nav class="header">
  <ul>
    <!--  un boutton de menu déroulant (dropdown)  contient des liens vers des pages intérieurs   -->
    <div class="dropdown">
  <button class="dropbtn"><img class="navigation" src="icons&photos/megaphone.png"  title="Créer un compte"/><b> Déposer une annonce</b></button>
  <div class="dropdown-content">
  <a href="déposeruneannonceimmobiliers.php">Immobilier</a>
  <a href="déposeruneannoncetéléphones.php">Téléphones</a>
  <a href="déposeruneannoncevihécules.php">Véhicules</a>
  <a href="déposeruneannoncevoyages.php">Voyages</a>
  </div>
</div>
    <li class="header"><a class="navigation" href="créeruncompte.php"> <img class="navigation" src="icons&photos/user.png"  title="Créer un compte"/> Créer un compte</a></li>
    <!--  démarrer la session :changer le lien se connecter par un lien se déconnecter si la session est vide et vise vers ça    -->
    <?php
    session_start();
    if(isset($_SESSION['login']))
    {?>
      <li class="header"><a class="navigation" href="déconnecter.php"><img class="navigation" src="icons&photos/logout.png"  title="Se déconnecter"/> Se déconnecter</a></li><?php
    }
    if(!isset($_SESSION['login']))
    {?>
      <li class="header"><a class="navigation" href="seconnecter.html"><img class="navigation" src="icons&photos/login.png"  title="Se connecter"/> Se connecter</a></li><?php
    }
    ?>
    <li class="header"><a class="navigation" href="contacteznous.php"><img class="navigation" src="icons&photos/email.png"  title="Contactez-Nous"/> Contactez-Nous</a></li>
  </ul></nav></header>
<br><br><br>

<!-- une sidebar contient un menu avec des liens vers des pages intérieurs   -->
<aside>
  <ul class="catégories">
        <li class="catégories"><img class="catégories" src="icons&photos/catégories.png"/> Catégories </li>
    <li class="catégories"><a class="catégories"href="catégories/immobiliers.php"><img class="catégories" src="icons&photos/immobiliers.png"/> Immobilier</a></li>
        <li class="catégories"><a class="catégories" href="ctégories/téléphones.php"> <img class="catégories"src="icons&photos/téléphones.png"/> Téléphones</a></li>
      <li class="catégories"><a  class="catégories"href="catégories/vihécules.php"><img class="catégories"src="icons&photos/véhicules.png"/> Véhicules</a></li>
    <li class="catégories"><a class="catégories"href="catégories/voyages.php"><img  class="catégories"src="icons&photos/voyages.png"/> Voyages</a></li>
  </ul>
</aside>
<!-- un main contient des informations principales sur le site web   -->
  <main>
  <br>
    <p class="first"><span class="mainfirst">BAZAR</span><span class="mainsecond">com</span> est un site web d'<b>annonces en ligne</b>. Il est destiné à la communauté en ligne, leur permettant d'<b>acheter</b> et de <b>vendre</b> des produits dans de différentes<b> catégories </b>en <b>déposant des annonces</b> ou en voyant d'autres annonces déjà déposées par d'autres utilisateurs</p><br><p class="second"> <span class="mainfirst">BAZAR</span><span class="mainsecond">com</span> met à votre disposition<b> une gamme </b>de petites annonces <b>gratuites</b>, des <b>propriétés immobilières</b> à vendre, des<b> téléphones</b> et beaucoup plus</p><br><p class="third">Ce site est concu d'une façon <b>simplifiée</b> pour votre confort. En cas de <b>problèmes</b> ou des <b>suggestions</b>, n'hésitez pas à  <b> nous-contacter</b></p>
  <br><br><br>
  </main>
  <!--  un pied de page contient un lien interne vers la page principale + quelque liens vers des pages intérieurs  et de plus un lien vers une page de contact  -->
  <footer>
  <br>
    <table>
      <tr>
        <td class="left">
  Annonces <a class="footer"href="catégories/immobiliers.php">immobilier</a> <br>
      Annonces<a class="footer" href="catégories/téléphones.php"> téléphones </a><br>
  Annonces <a  class="footer"href="catégories/vihécules.php">véhicules</a><br>
  Annonces<a class="footer"href="catégories/voyages.php"> voyages</a> <td>
<td class="right"><a href="index.php"><span class="footerfirst">BAZAR</span><span class="footersecond">com</span><a class="navigation" href="contacteznous.php">    Contactez-Nous</a>
  <p class="copyrights">Conçu par HAMMAMI NOURELHOUDA 2020 <img class="copyrights"src="icons&photos/copyright.png" /> Tous droits réservés</p>
</td></tr></table><br></footer>
</body>
</html>
