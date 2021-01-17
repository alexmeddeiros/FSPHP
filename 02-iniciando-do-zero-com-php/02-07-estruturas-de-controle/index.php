<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.07 - Estruturas de controle");

/*
 * [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 * [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 * [ else ] https://php.net/manual/pt_BR/control-structures.else.php
 */
fullStackPHPClassSession("if, elseif, else", __LINE__);

$test  = true;

if (true) {
    var_dump(true);
} else {
    var_dump(false);
}

$age = 55;

if ($age < 32) {
    var_dump("Bandas Coloridas");
} elseif ($age >= 20 && $age < 50) {
    var_dump("Ótimas Bandas");
} else {
    var_dump("Rock and Roll Raiz");
};

$hour = 51;
if ($hour >= 5 && $hour < 23) {
    if ($hour < 7) {
        var_dump("Bob Marley");
    } else {
        var_dump("Afterbrighe");
    }
} else {
    var_dump("zzzZZZZ");
}



/*
 * [ isset ] https://php.net/manual/pt_BR/function.isset.php
 * [ empty] https://php.net/manual/pt_BR/function.empty.php
 */
fullStackPHPClassSession("isset, empty, !", __LINE__);
$rock = "";
// ! = Negação
// empty = verifica se a @var existe e tem conteudo. Se existir e extiver vazia ele nao aceita
// isset = verifica se a variavel existe
if (!isset($rock)) { // negação
    var_dump("Rock And Roll");
} else {
    var_dump("Die");
}
echo "</br>";
$rockAndRoll = "Nirvana";
if (!empty($rockAndRoll)) {    //(empty($rockAndRoll)) {
    var_dump("Rock existe e toca {$rockAndRoll}");
} else {
    var_dump("Não existe ou nao está tocando!");
}





/*
 * [ switch ] https://secure.php.net/manual/pt_BR/control-structures.switch.php
 */
fullStackPHPClassSession("switch", __LINE__);

$payment = "credit_card";
switch ($payment) {
    case "billet_print";
        var_dump("boleto impresso");
        break;
    case 'cancelado':
        var_dump("canceled cancelado");
        break;
    case 'cancelado':
        var_dump("canceled cancelado");
    case 'past_due':
    case 'pending':
        var_dump("Aguardando pagamento");
        break;
    case 'approved':
    case 'completed':
        var_dump("Pagamento aprovado");
        break;
    default:
        var_dump("Erro ao processar pagamrnto");
        break;
};
