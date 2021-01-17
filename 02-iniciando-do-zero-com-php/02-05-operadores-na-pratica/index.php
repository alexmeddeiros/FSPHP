<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
echo fullStackPHPClassName("02.05 - Operadores na prática");

$operatorA = 5;
$operators = [
    "a += 5" => ($operatorA += 5),
    "a -= 5" => ($operatorA -= 5),
    "a *= 5" => ($operatorA *= 5),
    "a /= 5" => ($operatorA /= 5),

];

var_dump("<pre>", $operators, "</pre>");




/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
fullStackPHPClassSession("atribuição", __LINE__);
$incrementA = 5;
$incrementB = 5;
$increment = [
    "pós-incremento" => $incrementA++,
    "res-incremento" => $incrementA,
    "pré-incremento" => ++$incrementA,
    "pós-decremento" => $incrementB--,
    "res-decremento" => $incrementB,
    "pré-decremento" => --$incrementB
];
var_dump("<pre>", $increment, "</pre>");





/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */
fullStackPHPClassSession("comparação", __LINE__);

$relatedA = 5;
$relatedB = "5";
$relatedC = 10;
$related = [
    "a == b" => ($relatedA == $relatedB), //verifica se os VALORES são IGUAIS, ou seja TRUE.
    "a === b" => ($relatedA === $relatedB), //verifica se os TIPOS de dados são IGUAIS, ou seja FALSE.
    "a != b" => ($relatedA != $relatedB), //verifica se os VALORES são DIFERENTES, ou seja FALSE.
    "a !== b" => ($relatedA !== $relatedB), //verifica se os TIPOS de dados são DIFERENTES, ou seja TRUE.
    "a > c" => ($relatedA > $relatedC), //Maior que.
    "a < c" => ($relatedA < $relatedC), // Menor ou igual.
    "a >= b" => ($relatedA >= $relatedB), // Maior ou igual.
    "a <= c" => ($relatedA <= $relatedC), // Menor ou igual.

];
var_dump("<pre>", $related, "</pre>");





/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("lógicos", __LINE__);
$logicA = true;
$logicB = false;
$logic = [
    "a && b" => ($logicA && $logicB), //Ambos existem? true = existe; false = nao existe. Logo retornará um FALSE
    "a || b" => ($logicA || $logicB), // Um ou outro existe. Resultado = TRUE, pois $logicA = true
    "a" => ($logicA), // Existe $logicA?. reultado = TRUE.
    "! a" => (!$logicA), // Negando a existencia de $logicA. Resultado = FALSE, pois existe
    "! b" => (!$logicB) // Negando a existencia de $logicB. Resultado = TRUE, pois nao existe valor em B
];
var_dump("<pre>", $logic, "</pre>");




/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);
$calcA = 5;
$calcB = 10;

$calc = [
    "a + b" => ($calcA + $calcB), //adição
    "a - b" => ($calcA - $calcB), //subtração
    "a * b" => ($calcA * $calcB), //multiplicação
    "a / b" => ($calcA / $calcB), //divisão
    "a % b" => ($calcA % $calcB), //resto
];

var_dump("<pre>", $calc, "</pre>");
