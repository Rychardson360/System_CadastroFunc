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
// validar formulário
// gravar infos do formulário no arquivo
// usar o scandir/ver documentação para listar os nomes dos arquivos criados
// criar automaticamente links que possam levar o arquivo
// readinfo.php de modo que cada link passe via GET o id/nome que deve ser lido
