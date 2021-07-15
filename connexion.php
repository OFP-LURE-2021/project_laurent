<?php
   try{
      $pdo=new PDO("mysql:host=localhost;dbname=utilisateur","laurent","12345");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?> 