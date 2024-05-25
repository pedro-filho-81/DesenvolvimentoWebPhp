<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Frases nas variáveis</title>
   <style>
      * {
         text-align: center;
      }
   </style>
</head>
<body>
   <h1>Usando o comando echo</h1>
   <p>
      Usando o comando echo para imprimir os <br>valores das variáveos PHP.
   </p>
   <h2>Interpolação de variáveis</h2>
   <p>
      Trata-se da inclusão do valor de uma variável dentro de outra. 
   </p>
   <?php 
      // variáveis recebem valores
      $time = "Grêmio";
      $ano = 1983;
      $frase1 = "O $time é o melhor time de futbol do mundo.";
      $frase2 = "O $time foi campeão do mundo em $ano";
      // exibe resultados
      echo"<h3>$frase1</h3>";
      echo"<h3>$frase2</h3>";
   ?>
</body>
</html>