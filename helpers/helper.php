<?php
function dd($var){
   var_dump($var);
   print_r($var);
   die();
}
function convertDateFormat($dateString) {
    $date = DateTime::createFromFormat('Y-m-d H:i:s', $dateString);
    return $date->format('F d Y H:i:s');
}