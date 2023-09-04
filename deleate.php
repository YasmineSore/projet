<?php
include 'connexion.php';
$id= $_GET['id'];
$req=mysqli_query($con,"DELETE  FROM user WHERE iduser=$id");
 header("Location:index.php");
?>