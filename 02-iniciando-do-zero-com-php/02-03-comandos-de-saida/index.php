<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);
echo "<p>Olá mundo!", " ", "<span class='tag'>#BoraProgramar!</span>", "</p>";

$hello = "Olá Mundo!";
$code = "<span class='tag'>#BoraProgramar!</span>";

echo "<p>$hello</p>";
echo '<p>$hello</p>';

$day = "dia";
echo "<p>falta 1 $day para o evento</p>";
// Boa prática é sempre proteger a variável:
echo "<p>faltam 2 {$day}s para o evento</p>";


echo "<h3>{$hello}</h3>";
echo "<h4>{$hello} {$code}</h4>";
?>

<!-- Tag shorg. É a mesma coisa que escrever: <?php ?> dentro de um bloco html:: -->
<h3><?= $hello; ?></h3>




<?php
/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);
// print é como o echo, mas nao tao recursiva.
// print $hello, $code;
print "$hello";
print "$code";


/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);
// print_r serve pra exibir vetor

$array = [
    "company"   => "UpInside",
    "course"    => "FSPHP",
    "class"     => "Comandos de saída"
];

// print_r($array);
echo "<pre>", print_r($array), "</pre>";
/** com o comando acima, após a exibixao do array, mostrará o n 1 de TRUE.
 * para nao mostrar o n 1 ao final do array, é necessário da um return TRUE
 * no print_r após a variável:
 */
echo "<pre>", print_r($array, true), "</pre>";

/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);
// Serve pra dá saída a uma variável formatada:

$article = "<article><h1>%s</h1><p>%s</p></article>";
$title = "{$hello} {$code}";
$subtitle = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it 
    to make a type specimen book. It has survived not only five centuries, but also the leap into electronic";

/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);
$company = "<article><h1>Escola %s</h1><p>Curso <b>%s</b>, aula <b>%s</b></p></article>";
vprintf($company, $array);
echo vsprintf($company, $array);

/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);
var_dump(
    $array
);
