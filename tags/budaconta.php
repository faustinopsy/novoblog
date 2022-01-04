<?php 
  $linha=file("budismos.txt");
// Inicio Zero
  $visitas = $linha[0];
// cada vez que é processado, adiciona a soma de mais 1 acesso
  $visitas += 1;
// Abre o arquivo para gravação de dados, depois fecha
  $cf=fopen("budismos.txt","w");
  fputs($cf,$visitas);
  fclose($cf);
// exibe a quantidade de visitas
  echo $visitas;
  ?>