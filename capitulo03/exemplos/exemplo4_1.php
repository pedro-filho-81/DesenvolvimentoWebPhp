<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Interpolação de variável</title>
</head>
<body>
   <h1>Interpolação de variável</h1>
   <p>
      A interpolação de variáveis consiste em incluir o valor de uma variável dentro da outra.
   </p>
   <?php 
      $palavra = "teste";
      $frase = "Isto é um $palavra";
      echo $frase;
   ?>
</body>
</html>