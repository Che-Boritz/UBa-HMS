<?php 
	if (isset($_POST['id'])) 
		{
			extract($_POST);
			$connexion= new PDO('sqlite:ncp.db');
            $req= "SELECT * FROM service where id= $id";
            $resultat = $connexion->query($req);
            $service = $resultat->fetch();
            $solution = $service['id'].'|'.$service['prix'];
            echo $solution;
		}
 ?>
 