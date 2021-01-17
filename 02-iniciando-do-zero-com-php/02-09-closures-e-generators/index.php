<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 -  Closures e generators");


fullStackPHPClassSession("closures", __LINE__);
$myAge = function ($year) {
    $age = date("Y") - $year;
    return "<p>você tem  {$age} anos!</p>";
};
echo $myAge(1989);

//======================================

$priceBrl = function ($price) {
    return number_format($price, 2, ",", ".");
};

echo "<p>O projeto custa R$ {$priceBrl(3600)}. Vamos fechar?</p>";

//======================================

$myCart = [];
$myCart["totalPrice"] = 0;
$cardAdd = function ($item, $qtd, $price) use (&$myCart) {
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];
};

$cardAdd("HTML5", 1, 495);
$cardAdd("PHP", 2, 999);

var_dump($myCart);


/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

$iterator = 40000;

function showDates($days)
{
    $saveDate = [];
    for ($day = 1; $day < $days; $day++) {
        $saveDate[] = date("d/m/Y", strtotime("+{$day}days")); //armazena  valores na var saveDate[]
    }
    return $saveDate;
};

// echo "<div style='text-align: center'>";
// foreach (showDates($itarator) as $date) {
//     echo "<small class='tag'>{$date}</small>" . PHP_EOL;
// }
echo "<div style='text-align: center'>";
foreach (showDates(0) as $date) {
    echo "<small class='tag'>{$date}</small>" . PHP_EOL;
}
echo "</div>";

//com o generator:
function generators($days)
{
    for ($day = 1; $day < $days; $day++) {
        yield date("d/m/Y", strtotime("+{$day}days")); // nao armazena mais valores na variavel
    }
}
echo "<div style='text-align: center'>";
foreach (generators($iterator) as $date) {
    echo "<small class='tag'>{$date}</small>" . PHP_EOL;
}
echo "</div>";
