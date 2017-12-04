<?php
trait movementsofAnimals{
    public function setMovement($movement){
       return $this -> movement= $movement;
    }
}
//creating a class
class Animals{
    var $skincolor="black";
    var $family="mammals";
    protected $movement;
    function sound(){
        return "moors";
    }
    use movementsofAnimals;
}
//creates a child class by using parent methods and adding more of its own
class Kangaroo extends Animals{
    public function move(){
        return "A kangaroo " . $this -> movement . " atleast thats how he moves" ."</i><br />";
    }
}
// creating an instance of a kangaroo child
$kangaroo1 = new Kangaroo();
// first access the parent's methods
$kangaroo1 ->setMovement('hops');
// after accessing the parent now access the child' properties.
$kangaroo1 = $kangaroo1 -> move();
$cow=new Animals;
$cows = $cow->sound(); //-> passes properties or functions of a class to an object.
//var_dump($cow);// it is used to see the content of the class.
$dog=new Animals;
$dog= $dog->skincolor="brown";


