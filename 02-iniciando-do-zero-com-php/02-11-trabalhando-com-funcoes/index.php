<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);

require __DIR__ . "/functions.php";

var_dump(functionName("Pearl Jam", "AC/DC", "Guns N Roses"));
var_dump(functionName("Alex", "Sabrina", "Anthony"));
echo "<br>";
echo "<br>";
var_dump(optionArgs("alex"));
var_dump(optionArgs("alex", "Sabrina"));
var_dump(optionArgs("alex", "Sabrina", "Anthony"));


/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);

$weight = 75;
$height = 1.75;
echo calcImc();

/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);
$pay = payTotal(100);
$pay = payTotal(200);
$pay = payTotal(50);
echo $pay;

/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);
var_dump(myTeam("Alex", "Sabrina", "Thony"));
