<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     /* Escreva um algoritmo para ler 2 valores e se o segundo valor informado for ZERO,
      deve ser lido um novo valor, ou seja, 
      para o segundo valor não pode ser aceito o valor zero e imprimir o resultado da divisão do 
      primeiro valor lido pelo segundo valor lido.*/

     $nume1 = 50;
     $nume2 = 0;
     $result;

    do{
     $nume2 = 2;
     }while ($nume2==0); 
     $result = $nume1 / $nume2;
     echo"<p> O resultado da divisão é " . $result. "</p>";
    
    ?>
</body>
</html>