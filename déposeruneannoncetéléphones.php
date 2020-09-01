<!--    démarrage de la session puis vérification  si la variable d'identificatin existe, si elle n'existe pas l'utilisateur se dérigera vers la page de connexion    -->
<?php
session_start();
if(!isset($_SESSION['login']))
{
  include('seconnecter.html');
  exit;
}
?>
<!--   déclaration de la partie head du code:
 le titre de la page, la feuille dde style externe et l'icone afficher dans l'onglet du navigateur     -->
<!DOCTYPE html >
<html lang="fr">
<head>
     <meta charset="UTF-8"/>
     <title> Déposer annonce: Téléphones </title>
     <link rel="stylesheet" href="css/index.css"/>
     <link rel="icon" type="image/png" href="icons&photos/logo.png"/>
     <!--   la partie javascript qui va contrôler le formulaire vérifie si toutes les informations sont saisies ou non puis les validées   -->
     <script language="JavaScript">
     function controler (add){
       var marque=document.add.marque.value;
       var modèle=document.add.modèle.value;
       var prix=document.add.prix.value;
       var fn=document.add.fn.value;
       var urlphoto=document.add.urlphoto.value;
       if(marque == "")
       {
          alert("vos informations ne sont pas complètes veillez ressayer!");
       }
       else {
         if(modèle == ""){
             alert("vos informations ne sont pas complètes veillez ressayer!");
         }
         else{
                 if(prix == ""){
                     alert("vos informations ne sont pas complètes veillez ressayer!");
                 }
                 else{
                   if(urlphoto == ""){
                       alert("vos informations ne sont pas complètes veillez ressayer!");
                   }
                   else{
                     if(fn=="")
                     {
                        alert("vos informations ne sont pas complètes veillez ressayer!");
                     }
                     else{
                       if(fn.length < 10)
                       {
                         alert("votre numéro de téléphoe est incorrect!");
                       }
                       else {
                         document.add.submit();
                         document.add.reset();
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
  <a href="déposeruneannoncevihécules.php">Vihécules</a>
  <a href="déposeruneannoncevoyages.php">Voyages</a>
  </div>
</div>
    <li class="header"><a class="navigation" href="créeruncompte.php"> <img class="navigation" src="icons&photos/user.png"  title="Créer un compte"/> Créer un compte</a></li>
    <li class="header"><a class="navigation" href="déconnecter.php"><img class="navigation" src="icons&photos/logout.png"  title="Se déconnecter"/> Se déconnecter</a></li>
    <li class="header"><a class="navigation" href="contacteznous.php"><img class="navigation" src="icons&photos/email.png"  title="Contactez-Nous"/> Contactez-Nous</a></li>
  </ul></nav></header>
<br><br>

  <main class="déposeruneannonce">
  <br>
  <!--   le formulaire de déposement d'une annonce téléphone:
    après qu'il soit controlé ces informations seront envoyer par la méthode POST vers le fichier  de traitement php    -->
<form class="déposeruneannonce" method="post" name="add" action="traitementdesformulaires/téléphones.php" enctype="multipart/form-data">
<h2 class="téléphones">Déposer une annonce: Téléphones </h2>
    <label class="déposeruneannonce" for="marque"> Marque: </label>
    <select class="déposeruneannonce" name="marque" id="marque">
      <option> Apple</option>
      <option> Samsung</option>
      <option> Oppo</option>
      <option> Huawei</option>
      <option> Honor</option>
      <option> Sonny</option>
      <option> Condor</option>
    </select>
  <label class="déposeruneannonce" for="modèle"> Modèle: </label>
  <input class="déposeruneannonce" id="modèle" name="modèle"/><br>
  <label class="déposeruneannonce" for="prix">  Prix : </label>
  <input class="déposeruneannoncec" name="prix" id="prix"/>
  <label class="déposeruneannonce" for="fn"> n°tel : </label>
  <input class="déposeruneannoncet" name="fn" id="fn" maxlength="10" minlength="10"/><br>
  <label class="déposeruneannonce" for="urlphoto"> Ajouter une photo: </label>
  <input class="déposeruneannoncefile" type="file" name="urlphoto" id="urlphoto"/><br>
  <span class="déposeruneannoncenote"> NOTE: La taille de votre photo ne doit pas dépasser 2Mo !</span>
<br>
  <input class="déposeruneannoncevalidationt" type="button" value="valider" onClick="controler(add)"/>
<br><br>
</form>
<br>
  </main>
<br><br><br>
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
