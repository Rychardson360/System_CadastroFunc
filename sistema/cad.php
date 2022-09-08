<?php
  extract($_POST);
  $file = fopen("Cadastro/$id.txt",'a+');
  fwrite($file,"Id: $id\nNome: $nome\nCargo: $cargo\nSalário: $sal\nQuantidade de Dependentes: $depen\n");
  $arquivo = scandir('Cadastro');
  array_shift($arquivo);
  array_shift($arquivo);
  foreach($arquivo as $line){
      echo '<a href=readinfo.php?id='.$line.'>'.$line.'<br>';
  }
  fclose($file);
?>
