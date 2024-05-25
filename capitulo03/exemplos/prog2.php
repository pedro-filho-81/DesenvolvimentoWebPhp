<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Data de hoje</title>
   <style>
      h1, p {
         text-align: center;
      }
   </style>
</head>
<body>
   <h1>Data de Hoje</h1>
   <?php 
      // variável recebe a data de hoje
      $data_de_hoje = date("d/m/Y", time());
   ?>
   <p>
      Hoje é dia: 
      <?php 
         echo" $data_de_hoje";
      ?>
   </p>
</body>
</html>