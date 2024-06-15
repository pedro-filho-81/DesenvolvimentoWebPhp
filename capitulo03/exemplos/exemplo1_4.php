<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Escopo de variável</title>
   <style>
      * {
         text-align: center;
      }
   </style>
</head>
<body>
   <?php 
      $num = 5000; // var global

      // cria função
      function testa_escopo()
      {
         $num = 5; // var interna
         // exibe
         echo 'Na função $num = '. $num . "<br>";
      }
      // exibe
      echo 'fora da função $num = '. $num . "<br>";
      testa_escopo(); // chama função
   ?>
</body>
</html>