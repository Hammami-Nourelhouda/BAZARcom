<!--   déclaration de la partie head du code:
 le titre de la page, la feuille dde style externe et l'icone afficher dans l'onglet du navigateur     -->
<!DOCTYPE html >
<html lang="fr">
<head>
     <meta charset="UTF-8"/>
     <title> Annonce déposée! </title>
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
<!--   un main contient le traitement du formulaire de déposement d'annonce des téléphones : il s'agit de recevoir les données entrées par l'utilisateur et les rangées dans la base de donnée simulées par des fichiers textes    -->

  <main class="accountcreated">
  <?php
    /*   manipulation des photos uploadées    */
 if(isset($_FILES["urlphoto"]) && $_FILES["urlphoto"]["error"] == 0){
   $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["urlphoto"]["name"];
        $filetype = $_FILES["urlphoto"]["type"];
        $filesize = $_FILES["urlphoto"]["size"];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)){
          ?>
          <script language="javascript" > alert("Erreur : Veuillez sélectionner un format de fichier valide."); window.history.back();</script>

            <?php
 }
  if(in_array($filetype, $allowed)){
    if(file_exists("../catégories/photostéléphones/" . $_FILES["urlphoto"]["name"])){
               echo $_FILES["urlphoto"]["name"] . " existe déjà.";
             } else{
             move_uploaded_file($_FILES["urlphoto"]["tmp_name"], "../catégories/photostéléphones/" . $_FILES["urlphoto"]["name"]);
   /*    rangement des données dans le fichier texte     */
             $creatadd=fopen('../catégories/téléphones.txt','a');
             $ligne=fwrite($creatadd,"\n");
            foreach ($_POST as  $value) {
              $ligne=fwrite($creatadd,$value);
              $ligne=fwrite($creatadd,' ');
            }
            $ligne=fwrite($creatadd,"photostéléphones/");
              $ligne=fwrite($creatadd,$_FILES["urlphoto"]["name"]);
                $ligne=fwrite($creatadd," ");
              $closed=fclose($creatadd);
             ?>
             <!--   un message affiché quand le traitement est terminé  -->
             <img class="accountcreated" src="../icons&photos/created.png"/><p class="accountcreated">   Félicitations! Votre annonce a été déposée avec succès. Vous pouvez maintenant la voir dans la catégorie Immobiliers.</p>
             <br><br><br>
             <?php
            }
       } else{
         ?>
         <script language="javascript" > alert("Erreur: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer."); window.history.back();</script>

           <?php
       }
   } else{
     ?>
     <script language="javascript" > alert("Erreur: la taille de votre photo est supérieure à la limite autorisée,. Veuillez choisir une autre photo."); window.history.back();</script>

       <?php
   }
    ?>

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
