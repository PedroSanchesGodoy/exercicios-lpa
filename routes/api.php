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

Route::get('compras17', function (request $request) {
    $precoProduto = $request->input('valorProduto');
    $quantidade = $request->input('quantidadeComprada');
    $resultado = "valor total: " . $precoProduto * $quantidade;
    return $resultado;
    });

    route::get('exemplo/condicao', function (Request $request) {
    $Idade = $request->input('idade');
    $retorno = "";
    if($Idade >= 18){
    $retorno = "Maior de idade";
    }
    else{
        $retorno = "Menor de idade";
    }
    return $retorno;

    });

    route::get('verifica/idade', function(Request $request){
        $idade = $request->input('idade');
        
    if($idade >= 18){
        return "Maior de idade";
    } else {
        return "Menor de idade";
    }

    });

    route::get('par/impar', function(Request $request){
        $numero = $request->input('numero');
        
    if($numero % 2){
        return "impar";
    } else {
        return "par";
    }

    });


    route::get('verifica/numero10', function(Request $request){
        $numero = $request->input('numero');
        
    if($numero > 10){
        return $numero . " é maior que 10.";
    } else {
        return $numero . " é menor que 10.";
    }

    });

    route::get('verifica/temperatura', function(Request $request){
        $temperatura = $request->input('temperaturaGraus');
        
    if($temperatura > 30){
        return "Está quente!";
    } else {
        return "Está friozinho!";
    }

    });



    Route::get('positivo/negativo', function(Request $request){
        $numero = $request->input('numero');
        
    if($numero > 0){
        return "Positivo";
    } elseif($numero == 0){
        return "Zero";
    }else {
        return "Negativo";
    } 
    

    });


    route::get('maior/numero', function(Request $request){
        $numero1 = $request->input('numero1');
        $numero2 = $request->input('numero2');
        
    if($numero1 > $numero2){
        return $numero1;
    } else {
        return $numero2;
    }

    });


    route::get('divisivel/tres', function(Request $request){
        $numero = $request->input('numero');
        
    if($numero % 3){
        return $numero . " não é divisivel por 3";
    } else {
        return $numero . " é divisivel por 3";
    }

    });

    Route::get('caralho', function(Request $request){
        $tedio = $request->input('NivelTedio');
        if($tedio < 5){
            return "Da para aguentar";
        } if($tedio > 7){
            return "ALGUEM ME MATA!!!";
        } else {
            return "Tedio";
        } 
    
    
        });








        route::get('lista/exercicio1', function(Request $request){
            $numero = $request->input('numero');
            
        if($numero > 10){
            return $numero . " é maior que 10.";
        } else {
            return $numero . " é menor que 10.";
        }
    
        });
    
        Route::get('lista/exercicio2', function(Request $request){
            $numero = $request->input('numero');
            
        if($numero > 0){
            return "Positivo";
        } elseif($numero == 0){
            return "Zero";
        }else {
            return "Negativo";
        } 
        
    
        });

        route::get('lista/exercicio3', function(Request $request){
            $idade = $request->input('idade');
            
        if($idade >= 18){
            return "Maior de idade";
        } else {
            return "Menor de idade";
        }
    
        });

        route::get('lista/exercicio4', function(Request $request){
            $numero = $request->input('numero');
            
        if($numero % 2){
            return "impar";
        } else {
            return "par";
        }
    
        });

        route::get('lista/exercicio5', function(Request $request){
            $numero1 = $request->input('numero1');
            $numero2 = $request->input('numero2');
            
        if($numero1 > $numero2){
            return $numero1;
        } else {
            return $numero2;
        }
    
        });


    route::get('lista/exercicio6', function(Request $request){
            $numero = $request->input('numero');
            
        if($numero % 9){
            return $numero . " não é divisivel por 9";
        } else {
            return $numero . " é divisivel por 9";
        }
    
        });    


    route::get('lista/exercicio7', function(Request $request){
            $temperatura = $request->input('temperaturaGraus');
            
        if($temperatura > 30){
            return "Está quente!";
        } else {
            return "Está friozinho!";
        }
    
        });
    
    
    route::get('lista/exercicio8', function(Request $request){
            $numero = $request->input('numero');
            
        if($numero % 7){
            return $numero . " não é multiplo de 7";
        } else {
            return $numero . " é multiplo de 7";
        }
    
        });  

    route::get('lista/exercicio9', function(Request $request){
            $idade = $request->input('idade');
            
        if($idade >= 12){
            return "Você não é mais criança!";
        } else {
            return "Você é uma criança!";
        }
    
        });    

    Route::get('lista/exercicio10', function(Request $request){
        $numero = $request->input('numero');

        if($numero > 0){
           if($numero % 2){
            return "positivo e ímpar.";
           } 
        }
        
    });

    Route::get('lista/exercicio11', function(Request $request){
        $numero = $request->input('numero');
        
    if($numero > 100){
        return "O numero é maior que 100";
    } elseif($numero == 100){
        return "O numero é 100";
    }else {
        return "O numero é menor que 100";
    } 
    

    });

    route::get('lista/exercicio12', function(Request $request){
        $numero = $request->input('numero');
        
    if($numero % 6){    
        return $numero . " não é divisivel por 6";
    } else {
        return $numero . " é divisivel por 6";
    }

    }); 


    Route::get('lista/exercicio13', function(Request $request){
        $nome = $request->input('Nome');
        
        if($nome == "Alice"){
            return "Olá, " . $nome;
        } else{
            return " ";
        }
    });

    
    Route::get('lista/exercicios14', function(Request $request){
        $idade = $request->input('idade');
        $carteira = $request->input('carteira');

        if($idade >= 18){
            if($carteira == "Sim"){
                return "Pode dirigir";
            }
        }
    });

    Route::get('lista/exercicio16', function(Request $request){
        $numero1 = $request->input('numero1');
        $numero2 = $request->input('numero2');

        if($numero1 = $numero2){ 
        } elseif($numero1 > $numero2){
            return $numero1;
            } else{
                return $numero2;
            }
        
    });

    route::get('lista/exercicio17', function(Request $request){
        $idade = $request->input('idade');
        $nome = $request->input('nome');
        
    if($idade >= 18){
        return "Você é maior de idade, " . $nome . "!";
    }

    });    

    route::get('lista/exercicio18', function(Request $request){
        $numero1 = $request->input('numero1');
        $numero2 = $request->input('numero2');
        $resultado = $numero1 / $numero2;
        
        if($numero1 != 0){
            if($numero2 != 0){
             return $resultado;
            } 
        } if($numero1 == 0){
            return "Não é possível efetuar a divisão pois o primeiro número é zero";
        } if($numero2 == 0){
            return "não é possível efetuar a divisão pois o segundo número é zero";
        }
    });


    route::get('lista/exercicio19', function(Request $request){
        $numero1 = $request->input('numero1');
        $numero2 = $request->input('numero2');
        $resultado = $numero1 * $numero2;

        if($resultado > 100){
            return $resultado . " é maior que 100";
        } else{
            return $resultado . " é menor que 100";
        }

    });

    route::get('lista/exercicio20', function(Request $request){
        $numero1 = $request->input('numero1');
        $numero2 = $request->input('numero2');
        $misterio = $numero1 + $numero2;
        if($misterio % 2){
            return $numero1 / $numero2;
        } else {
            return $numero1 * $numero2;
        }
    


    });