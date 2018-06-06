<?php

class Person{

    private $name;

    public function talk(){
        
        return "My name is " . $this->name;

    }

    /**
     * Get the value of name
     */ 
    public function getName():String
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    public static function  myFunction(){

        echo "My static method";
    }

}

$myPerson = new Person();
$myPerson->setName("Victor Wardi");
echo $myPerson->getName();

Person::myFunction();



?>