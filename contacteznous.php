<!--   déclaration de la partie head du code:
 le titre de la page, la feuille dde style externe et l'icone afficher dans l'onglet du navigateur     -->
<!DOCTYPE html >
<html lang="fr">
<head>
     <meta charset="UTF-8"/>
     <title> Contactez-Nous </title>
     <link rel="stylesheet" href="css/index.css"/>
     <link rel="icon" type="image/png" href="icons&photos/logo.png"/>
     <!--   la partie javascript qui va contrôler le formulaire vérifie si toutes les informations sont saisies ou non puis les validées   -->
     <script language="JavaScript">
     function controler (formcontact){
       var nom=document.formcontact.name.value;
       var email=document.formcontact.email.value;
       var message=document.formcontact.message.value;
       if(nom == "")
       {
          alert("vos informations ne sont pas complètes veillez ressayer!");
       }
       else {
         if(email == ""){
             alert("vos informations ne sont pas complètes veillez ressayer!");
         }
         else{
             if(message == ""){
                 alert("vos informations ne sont pas complètes veillez ressayer!");
             }
             else{
                   confirm("votre nom est : "+ nom+"\nvotre email est : "+email+"\nvotre message est : "+message);
             }
           }
         }
       document.formcontact.submit();
       document.formcontact.reset();
     }
     </script>
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
<main class="contacteznous">
<br><br>
<h2 class="contacteznous"> Contactez-Nous! </h2>
<p class="contacteznous"> Bienvenue dans le <b>service clients</b>.Vous pouvez nous envoyer vos<b> préoccupations </b>et vos <b>suggestions </b>en remplissant le<b> formulaire</b> ci-dessous. <b>Une réponse</b> sera envoyée au bout de 24 heures,<b> Merci</b>.</p>
<br>
<br>
<!--   le formulaire de création d'un compte:
  après qu'il soit controlé ces informations seront envoyer par la méthode POST vers le fichier  de traitement php    -->

<form class="contacteznous" method="POST" name="formcontact" action="traitementdesformulaires/contacteznous.php">
<br><br>
  <span class="contacteznous"> Contactez-Nous</span>
<br><br>
  <label class="contacteznous" for="name"> Nom :</label><br>
  <input class="contacteznous" type="text" name="name"  id="name"/>
<br>
  <label class="contacteznous" for="email"> Adresse E-mail :</label><br>
  <input class="contacteznous" type="text" name="email"  id="email"/>
<br>
  <label class="contacteznous" for="website"> Site Web :</label><br>
  <input class="contacteznous" type="text" name="website"  id="website" placeholder="Optionnel" />
<br>
<label class="contacteznous" for="message"> Message :</label><br>
<textarea class="contacteznous" name="message"  id="message" maxlength="200"></textarea>
<br><br>
  <input class="contacteznoussubmit" type="button" value="Envoyer" onClick="controler(formcontact)"/>
<br><br>
</form>
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
          Annonces<a class="footer"href="catégories/voyages.php"> voyages</a> </td>
<td class="right"><a href="index.php"><span class="footerfirst">BAZAR</span><span class="footersecond">com</span><a class="navigation" href="contacteznous.php">    Contactez-Nous</a>
<p class="copyrights">Conçu par HAMMAMI NOURELHOUDA 2020 <img class="copyrights"src="icons&photos/copyright.png" /> Tous droits réservés</p></td></tr></table><br></footer>
</body>
</html>
