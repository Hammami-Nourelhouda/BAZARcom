<!--   déclaration de la partie head du code:
 le titre de la page, la feuille dde style externe et l'icone afficher dans l'onglet du navigateur     -->
<!DOCTYPE html >
<html lang="fr">
<head>
     <meta charset="UTF-8"/>
     <title> Catégories: Véhicules </title>
     <link rel="stylesheet" href="../css/index.css"/>
     <link rel="icon" type="image/png" href="../icons&photos/logo.png"/>
</head>
<body>
  <!--    déclaration de la partie entête  :
titre de la page au même temps c'est un lien interne vers la page principale, une bare de navigation: une liste non ordonée qui contient des liens vers des pages intérieurs    -->

<header><a href="../index.php"><span class="titlefirstpart">BAZAR</span><span class="titlesecondpart">com</a></span>
  <nav class="header">
    <ul>
      <!--  un boutton de menu déroulant (dropdown)  contient des liens vers des pages intérieurs   -->

      <div class="dropdown">
    <button class="dropbtn"><img class="navigation" src="../icons&photos/megaphone.png"  title="Créer un compte"/><b> Déposer une annonce</b></button>
    <div class="dropdown-content">
    <a href="../déposeruneannonceimmobiliers.php">Immobilier</a>
    <a href="../déposeruneannoncetéléphones.php">Téléphones</a>
    <a href="../déposeruneannoncevihécules.php">Véhicules</a>
    <a href="../déposeruneannoncevoyages.php">Voyages</a>
    </div>
  </div>
      <li class="header"><a class="navigation" href="../créeruncompte.php"> <img class="navigation" src="../icons&photos/user.png"  title="Créer un compte"/> Créer un compte</a></li>
      <!--  démarrer la session :changer le lien se connecter par un lien se déconnecter si la session est vide et vise vers ça    -->

      <?php
      session_start();
      if(isset($_SESSION['login']))
      {?>
        <li class="header"><a class="navigation" href="../déconnecter.php"><img class="navigation" src="../icons&photos/logout.png"  title="Se déconnecter"/> Se déconnecter</a></li><?php
      }
      if(!isset($_SESSION['login']))
      {?>
        <li class="header"><a class="navigation" href="../seconnecter.html"><img class="navigation" src="../icons&photos/login.png"  title="Se connecter"/> Se connecter</a></li><?php
      }
      ?>
      <li class="header"><a class="navigation" href="../contacteznous.php"><img class="navigation" src="../icons&photos/email.png"  title="Contactez-Nous"/> Contactez-Nous</a></li>
    </ul></nav></header>
<br><br>
<!-- une sidebar contient un menu avec des liens vers des pages intérieurs   -->
<aside>
  <ul class="catégories">
    <li class="catégories"><img class="catégories" src="../icons&photos/catégories.png"/> Catégories </li>
    <li class="catégories"><a class="catégories"href="immobiliers.php"><img class="catégories" src="../icons&photos/immobiliers.png"/> Immobilier</a></li>
        <li class="catégories"><a   class="catégories" href="téléphones.php"> <img class="catégories"src="../icons&photos/téléphones.png"/> Téléphones</a></li>
      <li class="catégories"><a class="actuel" class="catégories"href="vihécules.php"><img class="catégories"src="../icons&photos/véhicules.png"/> Véhicules</a></li>
    <li class="catégories"><a class="catégories"href="voyages.php"><img  class="catégories"src="../icons&photos/voyages.png"/> Voyages</a></li>
  </ul>
</aside>
<!--    un main contient les annonces déja déposées: extraites d'une base de donnée qui est simuléé  par des fichiers textes   -->

  <main class="catégories">
  <h2 class="vihécules"> Véhicules </h2>
  <table class="catégories">
    <!-- extraire les information de la base de donée simulé par des fichiers texte      -->

<?php
$vihécules=fopen('vihécules.txt','a+');
while(feof($vihécules)==false)
{
  ?>
    <tr class="catégories">
      <?php
  $ligne=fgets($vihécules);
  $mot="";
  $j=0;
  $length=strlen($ligne);
  for($i=0;$i<$length;$i++)
  {
    if($ligne[$i]==" ")
    {
      $colonne[$j]=$mot;
      $j++;
      $mot="";
      continue;
    }
    $mot=$mot.$ligne[$i];
  }
  ?>
  <!--   affichage des informations extraites    -->

    <td class="img"><br>
      <img  src="<?php  echo "$colonne[5]";?>" class="img" /><br>
        </td>
        <td class="description">
          <p class="description"> <span class="vihécules"> MARQUE :</span> <?php echo "$colonne[0]";?>.</p>
            <p class="description"> <span class="vihécules"> MODELE :</span> <?php echo "$colonne[1]";?>.</p>
                    <p class="description"> <span class="vihécules"> DATE DE MISE EN CIRCULATION :</span> <?php echo "$colonne[2]";?>.</p>
                          <p class="description"> <span class="vihécules"> PRIX :</span> <?php echo "$colonne[3]";?><span class="vihécules"> DA</span>.</p>
                    <p class="description"> <span class="vihécules"> NUMERO DE TELEPHONE :</span> <?php echo "$colonne[4]";?>.</p>

          </td>
            </tr>
        <?php
}
$closed=fclose($vihécules);
?>
  </table>
<br>
  </main>
  <!--  un pied de page contient un lien interne vers la page principale + quelque liens vers des pages intérieurs  et de plus un lien vers une page de contact  -->

  <footer>
  <br>
    <table>
      <tr>
        <td class="left">
          Annonces <a class="footer"href="immobiliers.php">immobilier</a> <br>
              Annonces<a class="footer" href="téléphones.php"> téléphones </a><br>
          Annonces <a  class="footer"href="vihécules.php">véhicules</a><br>
          Annonces<a class="footer"href="voyages.php"> voyages</a> </td>
<td class="right"><a href="../index.php"><span class="footerfirst">BAZAR</span><span class="footersecond">com</span><a class="navigation" href="../contacteznous.php">    Contactez-Nous</a>
<p class="copyrights">Conçu par HAMMAMI NOURELHOUDA 2020 <img class="copyrights"src="../icons&photos/copyright.png" /> Tous droits réservés</p></td></tr></table><br></footer>
</body>
</html>
