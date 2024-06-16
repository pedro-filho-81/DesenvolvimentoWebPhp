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
   <h1>Escopo de Variável</h1>

   <?php // inicio super tag html PHP
      // var global pode ser vista por todos
      $num = 5000; 

      // cria função sem parâmetro
      function testa_escopo()
      {
         // variável interna só pode ser vista apenas pela função
         $num = 5;
         
         // exibe a variável interna
         echo 'Na função $num = '. $num . "<br>";
      } // end function

      // exibe o valor da variável global
      echo 'fora da função $num = '. $num . "<br>";

      // exibe o valor da variável interna num
      testa_escopo(); // chama função
   ?> <!-- end super tag html PHP -->

</body>
</html>