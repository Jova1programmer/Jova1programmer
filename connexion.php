<?php
  
  try{
    $con = new PDO('mysql:host=localhost;dbname=surtanprogramme', 'root', '');
  } 
  catch(PDOException $ex){
     echo "Erreur connexion :".$ex->getMessage();
  }

?>