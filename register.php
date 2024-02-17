<?php
    include 'C:/xampp/htdocs/Tp/connexion.php';

    if(isset($_POST['envoyer'])){
        $query = $con->prepare('insert into register(nom,email,Telephone)  values (?,?,?)');
        $query->execute(array($_POST['nom'],$_POST['email'],$_POST['tele']));
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
n    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'enregistrement</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
           <div class="form-group">
               <label for="nom">Nom :</label>
                <input type="text" name="nom">
            </div> 
            
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="text" name="email">
            </div>
            
            <div class="form-group">
               <label for="">Contact :</label>
                <input type="text" name="tele">
            </div>
            
        
            <input type="submit" name="envoyer" id="">
        </form>
    </div>
</body>
</html>