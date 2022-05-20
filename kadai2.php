<?php
$yuubin = '567-0004';
function kensaku($yuubin){
    $str = file_get_contents('https://map.yahooapis.jp/search/zip/V1/zipCodeSearch?query='.$yuubin.'&appid=dj00aiZpPTdMM2piRTFVUldFSyZzPWNvbnN1bWVyc2VjcmV0Jng9ODE-');

    return $str;
}
$str = kensaku ($yuubin);

echo $str;
 ?>
