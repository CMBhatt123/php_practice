<?php
class Mobile{
var $model; //properties
function showModel($number){
    global $model;
    $model =$number;
    echo "Model number is: $model";
}
}
$samsung = new Mobile;
$samsung-> showModel('A10');
?>