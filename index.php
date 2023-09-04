<body>
<table>
 
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Date</th>
        <th>MDP</th>
        <th>genre</th>
        <th>Pseudo</th>
        <th>E-mail</th>
        <th>Téléphone</th>
        <th>Action</th>

    </tr>
    <?php
        include'connexion.php';
        $req=mysqli_query($con,"SELECT * FROM user");

        if(mysqli_num_rows($req)==0){
        $message ='il n y a pas encore de donnée';
        echo $message;
        }else{
        $message='Liste des données';
        echo $message;
        while($row=mysqli_fetch_assoc($req)){?>
        
    <tr>
        <td><?=$row['nom'] ?></td>
        <td><?=$row['prenom'] ?></td>
        <td><?=$row['datedenaissance'] ?></td>
        <td><?=$row['motdepasse'] ?></td>
        <td><?=$row['genre'] ?></td>
        <td><?=$row['pseudo'] ?></td>
        <td><?=$row['email'] ?></td>
        <td><?=$row['tel'] ?></td>
        <td><a href='deleate.php?id=<?=$row['iduser'] ?>'>supprimer</a></td>
        <td><a href='modify.php?id=<?=$row['iduser'] ?>'>Modifier</a></td>

        <br>
    </tr> 
</table>
<?php  }            
}
?>
</body>