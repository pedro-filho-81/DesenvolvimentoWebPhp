<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>O comando echo do Php</title>
   <style>
      * {
         text-align: center;
      }
   </style>
</head>
<body>
   <h1>O comando echo do Phq</h1>

   <p>
      O comando echo do PHP imprime textos na tela.
   </p>

   <?php 
      // variável
      $dia_de_hoje = date("d/m/y", time());

      echo"<h2>Hoje é dia: $dia_de_hoje</h2>";
   ?>
</body>
</html>