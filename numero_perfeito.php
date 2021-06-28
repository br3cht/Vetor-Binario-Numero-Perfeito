<?php

function gerate_array(){
  $array = [];

  for($i = 0;  $i < 10; $i++)
    $array[$i] = rand(2,108);

  return $array;
}


$array = gerate_array();
$array_binario = [];

foreach ($array as $number) {
  $resultado =  0;
  for($i = 1; $i < $number; $i++ ){
    if($number % $i == 0 )
      $resultado = $resultado + $i;
  }

  if($resultado == $number)
    array_push($array_binario, 1);

  else
    array_push($array_binario, 0);
}

foreach ($array_binario as $item) {
  echo ( "[" .$item."]");
}

?>
