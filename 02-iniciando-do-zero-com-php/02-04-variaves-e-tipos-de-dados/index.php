<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

// Padrao CamelCase
$userFirstName = "Alex";
$userLastName = "Medeiros";
echo "<h3>{$userFirstName} {$userLastName}</h3>";

$user_first_name = "Alex";
$user_last_name = "Medeiros";
echo "<h3>{$user_first_name} {$user_last_name}</h3>";

$userAge = "31";
echo "<p>{$userFirstName} {$userLastName} <span class='tag'>tem {$userAge}</span></p>";

//variável variável
$company = "UpInside";
$$company = "Treinamentos";
echo "<h3>{$company} {$UpInside}</h3>";

$calcA = 10;
$calcB = 20;
//$calcB = $calcA;
$calcB = &$calcA;   // calcB faz referencia a calcA

var_dump([
    "a" => $calcA,
    "b" => $calcB
]);


/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);



$true = true;
$false = false;

var_dump($true, $false);

$bestAge = ($userAge > 50);
var_dump($bestAge);

//todos os valores abaixos são nulos / false
$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;

var_dump($a, $b, $c, $d, $e);

if ($a || $b || $c || $d || $e) {
    var_dump(true);
} else {
    var_dump(false); // dará FALSE, pois todos os valores acima representam nulo no PHP
}

/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);
/**
 * É uma variável que nos retorna uma rotina ou um valor
 */
$code = "<article><h1>Um Call User Function!</h1></article>";
$codeClean = call_user_func("strip_tags", $code); // strip_tags remove todas as tags
var_dump($code, $codeClean);
/**
 * É tambem do tipo callback as Closures ou as funçoes Anominas
 */

$codeMode = function ($code) {
    var_dump($code);
};
$codeMode("<p><span class='tag'>#BoraProgramar</span></p>");






/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "Olá Mundo";
$array = [$string];
$object = new stdClass();
$object->hello = $string;
$null = null;
$int = 123123;
$float = 1.123123;

echo "<pre>", var_dump([
    $string,
    $array,
    $object,
    $null,
    $int,
    $float
]);
"</pre>";
