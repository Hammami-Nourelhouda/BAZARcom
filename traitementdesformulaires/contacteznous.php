<!--   déclaration de la partie head du code:
 le titre de la page, la feuille dde style externe et l'icone afficher dans l'onglet du navigateur     -->

<!DOCTYPE html >
<html lang="fr">
<head>
     <meta charset="UTF-8"/>
     <title> Compte créé ! </title>
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
<br><br>  <br><br><br><br><br>  <br><br><br>
<!--   un main contient le traitement du formulaire de contactez-nous : il s'agit de recevoir les données entrées par l'utilisateur et les rengées dans la base de donnée simulées par des fichiers textes    -->
  <main class="accountcreated">
  <?php
  $contactus=fopen('../lesfichiersformulaires/contacteznous.txt','a');
  foreach ($_POST as $key =>  $value) {
    if($key=='message')
    {
      $message=$value;
      $long=strlen($message);
      for($i=0;$i<$long;$i++)
      {
        if(($message[$i])==' ')
        {
$message[$i]='*';
        }
      }
      $value=$message;
    }
    if($key=='website')
    {
    if ($value=='') {
      $value='*';
    }}
    $ligne=fwrite($contactus,$value);
    $ligne=fwrite($contactus,' ');
  }
   $ligne=fwrite($contactus,"\n");
    $closed=fclose($contactus);
   ?>
   <!--   un message affiché quand le traitement est terminé  -->
<img class="accountcreated" src="../icons&photos/created.png"/><p class="accountcreated">   Félicitations! Votre message a été recevé avec succès.Une réponse sera envoyée au bout de 24 heures, Merci.</p>
<br><br><br>
  </main>
  <br><br>  <br><br><br><br><br>  <br><br><br>

  <!--  un pied de page contient un lien interne vers la page principale + quelque liens vers des pages intérieurs  et de plus un lien vers une page de contact  -->

  <footer>
  <br>
    <table>

      <tr>
        <td class="left">
          Annonces <a class="footer"href="../catégories/immobiliers.php">immobilier</a> <br>
              Annonces<a class="footer" href="../catégories/téléphones.php"> téléphones </a><br>
          Annonces <a  class="footer"href="../catégories/vihécules.php">véhicules</a><br>
          Annonces<a class="footer"href="../catégories/voyages.php"> voyages</a> </td>
<td class="right"><a href="../index.php"><span class="footerfirst">BAZAR</span><span class="footersecond">com</span><a class="navigation" href="../contacteznous.php">    Contactez-Nous</a>
<p class="copyrights">Conçu par HAMMAMI NOURELHOUDA 2020 <img class="copyrights"src="../icons&photos/copyright.png" /> Tous droits réservés</p></td></tr></table><br></footer>
</body>
</html>
