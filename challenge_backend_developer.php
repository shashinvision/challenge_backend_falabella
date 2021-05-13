<?php

/*
    Felipe Mancilla - http://felipemancilla.cf
*/

$replacer = ["IT", "Falabella", "Integraciones"];
$accumulator = [];

for ($i = 1; $i <= 100; $i++) {
	
  if ($i % 3 == 0 || $i % 5 == 0) {
    array_push($accumulator, $replacer[number_format($i % 3 == 0 && $i % 5 >= 1) + (number_format($i % 3 == 0 && $i % 5 == 0) * 2)]);
 	continue;
  }
	
  array_push($accumulator, $i);
}

print "<pre>";
print_r($accumulator);
print "</pre>";

?>
