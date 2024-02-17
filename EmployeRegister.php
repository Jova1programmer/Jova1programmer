<?php
    include 'emp_connexion.php';

    if(isset($_POST['ENVOYER'])){
        $query = $con->prepare('insert into employe(Nom,Prenom,Email,Adresse)  values (?,?,?,?)');
        $query->execute(array($_POST['Nom'],$_POST['Prenom'],$_POST['Email'],$_POST['Adresse']));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styl.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=RegisterForm_E, initial-scale=1.0">
    <title>RegisterForm_E</title>
</head>
<body>
    <fieldset><legend><h1>EMPLOYE REGISTRATION </h1></legend>
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
            <input type="text" name="Nom" placeholder="enter your first name"><br><br>
        </div>
    <div class="form-group">
    <input type="text" name="Prenom" placeholder="last name"><br><br>
    </div>
    <div class="form-group">
        <input type="text" name="Email" placeholder="enter your email"><br><br>
     </div>
    <div class="form-group"> 
    <input type="text" name="Adresse" placeholder="Adresse"><br><br>
    </div>
    <input type="submit" name="ENVOYER" id="" ><br><br>
       </form>
       </div>
</fieldset>
</body>
</html>