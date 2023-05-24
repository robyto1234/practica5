<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\StringInput;

use function PHPUnit\Framework\stringContains;

class calcon extends Controller
{
    
    
    /*CONTAR PALABRAS*/
    function calcularVocal(Request $request){
        $caden = $request->cade;
        $vocEnco = 0;
        $longi = strlen($caden);
        
    
        for ($i = 0; $i < $longi; $i++) { 
    
            if (in_array($caden[$i], ["a", "e", "i", "o", "u"])) {
                $vocEnco++;
            }
        }
        echo "La cadena \" ".$caden."\" tiene ".$vocEnco." vocales";
        return view('vistaRegreso');
         
    }
    
    
    /*CONTAR PALABRAS*/
    function calcularConta(Request $request){ 
        $caden = $request->cade;
        
        $prod=str_word_count($caden);
        echo "La cadena \" ".$caden."\" tiene ".$prod." palabras";
       
        return view('vistaRegreso', compact('caden', 'prod')); 
    }
    /*FIBONACCI*/
    function calcularFibo(Request $request){ 
       $request->validate([ 'n' => 'required|numeric|min:1|max:20', ]); 
       $n = intval($request->n); 
       $num1 = 0;
       $num2 = 1;
       echo"la serie fibonacci de ".$n." elementos es: ";
       // Imprimir el primer número
       
       echo $num1;
       // Si el número de término es mayor que 1, imprimir el segundo número
       if ($n > 1) {
         echo ", " . $num2;
       }
       // Generar los términos restantes e imprimirlos
       for ($i = 2; $i < $n; $i++) {
         $num3 = $num1 + $num2;
        echo ", " . $num3;
         $num1 = $num2;
         $num2 = $num3;
       }
       return view('vistaRegreso');
    }
    
    /*NUMERO PERFECTO*/
    function calcularPerfec(Request $request){ 
        $request->validate([ 'n' => 'required|numeric|min:1|max:99999999', ]); 
        $n = intval($request->n); 
        $sum = 0; 
    
        for ($i=1; $i<$n; $i++) {
            if ($n%$i==0) {
                $sum+=$i;
            }
        }
         
        if($sum == $n)
           echo"El numero ".$n." es perfecto";
        else
        echo"El numero ".$n." no es perfecto";
        return view('vistaRegreso'); 
    }


}
