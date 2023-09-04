<?php
include 'connexion.php';
extract($_POST);
$req=mysqli_query($con,"INSERT INTO user (nom,prenom,datedenaissance,tel,genre,email,pseudo,motdepasse)
VALUES('$nom','$prenom','$datedenaissance','$tel','$genre','$email','$pseudo','$motdepasse')");
?>