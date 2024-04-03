<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('exemplo condicao', function (request $request){
 $idade=$request->input('idade');
   $retorno= "";
   if($idade >= 18){
$retorno= "maior de idade";
   }
else {
   $retorno = "Menor de idade";
}
if($idade >= 100){
   $retorno= "Como você ta vivo?";
}

return $retorno;
}); 



Route::get('receber nome', function(Request $request){
    $nome=$request->input('name');
    return $nome;
});

Route::get('frase', function(Request $request){
    $nome=$request->input('name');
    $idade=$request->input('year');
    return "Meu Nome é " . $nome . " Tenho " . $idade . " anos de idade";
 });

 Route::get('frase2', function(Request $request){
    $nome=$request->input('name');
    $nasci=$request->input('ano');
    $cidade=$request->input('city');
    return "Meu Nome é " . $nome . " Nasci no Ano de " . $nasci . " E Moro em " . $cidade;
 });

 route::get('conta', function(Request $request){
    $numero1=$request->input('number');
    $numero2=$request->input('number2');
    $resultado = $numero1 + $numero2;
    return $resultado;
 });

 route::get('conta2', function(Request $request){
    $numero1=$request->input('number');
    $numero2=$request->input('number2');
    $numero3=$request->input("number3");
    $resultado= $numero1 - $numero2 - $numero3;
    return $resultado;
 });

 route::get('conta3', function(Request $request){
    $numero1=$request->input('number');
    $numero2=$request->input('number2');
    $resultado = $numero1 / $numero2;
    return $resultado;
 });
 
 route::get('conta4', function(Request $request){
    $numero1=$request->input('number');
    $numero2=$request->input('number2');
    $resultado = $numero1 * $numero2;
    return $resultado;
 });
 
 route::get('conta5', function(Request $request){
    $nota1=$request->input('number');
    $nota2=$request->input('number2');
    $nota3=$request->input("number3");
    $nota4=$request->input("number4");
    $nota5=$request->input("number5");
    $resultado = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5) / 5 ;
    return $resultado;
});

route::get('conta6', function(Request $request){
    $numero1=$request->input('number');
    $numero2=$request->input('number2');
    $resultado = $numero2 / $numero1;
    return $resultado;
 });

 route::get('conta7', function(Request $request){
    $numero1=$request->input('number');
    $resultado = $numero1 * 2 ;
    return "o dobro do numero " . $numero1 . "é" . " " .  "=" . $resultado ;
 });

 route::get('retangulo', function(Request $request){
    $base=$request->input('base');
    $altura=$request->input('altura');
    $resultado= $base*$altura;
    return $resultado;
 });

 route::get('test', function(Request $request){
    $valorOriginal=$request->input('valor');
    $percentual=$request->input('percentual');
    $valorDesconto= $valorOriginal/100 * $percentual;
    $valorComDesconto= $valorOriginal - $valorDesconto;
return $valorComDesconto ; 
});

route::get('salario', function(Request $request){
    $salario=$request->input('salario');
    $percentual=$request->input('percentual');
    $valorAcrescido= $salario/100 * $percentual;
    $valorComAumento= $salario + $valorAcrescido ;
return "o salario anterior era de " . $salario . " A porcentagem acrescida foi de " . $percentual ."%" . " que resultou em um salario de " . $valorComAumento; 
});

route::get('Pontos', function(Request $request){
    $gastos=$request->input('salario');
    $valorAcrescido= $gastos/10;
    return "voce ganhou: " . $valorAcrescido . " de Pontos!!!";
});

    
route::get('comissao', function(Request $request){
    $ganhoTotal=$request->input('valor');
    $valorComissao= $ganhoTotal/100 * 5 ;
 return $valorComissao ; 
 }); 
 
 
route::get('hora', function(Request $request){
    $dias=$request->input('dias');
    $horas= $dias * 24;
    $minutos= $horas*60;
    $segundos= $minutos*60;
    return $horas . ":" . $minutos . ":" . $segundos;
    });
    
    
route::get('produto', function(Request $request){
    $preco=$request->input('produto');
    $quantidadeComprado=$request->input('quantidade');
    $precoTotal=$preco*$quantidadeComprado;
    return "R$" . $precoTotal;
    });

    Route::get('verifica/Idade', function (request $request){
      $idade=$request->input('idade');
        $retorno= "";
        if($idade >= 18){
     $retorno= "maior de idade";
}
     else {
        $retorno = "Menor de idade";
}
     if($idade >= 100){
        $retorno= "Como você ta vivo?";
}
     
     return $retorno;
     }); 

     Route::get('Verificar/Par', function (request $request){
$numero=$request->input('numero');
if($numero %2 ==0){
 return "par";
}
else {
   return "impar";
}
});

Route::get('verifica/mais10', function (request $request){
   $numero=$request->input('numero');
     if($numero > 10){
  return "maior que 10";
}
elseif($numero=10){
   return "numero igual a 10";
}
else {
   return "menor que 10";
}
});

Route::get('verifica/calor', function (request $request){
   $temperatura=$request->input('temp');
if($temperatura>30){
   return "Esta quente";
}
else {
   return "esta frio";
}
});

Route::get('verifica/positivo', function (request $request){
   $numero=$request->input('numero');
     if($numero > 0){
  return "positivo";
}
elseif($numero<0){
   return "negativo";
}
else {
   return "igual a 0";
}
});

Route::get('numero/maior', function (request $request){
   $numero1=$request->input('numero1');
   $numero2=$request->input('numero2');
if($numero1>$numero2){
   return "numero maior é " . $numero1;
}
elseif($numero1<$numero2) {
   return "o numero maior é " . $numero2 ;
}
else{
   return "eles são iguais";
}
});

Route::get('divisivel', function (request $request){
   $numero=$request->input('numero');
   if($numero %3 ==0){
    return "divisivel";
   }
   else {
      return "não divisivel";
   }
   });

   Route::get('atividade/1', function (request $request){
      $numero=$request->input('numero');
        if($numero > 10){
     return "maior que 10";
   }
   elseif($numero==10){
      return "numero igual a 10";
   }
   else {
      return "menor que 10";
   }
   });

   Route::get('atividade/2', function (request $request){
      $numero=$request->input('numero');
        if($numero > 0){
     return "positivo";
   }
   elseif($numero<0){
      return "negativo";
   }
   else {
      return "igual a 0";
   }
   });

   Route::get('atividade/3', function (request $request){
      $idade=$request->input('idade');
        if($idade >= 18){
     return "maior de idade";
}
     else {
        return  "Menor de idade";
     }
   });

   Route::get('atividade/4', function (request $request){
      $numero=$request->input('numero');
      if($numero %2 ==0){
       return "par";
      }
      else {
         return "impar";
      }
      });

   Route::get('atividade/5', function (request $request){
      $numero1=$request->input('numero1');
      $numero2=$request->input('numero2');
   if($numero1>$numero2){
      return "numero maior é " . $numero1;
   }
   elseif($numero1<$numero2) {
      return "o numero maior é " . $numero2 ;
   }
   else{
      return "eles são iguais";
   }
   });

Route::get('atividade/6', function (request $request){
$numero=$request->input('numero');
if($numero %9 ==0){ 
return "o numero é divisivel por 9";
}
else{ 
   return "o numero nao e divisivel por 9";
}
});
Route::get('atividade/7', function (request $request){
   $temperatura=$request->input('temp');
if($temperatura>=30){
   return "Esta quente";
}
else {
   return "esta frio";
}
});

Route::get('atividade/8', function (request $request){
   $numero=$request->input('numero');
   if($numero %7 ==0){ 
      return "o numero " . $numero . " é multiplo de 7";
      }
      else{ 
         return "o numero " . $numero . " nao e multiplo de 7";
      }
});

Route::get('atividade/9', function (request $request){
   $idade=$request->input('idade');
   if($idade <12){
      return "voce e uma criança";
   }
   else {
      return "voce nao e uma criança";
   }
});

Route::get('atividade/10', function (request $request){
   $numero=$request->input('numero');
   $conta= $numero %2;
   if($conta>0){
 return "o numero e positivo e impar";
   }
   else {
      return "o numero ou e negativo ou e par";
}});
   Route::get('atividade/11', function (request $request){
      $numero=$request->input('numero');
      if($numero>100){
   return "o numero " . $numero . " e maior que 100";
 }
 elseif($numero==100){
    return "numero " . $numero . " e igual a 100";
 }
 else {
    return "o numero " . $numero . " e menor que 100";
 }
 });

 Route::get('atividade/12', function (request $request){
   $numero=$request->input('numero');
   if($numero %6 ==0)
   { 
   return "o numero " . $numero . " é divisivel por 6";
   }
   else
   { 
   return "o numero " . $numero . " nao e divisivel por 6";
   }
   });
   
   Route::get('atividade/13', function (request $request){
      $nome=$request->input('nome');
      if($nome=="alice"){
return "ola alice";
      }
      else {
         return "nao sei quem voce e";
      }
   });

   Route::get('atividade/14', function (request $request){
$idade=$request->input('idade');
$carteira=$request->input('carteira');
if($idade >= 18){
if($carteira=="sim")
return "voce pode dirigir";
}
 else{
   return " nao pode dirigir";
}});


 Route::get('atividade/15', function (request $request){
   $numero1=$request->input('numero1');
   $numero2=$request->input('numero2');
if($numero1<$numero2){
   return "o menor numero e ". $numero1;
}
elseif($numero1==$numero2) {
   return "eles sao iguais";
}
else {
   return "o menor numero e o numero " . $numero2; 
}});

Route::get('atividade/16', function (request $request){
   $nome=$request->input('nome');
   $idade=$request->input('idade');
   if($idade>=18){
      return "voce e maior de idade, " . $nome;
   }
   else{
      return "voce e menor de idade, " . $nome;
   }
});

Route::get('atividade/17', function (request $request){
$numero=$request->input('numero');
$numero2=$request->input('numero2');
if($numero==0){
   return "NAO FOI POSSIVEL REALIZAR A CONTA POIS O PRIMEIRO NUMERO E 0";
}
elseif($numero2==0){
 return "NAO FOI POSSIVEL REALIZAR A CONTA POIS O SEGUNDO NUMERO E 0";
}
else {
   return $numero/$numero2;
}

});

Route::get('atividade/18', function (request $request){
   $numero=$request->input('numero');
   $numero2=$request->input('numero2');
   $conta=$numero*$numero2;
   if ($conta>=100){
      return "o resultado e maior ou igual a cem";
   } 
   else{ 
     return "o resultado e menor que cem";
}});

Route::get('atividade/19', function (request $request){
   $numero=$request->input('numero');
   $numero2=$request->input('numero2');
   $conta=$numero+$numero2;
   if($conta %2 ==0){
   return $numero*$numero2;
   }
   else{
      return $numero/$numero2;
   }
});

Route::get('atividade//1', function (request $request){
   $nota=$request->input('nota');
   $nota2=$request->input('nota2');
   $nota3=$request->input('nota3');
   $media= ($nota+$nota2+$nota3)/3;
   if ($media>=7)
   return "aprovado com a media " . $media;
else {
   return "reprovado com a media " . $media;
}
});

Route::get('atividade//2', function (request $request) {
   $renda=$request->input('renda');
   if($renda<= 1900){
   return "isento de imposto";
   }
   if ($renda>=1901){
      if($renda<=2800)
      return "7% de imposto ";
   }
   if($renda){
if ($renda>=2801)
if ($renda<3700)
return "15% de imposto"; 
   }
    if($renda>=3700){
      return " 22% de imposto";
    }


});

Route::get('atividade//3', function (request $request){
$ano=$request->input('ano');
if ($ano%4==0){
return "é bissexto";
}
else {
   return "nao é bissexto";
}
});

