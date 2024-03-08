<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('receber/nome', function (request $request) {
    $nome = $request->input('nome');
    return $nome;
});

Route::get('receber/nome/idade', function (request $request) {
    $nome = $request->input('nome');
    $idade = $request->input('idade');
    return 'Meu nome é ' . $nome . ', tenho ' . $idade . ' anos';
});

Route::get('receber/nome/data/cidade', function (request $request) {
    $nome = $request->input('nome');
    $ano = $request->input('ano');
    $cidade = $request->input('cidade');
    return 'Meu nome é ' . $nome . ' nasci no ano de ' . $ano . ' na cidade de ' . $cidade;
});

Route::get('calculo', function (request $request) {
    $numeroUm = $request->input('primeiroNumero');
    $numeroDois = $request->input('segundoNumero');
    $resultado = $numeroUm + $numeroDois;
    return $resultado;
});

Route::get('subtração', function (request $request) {
    $numeroUm = $request->input('primeiroNumero');
    $numeroDois = $request->input('segundoNumero');
    $numeroTres = $request->input('terceiroNumero');
    $resultado = $numeroUm - $numeroDois - $numeroTres;
    return $resultado;
});

Route::get('divisão', function (request $request) {
    $numeroUm = $request->input('primeiroNumero');
    $numeroDois = $request->input('segundoNumero');
    $resultado = $numeroUm / $numeroDois;
    return $resultado;
});

Route::get('multiplicação', function (request $request) {
    $numeroUm = $request->input('primeiroNumero');
    $numeroDois = $request->input('segundoNumero');
    $resultado = $numeroUm * $numeroDois;
    return $resultado;
});

Route::get('media', function (request $request) {
    $numeroUm = $request->input('primeiroNumero');
    $numeroDois = $request->input('segundoNumero');
    $numerotres = $request->input('terceiroNumero');
    $numeroQuatro = $request->input('quartoNumero');
    $numeroCinco = $request->input('quintoNumero');
    $resultado = ($numeroUm + $numeroDois + $numerotres + $numeroQuatro + $numeroCinco) / 5;
    return $resultado;
});

Route::get('questão9', function (request $request) {
    $numeroUm = $request->input('primeiroNumero');
    $numeroDois = $request->input('segundoNumero');
    $resultado = $numeroDois / $numeroUm;
    return $resultado;
});

Route::get('dobro', function (request $request) {
    $numero = $request->input('numero');
    $dobro = $numero * 2;
    $resultado = "O dobro do " . $numero . " é igual a: " . $dobro;
    return $resultado;
});

Route::get('retangulo', function (request $request) {
    $base = $request->input('base');
    $altura = $request->input('altura');
    $resultado = "A area do retangulo é " . $base * $altura;
    return $resultado;
});

Route::get('porcentagem', function (request $request) {
    $valorOriginal = $request->input('valor');
    $desconto = $request->input ('desconto');
    $porcentagem = $valorOriginal / 100;
    $resultado = $valorOriginal - ($porcentagem * $desconto);  
    return $resultado;
});

Route::get('salario13', function (request $request) {
    $salario = $request->input('valor');
    $aumento = $request->input ('aumentoPercentual');
    $porcentagem = $salario / 100;
    $resultado = $salario . " " . $aumento . "% " . $porcentagem * $aumento + $salario;  
    return $resultado;
});

Route::get('porcentagem14', function (request $request) {
    $valorCompra = $request->input('valor');
    $pontos = $valorCompra / 10;
    $resultado = "Quantidade de pontos recebidos é: " . $pontos;
    return $resultado;
});

Route::get('comissão15', function (request $request) {
    $valorTotal = $request->input('valor');
    $desconto = 5;
    $porcentagem = $valorTotal / 100;
    $resultado = $valorTotal + ($porcentagem * $desconto);  
    return $resultado;
});

Route::get('dias16', function (request $request) {
    $dias = $request->input('dias');
    $horas = $dias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;
    $resultado = "dias: " . $dias . ", horas: " . $horas . ", minutos: " . $minutos . ", segundos: " . $segundos;
    return $resultado;
});
