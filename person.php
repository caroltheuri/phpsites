<?php
//implementing interfaces
interface Person{
    public function speaks();
}
class Caroline implements Person {
    public function speaks(){
        return "kikuyu";
    }
}
class Njenga implements Person {
    public function speaks(){
        return "French";
    }
}
?>
require "person.php";
