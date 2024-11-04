<?php 
////Ejercicio 1//////////////////////////////////////////////////////////////////////
   function generarFibonacci ($numero){
      $serie = [];

      if ($numero >= 1){
         $serie[]= 0;
      }
      if($numero >=2){
         $serie[] = 1;
      }
      for($i = 2; $i<$numero; $i++){
         $serie[] = $serie[$i - 1] + $serie[$i - 2];
      }
      echo "Serie Fibonacci de $numero términos: " . implode(", ", $serie);
   }
    
   generarFibonacci(intval(readline("ingrese un numero:")));


////Ejercicio 2///////////////////////////////////////////////////////////////////////
   function esPrimo($numero) {
      
      if ($numero < 2) {
         echo "tu numero no es primo";
      }
      else
      {
         for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
               echo "tu numero no es primo"; 
            }
            else{echo "tu numero es primo";}
         }
      }

   }
   esPrimo(intval(readline("ingrese un numero:")));    


////Ejercicio 3 ////////////////////////////////////////////////////////////////
   function esPalindromo($texto) {
      
      $texto = strtolower($texto);
      $texto = preg_replace('/[^a-z0-9]/', '', $texto);
      if($texto === strrev($texto)){
         echo "La frase es un palindromo";
      }else{echo "La frase no es un palindromo";}
   }
   esPalindromo(readline("Verifica si tu frase el un palindromo:"));
?>
