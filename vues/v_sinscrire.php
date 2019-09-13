
<div class="wrapper_login">
  <div class="main_login">
    <form class="formulaire_inscription" method="POST" action="index.php?uc=accueil&action=inscription">

<fieldset>
    <legend>Nom : </legend>
    <input class="input_component" id="nom" type="text" name="nom" oninput="checkInscription()"/>
</fieldset>
<fieldset>
    <legend>Prenom : </legend>
    <input class="input_component" id="prenom" type="text" name="prenom" oninput="checkInscription()"/>
</fieldset>
<fieldset>
    <legend>Adresse mail : </legend>
    <input class="input_component" id="mail" type="text" name="mail" oninput="checkInscription()"/>
</fieldset>
<fieldset>
    <legend>Votre numéro de téléphone :</legend>
    <input class="input_component" id="telephone" type="text" name="telephone" oninput="checkInscription()"/>
</fieldset>
<fieldset>
    <legend>La série de votre BAC : </legend>
    <input class="input_component" id="serie" type="text" name="serie" oninput="checkInscription()"/>
</fieldset>
<fieldset>
    <legend>L'année d'obtention du BAC :</legend>
    <input class="input_component" id="annee" type="text" name="annee" oninput="checkInscription()"/>
</fieldset>
<fieldset>
    <legend>Parcours : </legend>
    <textarea class="input_component" id="parcours" name="parcours" oninput="checkInscription()" rows= 4 cols=40></textarea>
</fieldset>
        
<input type="button" value="Valider inscription" id="ValiderButton" onclick="submit()" class="input_component" disabled>

<?php
if (isset($erreur) && $erreur==1) {
echo '<div class="wrongpassword">L\'adresse mail et/ou le mot de passe ne sont pas corrects</div>' ;
}
?>

    
    </form>
    

	  
  </div> 
</div>