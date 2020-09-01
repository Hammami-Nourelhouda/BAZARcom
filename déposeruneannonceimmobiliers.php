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
     <title> Déposer annonce: Immobilier </title>
     <link rel="stylesheet" href="css/index.css"/>
     <link rel="icon" type="image/png" href="icons&photos/logo.png"/>
      <!--   la partie javascript qui va contrôler le formulaire vérifie si toutes les informations sont saisies ou non puis les validées   -->
     <script language="JavaScript">
     function controler (add){
       var wilaya=document.add.wilaya.value;
       var daira=document.add.daïra.value;
       var surface=document.add.surface.value;
       var acte=document.add.acte.value;
       var floor=document.add.floor.value;
       var prix=document.add.prix.value;
       var fn=document.add.fn.value;
       var urlphoto=document.add.urlphoto.value;
       if(wilaya == "")
       {
          alert("vos informations ne sont pas complètes veillez ressayer!");
       }
       else {
         if(daira == ""){
             alert("vos informations ne sont pas complètes veillez ressayer!");
         }
         else{
           if(surface == ""){
               alert("vos informations ne sont pas complètes veillez ressayer!");
           }
           else{
             if(acte == ""){
                 alert("vos informations ne sont pas complètes veillez ressayer!");
             }
             else{
               if(floor == ""){
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
                   }
                 }
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
<li class="header"><a class="navigation" href="déconnecter.php"><img class="navigation" src="icons&photos/logout.png"  title="Se déconnecter"/> Se déconnecter</a></li>
    <li class="header"><a class="navigation" href="contacteznous.php"><img class="navigation" src="icons&photos/email.png"  title="Contactez-Nous"/> Contactez-Nous</a></li>
  </ul></nav></header>
<br><br>

  <main class="déposeruneannonce">
  <br>
  <!--   le formulaire de déposement d'une annonce immobilier:
    après qu'il soit controlé ces informations seront envoyer par la méthode POST vers le fichier  de traitement php    -->

<form class="déposeruneannonce" method="post" name="add" action="traitementdesformulaires/immobiliers.php" enctype="multipart/form-data">
<h2 class="immobiliers">Déposer une annonce: Immobilier </h2>
    <label class="déposeruneannonce" for="wilaya"> Wilaya: </label>
    <select class="déposeruneannonce" name="wilaya" id="wilaya">
      <option> Adrar</option>
      <option> Chlef</option>
      <option> Laghouat</option>
      <option> Oum-el-bouaghi</option>
      <option> Batna</option>
      <option> Béjaïa</option>
      <option> Biskra</option>
      <option> Béchar</option>
      <option> Blida</option>
      <option> Bouïra</option>
      <option> Tamanghasset</option>
      <option> Tébessa</option>
      <option> Tlemcen</option>
      <option> Tiaret</option>
      <option> Tizi-ouzou</option>
      <option> Alger</option>
      <option> Djelfa</option>
      <option> Jijel</option>
      <option> Sétif</option>
      <option> Saïda</option>
      <option> Skikda</option>
      <option> Sidi-bel-abbès</option>
      <option> Annaba</option>
      <option> Guelma</option>
      <option> Constantine</option>
      <option> Médéa</option>
      <option> Mostaganem</option>
      <option> M'sila</option>
      <option> Mascar</option>
      <option> Ouargla</option>
      <option> Oran</option>
      <option> El-bayadh</option>
      <option> Illizi</option>
      <option> Bordj-bou-arréridj</option>
      <option> Boumerdès</option>
      <option> El-taref</option>
      <option> Tindouf</option>
      <option> Tissemsilt</option>
      <option> El-oued</option>
      <option> Khenchela</option>
      <option> Souk-ahras</option>
      <option> Tipaza</option>
      <option> Mila</option>
      <option> Aïn-defla</option>
      <option> Naâma</option>
      <option> Aïn-timouchent</option>
      <option> Ghardaïa</option>
      <option> Relizane</option>
      <option> El-m'ghair</option>
      <option> Ouled-djellal</option>
      <option> Bordj-baji-Mokhtar</option>
      <option> Béni-abbès</option>
      <option> Timimoun</option>
      <option> Touggourt</option>
      <option> Djanet</option>
      <option> In-salah</option>
      <option> In-guezzam</option>
    </select>
  <label class="déposeruneannonce" for="daïra"> Daïra: </label>
  <input class="déposeruneannonce" id="daïra" name="daïra"/><br>
  <label class="déposeruneannonce" for="surface"> Surface: </label>
  <input class="déposeruneannoncem" id="surface" name="surface"/>
  <span class="déposeruneannonce"> Acte:  </span>
  <label class="déposeruneannonce" for="notarié"> notarié </label>
  <input class="déposeruneannonceradio" type="radio" name="acte" value="notarié" id="notarié"/>
  <label class="déposeruneannonce" for="nonnotarié"> non-notarié </label>
  <input class="déposeruneannonceradio" type="radio" name="acte" value="non-notarié" id="nonnotarié"/><br>
  <label class="déposeruneannonce" for="floor"> RDC+: </label>
  <select class="déposeruneannonce" name="floor" id="floor">
    <option> 0 </option>
    <option> 1 </option>
    <option> 2 </option>
    <option> 3 </option>
    <option> 4 </option>
  </select>
  <label class="déposeruneannonce" for="prix"> Prix: </label>
  <input class="déposeruneannonce" name="prix" id="prix"/><br>
  <label class="déposeruneannonce" for="fn"> Numéro de téléphone: </label>
  <input class="déposeruneannonce" name="fn" id="fn" maxlength="10" minlength="10"/><br>
  <label class="déposeruneannonce" for="urlphoto"> Ajouter une photo: </label>
  <input class="déposeruneannoncefile" type="file" name="urlphoto" id="urlphoto"/><br>
  <span class="déposeruneannoncenote"> NOTE: La taille de votre photo ne doit pas dépasser 2Mo !</span>
<br>
  <input class="déposeruneannoncevalidation" type="button" value="valider" onClick="controler(add)"/>
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
