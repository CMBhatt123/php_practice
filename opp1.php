<?php
class car{
    public $name,$price;
    function model1()
    {
        return $this->name;
        return $this->price;
    }
    
    function model2()
    {
        return $this->price;
    }
}
$c1= new car();
    $c1->name="Maruti";
    $c1->price="50 million";
    echo $c1-> model1()."<br>";
    echo $c1-> model2();

?>