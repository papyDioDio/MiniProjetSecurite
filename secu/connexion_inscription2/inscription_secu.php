<?php
try{
	$bdd= new PDO('mysql:host=localhost;dbname=secuproj', 'root', 'root');
	$mail=htmlspecialchars($_POST['email']);
	$password=htmlspecialchars($_POST['psw']);

	$req0 = $bdd->prepare('SELECT * FROM inscrits WHERE email=?');
	$req0->execute(array($mail));

	if($donnees = $req0->fetch()){
	    //code manquant
	    echo '<script language="Javascript">   alert(" ⚠️ Ce Compte existe déjà\n Veuillez directement vous connecter !");  document.location.replace("../index.php");</script>';
	}
	else{
		$req = $bdd->prepare('INSERT INTO inscrits values (?,?)');
		$req->execute(array($mail,$password));
		echo '<script language="Javascript"> alert("Inscription Réussie\n Vous pouvez vous connecter maintenant !"); document.location.replace("../index.php");</script>';
		
		
	}


}
catch(Exception $e){
	die('Erreur : ' . $e->getMessage());
}
?>