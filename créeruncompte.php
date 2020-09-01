<!--   déclaration de la partie head du code:
 le titre de la page, la feuille dde style externe et l'icone afficher dans l'onglet du navigateur     -->
<!DOCTYPE html >
<html lang="fr">
<head>
     <meta charset="UTF-8"/>
     <title> Créer un compte </title>
     <link rel="stylesheet" href="css/index.css"/>
     <link rel="icon" type="image/png" href="icons&photos/logo.png"/>
     <!--   la partie javascript qui va contrôler le formulaire vérifie si toutes les informations sont saisies ou non puis les validées   -->
     <script language="JavaScript">
     function controler (formaccount){
       var nom=document.formaccount.nom.value;
       var prenom=document.formaccount.prénom.value;
       var email=document.formaccount.email.value;
       var residence=document.formaccount.résidence.value;
       var password=document.formaccount.password.value;
       if(nom == "")
       {
          alert("vos informations ne sont pas complètes veillez ressayer!");
       }
       else {
         if(prenom == ""){
             alert("vos informations ne sont pas complètes veillez ressayer!");
         }
         else{
           if(email == ""){
               alert("vos informations ne sont pas complètes veillez ressayer!");
           }
           else{
             if(residence == ""){
                 alert("vos informations ne sont pas complètes veillez ressayer!");
             }
             else{
               if(password=="")
               {
                  alert("vos informations ne sont pas complètes veillez ressayer!");
               }
               else{
                 if(password.length < 8)
                 {
                   alert("votre mot de passe doit contenir plus de 8 caractères!");
                 }
                 else {
                   var confirmed=confirm("votre nom est : "+ nom+"\nvotre prénom est : "+prenom+"\nvotre email est : "+email+"\nvotre adresse est : "+residence +"\nvotre mot de passe est: "+password);
                   if(confirmed==true){
                     document.formaccount.submit();
                     document.formaccount.reset();
                   }
                   }
               }
             }
           }
         }
       }
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
<br><br>

  <main class="creataccount">
  <br>
<h2 class="creataccounttitle"> Créer un compte! </h2>
<p class="creataccountparagraph"> Pour bénéficier de notre <b>service</b>, il vous faut un compte <span class="mainfirst">BAZAR</span><span class="mainsecond">com</span>. Pour créer ce dernier ,veuillez remplir le <b>formulaire</b> ci-dessous.</p>
<br><br>

<!--   le formulaire de création d'un compte:
  après qu'il soit controlé ces informations seront envoyer par la méthode POST vers le fichier  de traitement php    -->

<form class="creataccount" method="post" action="traitementdesformulaires/creataccount.php" name="formaccount">
<br>
  <span class="creataccount"> Formulaire </span><br><br>
  <label class="creataccount" for="name" > Nom </label>
  <input class="creataccount" type="text" name="nom" id="name" value="" maxlength="40"/>
<br>
  <label class="creataccount" for="firstname" > Prénom </label>
  <input class="creataccount" type="text" name="prénom" id="firstname" value="" maxlength="40"/>
<br>
  <label class="creataccount" for="mail" > E-mail </label>
  <input  class="creataccount" type="text" name="email" id="mail" value="" maxlength="50"/>
<br>
  <label class="creataccount" for="location" > Adresse </label>
  <input class="creataccount" type="text" name="résidence" id="lacation" value="" placeholder=" Ex: Wilaya,dayra." maxlength="50"/>
<br>
  <label class="creataccount" for="password" > Mot de passe</label>
  <input class="creataccountspecial" type="text" name="password" id="password"  maxlength="20" minlength="8"/><br>
  <label class="creataccountspecial" for="password" > Le mot de passe doit contenir plus de 8 caractères!</label>
<br><br>
  <input class="saveaccount" type="button" name="save" value="valider" onClick="controler(formaccount)"/>
<br>
</form>
<br><br>
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
