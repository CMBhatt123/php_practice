<?php
$x=5; //global varaible
function my_Text(){
    global $x;
echo "Variable x inside function is :" .$x;
}
my_Text();
echo"<p> Variable x outside the function is: $x </p>";
?>
