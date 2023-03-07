<?php
$txt = 'Hello, World!';
echo $txt;
echo "<br>";

//a mayuscula//
echo strtoupper($txt);
echo "<br>";

//contar caracteres//
echo strlen($txt);
echo "<br>";

//orden inverso//
echo strrev($txt);
echo "<br>";

//convinacion de strings//
$txt2 = "Aquest és el curs de PHP.";
$result = $txt . ' ' . $txt2;
echo $result;
echo "<br>";

?>