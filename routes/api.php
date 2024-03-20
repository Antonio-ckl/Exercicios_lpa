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
