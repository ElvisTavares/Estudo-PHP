<?php

echo abs(10);
echo "<br><br> ---------- <br><br>";
//arredonda um numero
echo round(2.7);
echo "<br><br> ---------- <br><br>";

//arredonda pra cima

echo ceil(2.6);

//arredonda pra baixo
echo floor(2.9);
echo "<br><br> ---------- <br><br>";
//gera um inteiro aleatorio entre dois numeros

echo rand(1,50);
echo"<br>";

$lista = array("Morty", "Rick","Summer");
$x = rand(0,2);

echo "O sorteado é: ".$lista[$x];
