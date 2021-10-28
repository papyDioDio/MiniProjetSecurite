<?php
try{
  $bdd= new PDO('mysql:host=localhost;dbname=secuproj', 'root', 'root');

}
catch(Exception $e){
  die('Erreur : ' . $e->getMessage());
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>INSCRIPTION</title>

	<link rel="stylesheet" href="connexion_inscription2/bootstrap.min.css">
	<link rel="stylesheet" type="text/css"  href="connexion_inscription2/inscription.css">
	<link rel="stylesheet" type="text/css" href="connexion_inscription2/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="connexion_inscription2/script_connexion2.js" ></script>

</head>
<body>
<div class=" container2"> 
	<div class="row">
	    <div class="col-md-6" >
	       <div class="row"> 
	    
        	    <div class="col-md-6" id="pan">
             		<img src="images/secu.jpg"  id="logo">
             		<span class="titre-cinetheque"> SECUsystem </span>
        		</div>
        		
        	</div>
        </div>
     	
     		
		
	</div>
    	<div class="row" id="page">
           
           <!--partie droite formulaire -->
            <div class="col-md-6 col-xs-3 col">

            	<div class="formulaire2">
	            <form class="contact100-form validate-form " method="post" action="homepages2/secu.php" id="formulaire_contact" >
	         
				        <div class="formulaire">
				        	<h2 class="titre-inscription">Me connecter</h2>
					        <div class="formBox">
						          <div class="inputBox w100">
						            <input type="email" name="mail" required autocomplete="off" pattern="[a-zA-Z]{1}[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
						            <span>Adresse e-mail <sup class="etoile">*</sup> </span>
						          </div>
						          <div class="inputBox w100">
						            <input type="password" name="password" required autocomplete="off" >
						            <span>Mot de Passe <sup class="etoile">*</sup></span>
						          </div>
						          <div class="inputBox w100">
						            <input type="submit" value="Connexion">
						          </div>
					        </div>
					        
					        
				      </div>
			    </form>
			    <div class="separateur"></div>
    			    
    				
    				<div class="row">
            	    <div class="col-md-6 col-xs-6 col">
                	    <button onclick="openForm()" class="rm-btn btn btn-primary btn-creer-compte"> Créer un Compte </button>
            		</div>
            	    <div class="col-md-6 col-xs-6 col">
            	    <button onclick="closeForm()" class="rm-btn btn btn-primary btn-reinitialiser cancel"> Réinisialiser </button>
            		</div>
            		</div>
            		<div class="center">
    			    	
    				</div>

				
			</div>
			    
            </div>

    </div>
    <!---->
	<div class="form-popup form-container" id="myForm">
		
		<h2 class="titre-inscription form-containerg"> S'inscrire </h2>
		<div class="separateur-pop-up"></div>
		<form action="connexion_inscription2/inscription_secu.php" method="post"  class="form-containerg" id="formIns">
		<div class="row">
			<div class="col-md-12 col-12 col">
			    <label ><b>Email *</b></label>
			    <input type="email" placeholder="Entrer votre email" name="email" required pattern="[a-zA-Z]{1}[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
			</div>
			
		</div>
		<div class="row">
			<div class="col-md-12 col-12 col">
			    <label ><b>Mot de passe *</b></label>
			    <input id="psw" type="password" placeholder="Entrer votre mot de passe" name="psw" required pattern=".{5,}">
			</div>
			
		</div>
		
	    <div class="row">
	    <div class="col-md-6 col-xs-12 col">
	    <button type="submit" class="btn">S'inscrire</button>
		</div>
	    <div class="col-md-6 col-xs-12 col">
	    <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
		</div>
		</div>
	  </form>
	  
	</div>

    </div>
</body>
</html>