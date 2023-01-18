<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>DW3 - Desafio PHP - Vaga Dev</title>
</head>
<body>

    <h4>1. Escreva um programa PHP para encontrar três números de uma matriz de modo que a soma de três números consecutivos seja igual a um determinado número. Input: ([2, 7, 7, 1, 8, 2, 7, 8, 7], 16) <br>Output : Array<br>(<br>[0] => 2 + 7 + 7 = 16<br>[1] => 7 + 1 + 8 = 16<br>)</h4>

<?php

    function encontrarNumerosConsecutivos($numeros, $soma) {
        $valor = array();
        for($i = 0; $i < count($numeros) - 2; $i++) {
            if($numeros[$i] + $numeros[$i+1] + $numeros[$i+2] == $soma) {
                $valor[] = $numeros[$i] . " + " . $numeros[$i+1] . " + " . $numeros[$i+2] . " = " . $soma;
            }
        }
        return $valor;
    }

    $array_numeros = array(2, 7, 7, 1, 8, 2, 7, 8, 7);
    $soma = 16;
    $valor = encontrarNumerosConsecutivos($array_numeros, $soma);
    
    echo "<h4>RESPOSTA:</h4>";
    
    print_r($valor);
?>

<hr>

<h4>2. Escreva um programa PHP para encontrar um único número em uma matriz que não ocorra duas vezes.<br>Input : [5, 3, 4, 3, 4]<br>Output : Array<br>(<br>[0] => 5<br>[1] => 3<br>[2] => 4<br>[3] => 3<br>[4] => 4<br>)<br><br>Single Number: 5</h4>

<?php

function buscarUnicoNumero($parametro) {
    $resultado = array();
    $unique = 0;
    foreach ($parametro as $dados) {
        if (!in_array($dados, $resultado)) {
            $resultado[] = $dados;
        } else {
            $key = array_search($dados, $resultado);
            unset($resultado[$key]);
        }
    }
    $unique = $resultado[0];
    return $unique;
}

$numeros = array(5, 3, 4, 3, 4);
$valor_unico = buscarUnicoNumero($numeros);

$resposta = "Single Number: ".$valor_unico;

echo "<h4>RESPOSTA:</h4>";
    
print_r($resposta);
?>

<hr>

<h4>3. Escreva um programa PHP para colocar todos os zeros no final de um array.<br>Input : [0,2,3,4,6,7,10]<br>Output : Array<br>(<br>[0] => 2<br>[1] => 3<br>[2] => 4<br>[3] => 6<br>[4] => 7<br>[5] => 10<br>[6] => 0<br>)</h4>

<?php

function moverZeroProFinal($numeros_do_array) {
    $contador = 0;
    $n = count($numeros_do_array);
    for ($i = 0; $i < $n; $i++) {
        if ($numeros_do_array[$i] != 0) {
            $numeros_do_array[$contador++] = $numeros_do_array[$i];
        }
    }
    while ($contador < $n) {
        $numeros_do_array[$contador++] = 0;
    }
    return $numeros_do_array;
}

$numeros = array(0, 2, 3, 4, 6, 7, 10);
$resultado_final = moverZeroProFinal($numeros);

echo "<h4>RESPOSTA:</h4>";

print_r($resultado_final);

?>
</body>
</html>