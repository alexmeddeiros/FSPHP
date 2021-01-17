<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.02 - Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);
/**
 * O PHP é uma linguagem feita em Ingles, portanto não
 * existe acentos, por isso precisamos trabalhar com multibyte.
 */

$string = "O último show do Guns N Roses foi incrível!";

echo "<p>string => ", $string . "</p>";
echo "<p>strlen => ", strlen($string) . "</p>";
// O mais indicado porque nao conta os accentos e espaços como o strlen
echo "<p>mb_strlen => ", mb_strlen($string) . "</p>";
echo "<p>substr => ", substr($string, "9") . "</p>";
// O mb_ antes do tratamento da função significa multibyte
echo "<p>mb_substr => ", mb_substr($string, "9") . "</p>";
echo "<p>strtoupper => ", strtoupper($string) . "</p>";
echo "<p>mb_strtoupper => ", mb_strtoupper($string) . "</p>";




/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversão de caixa", __LINE__);

$mbString = $string;

echo "<p>mb_strtoupper => ", mb_strtoupper($mbString) . "</p>";
echo "<p>mb_strtolower => ", mb_strtolower($mbString) . "</p>";

//======== Conversão para titulos ============
echo "<p>mb_convert_case UPPER => ", mb_convert_case($mbString, MB_CASE_UPPER) . "</p>";
echo "<p>mb_convert_case LOWER => ", mb_convert_case($mbString, MB_CASE_LOWER) . "</p>";
echo "<p>mb_convert_case TITLE => ", mb_convert_case($mbString, MB_CASE_TITLE) . "</p>";




/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);


/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);
