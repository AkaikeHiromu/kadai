<?php

function root(int $v1,int $v2, int $v3){
  $kekka = pow($v1,$v2);
  echo $kekka."\n";
  if($kekka <= 0){
    $kekka = 0;
  }
  elseif($kekka >= $v3){
    $kekka = $v3;
  }
  echo $kekka;
}
root(1,2,3);
 ?>
