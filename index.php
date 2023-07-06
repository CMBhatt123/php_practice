<?php
class Mobile{
var $model; //properties
function showModel($number){
    global $model;
    $model =$number;
    echo "Model number is: $model <br>";
}
}
$samsung = new Mobile;
$samsung-> showModel('A10');
$lg = new Mobile;
$lg-> showModel('G5');
?>