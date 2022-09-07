<?php
  $id = $_GET['id'];
  $texto = file("Cadastro/$id");
  foreach($texto as $line){
      echo "$line <br>";
  }
?>

