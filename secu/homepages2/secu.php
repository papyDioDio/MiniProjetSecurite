<?php 
session_start();

$_SESSION['pseudo'] = $_POST['mail'];


?>
<!DOCTYPE html>

<?php
try{
  $bdd= new PDO('mysql:host=localhost;dbname=secuproj', 'root', 'root');
  
  $mail=htmlspecialchars($_POST['mail']);
  $password=htmlspecialchars($_POST['password']);

}
catch(Exception $e){
  die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('SELECT * FROM inscrits WHERE email = ? and mdp = ?');
  $req->execute(array($mail,$password));

?>


<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FILM</title>

  <link rel="stylesheet" href="bootstrap.min.css">
  <?php 
  if(!$donnees = $req->fetch()){
    //code manquant
    echo '<script >  alert("☠☠☠ mail ou mot de passe incorrect ☠☠☠");  document.location.replace("../index.php");</script>' ;
  }?>
  
  <link rel="stylesheet" href="../connexion_inscription2/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"  href="../connexion_inscription2/inscription.css">
    
</head>
<body>
		<div class="col-md-6 titre_addresse" >
			<p>
				<br>
				<span class="titre-cinetheque">&nbsp; Authentification réussie </span> 
				
			</p>
		</div>
</body>

</html>




