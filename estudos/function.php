<?php
function add_some_extra(&$string)
{
    $string .= ' levado';
}

$str = 'é isso moleke ';

add_some_extra($str);

echo $str;
echo "<br>";

function makecoffe($type = "Cappuccino") {
    return "Cafe $type.\n";
}

echo makecoffe();
echo makecoffe("expresso");

echo "<br>";
echo "<hr>";

function fazercafe($tipos = array("cappuccino"), $cafeteira = NULL)
{
    $dispositivo = is_null($cafeteira) ? "maos" : $cafeteira;
    return "Fazendo xicara de ".join(", ", $tipos) . " com $dispositivo.\n";
}

echo fazercafe();
echo "<br>";
echo fazercafe(array("cappuccino", "lavazza"), "chaleira");

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";


//objetos como valores padrão
class CafeteiraPadrao {
    public function preparar()
    {
        return 'Fazendo café';
    }
}

class CafeteiraChique
{
    public function preparar()
    {
        return 'Preparandoum belo cafe só para vcc';
    }
}

function fazercafes($cafeteir = new CafeteiraPadrao)
{
    return $cafeteir->preparar();
}

echo fazercafes();
echo fazercafes(new CafeteiraChique);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";

//funçoes anonimas
$greet = function($name) {
    printf("Hello, %s\r\n", $name);
};

$greet('Mr');

//Inherit $message
$message = 'Olaa';
$example = function () use ($message) {
    var_dump($message);
};
$example();

//herda valor variavel quando a função é definida e nao quando é chamada
$message = 'olasss';
$example();

//reseta a msg
$message = 'sou eu de novo';

//herdando por referencia

$examples = function () use (&$message) {
    var_dump($message);
};
$example();


echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";

//arrow functions
$y = 1;

$fn1 = fn($x) => $x + $y;

//equivalente anonima

$fn2 = function ($x) use ($y) {
    return $x + $y;
};
var_export($fn1(3));





