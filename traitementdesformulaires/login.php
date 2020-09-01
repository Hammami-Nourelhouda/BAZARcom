<!--   déclaration de la partie head du code:
 le titre de la page, la feuille dde style externe et l'icone afficher dans l'onglet du navigateur     -->
<!DOCTYPE html >
<html lang="fr">
<head>
     <meta charset="UTF-8"/>
     <title> Se connecter </title>
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
        <li class="header"><a class="navigation" href="../seconnecter.html"><img class="navigation" src="../icons&photos/login.png"  title="Se connecter"/> Se déconnecter</a></li>
      <li class="header"><a class="navigation" href="../contacteznous.php"><img class="navigation" src="../icons&photos/email.png"  title="Contactez-Nous"/> Contactez-Nous</a></li>
    </ul></nav></header>
<br><br>  <br><br><br><br><br>  <br><br><br>
<!--   un main contient le traitement du formulaire de connection : il s'agit de recevoir les données entrées par l'utilisateur et les comparées avec les données stockées dans la base de donnée simulées par des fichiers textes    -->

  <main class="seconnecter">
<?php
$login=fopen('../lesfichiersformulaires/seconnecter.txt','a+');
$account="";
while(feof($login)==false)
{
$j=0;$mot="";
$ligne=fgets($login);
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
if($colonne[0]!=$_POST['email'])
{
}
else{
    if($colonne[1]!=$_POST['password'])
    {
      ?>
      <!--   réafficher le formulaire en cas d'échec d'identification     -->
      <form class="seconnecter" method="POST" action="login.php">
        <span class="login"> Se connecter</span>
      <br>
        <label class="loginemail" for="email"> Email :</label>
      <br>
        <input type="text" name="email"  id="email" value="<?php echo $_POST['email']; ?>"/>
       <br>
        <label class="loginpassword" for="password">Mot de passe :</label>
      <br>
        <input type="password" name="password"  id="password"/>
      <br>  <label for="password" > VOTRE mot de passe est incorrecte!</label>
      <br><br>
        <input class="submit" type="submit" name="Connecter" value="Connecter"/></form>
        <?php
        $account=true;
    }
    else{
      /*  en cas de succès d'identification l'utilisateur se dérigera vers les pages de déposement protégées   */
      session_start();
      $_SESSION['login']=$_POST['email'];
    header('location: ../déposeruneannonceimmobiliers.php' );
      $account=true;
    }
}
}
if($account=="")
{
  ?> <form class="seconnecter" method="POST" action="login.php">
    <span class="login"> Se connecter</span>
  <br>
    <label class="loginemail" for="email"> Email :</label>
  <br>
    <input type="text" name="email"  id="email" />
   <br>
    <label class="loginpassword" for="password">Mot de passe :</label>
  <br>
    <input type="password" name="password"  id="password"/>
  <br>  <label for="password" > Ce compte n'existe pas!</label>
  <br><br>
    <input class="submit" type="submit" name="Connecter" value="Connecter"/></form>
    <!--  en cas d'inéxistance du compte un message s'afficherra  -->
    <?php
  }
$closed=fclose($login);
?><br><br>  <br><br><br><br>
</main>
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
