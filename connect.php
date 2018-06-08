<?php
 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "";

  try{
      $connect = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
      $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $connect->exec("SET NAMES UTF8");
  }
  catch(PDOException $e){
      echo $e->getMessage();
  }
?>
