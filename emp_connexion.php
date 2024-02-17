<?php
  
  try{
    $con = new PDO('mysql:host=localhost;dbname=surtanprogrammer', 'root', '');
  } 
  catch(PDOException $ex){
     echo "Erreur connexion :".$ex->getMessage();
  }

?>
