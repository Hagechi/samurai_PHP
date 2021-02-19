<?php
class Human{
    function __construct(){
        $this->name = "努";
        $this->address = "岡山";
    }
    
    function show(){
        print($this->name."\n");
        print($this->address."\n");
    }
}

class Actor extends Human{}

$human = new Human();
$human->show();


$actor = new Actor();

$actor->name = "大泉";
$actor->address = "北海道";

$actor->show();

class Hoge
{
    function hello(){
        print("Hello PHP"."\n");
    }
}
$hoge = new Hoge();
$hoge->hello();
?>