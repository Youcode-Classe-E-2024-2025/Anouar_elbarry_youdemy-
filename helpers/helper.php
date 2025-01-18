<?php
function dd($var){
    echo"<pre>";
   var_dump($var);
   echo "------------------------------------";
   print_r($var);
   echo"</pre>";
   die();
}
function convertDateFormat($dateString) {
    $date = DateTime::createFromFormat('Y-m-d H:i:s', $dateString);
    return $date->format('F d Y H:i:s');
}