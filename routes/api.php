<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('receber/nome', function(Request $request){
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