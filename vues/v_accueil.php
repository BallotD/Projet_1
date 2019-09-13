<?php /* date.timezone("Europe/Paris");*/  
	$dateref = new DateTime($_COOKIE['date']); ?>
<div class="wrapper">
  <main id="conteneur">
    <div class="toolbar">
      <div class="toggle">
       <div class="toggle__option"  onclick="refreshCalendar(2)"><</div> 
        <div class="toggle__option" onclick="refreshCalendar(1)">></div> 
      </div>
      <div class="current-month" ><?php echo($dateref->format('M').' '.$dateref->format('Y')); ?></div>
		  <div class="current-month" ><?php echo($_SESSION['prenom'].' '. $_SESSION['nom']); ?></div>
		  
		  <div class="current-month" >
		  <form action="includes/modele/deconnexion.php" method="get">

				  <input class="input_component" type="submit" value="Se deconnecter">
  
</form>
		  </div>
		  <img src="includes/img/burger.png" class="abecedaire-logo" onclick="openSidebar()" id="burger_menu">

    </div>
    <div class="calendar" >
      <div class="calendar__header">
        <div>lundi</div>
        <div>mardi</div>
        <div>mercredi</div>
        <div>jeudi</div>
        <div>vendredi</div>
        <div>samedi</div>
        <div>dimanche</div>
      </div>
		<?php
		
		
			echo(dispSemaine( $dateref));//affiche une ligne en fonction de la semaine dans le moi, et du mois en question (sous forme de date )
			
		 ?>
    </div>
  </main>
	  <?php 
	  if($_SESSION['droits'] == "2")
	  {
		 include "v_menu_user.php" ; 
		  
	  }
	  else
	  {
		  if($_SESSION['droits'] == "0") 
		  {
			include "v_menu_admin.php";
		  }
		  else {
			  include "v_menu_prof.php";
		  }
	  }
	  
	   ?>

</div>
	<div id="answer_div">	  
	</div>
	<?php ?>