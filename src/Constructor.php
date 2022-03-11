<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class for Constructor program
 */
class Constructor
{
    var $name;
    var $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function show()
    {
        echo "\nName: " . $this->name;
        echo "\nAge: " . $this->age;
    }
}

/**
 * class B has a non-parameterized constructor
 * we can call parent class constructor inside it,
 * using parent::__construct()
 */
class B extends Constructor
{
    function __construct()
    {
        echo "\nInside Class B Constructor";
        parent::__construct("Karimulla", 58);
    }
}

/**
 * class C doesn't have a constructor
 * but by C class object we can use its parent constructor and
 * access the other functions
 */
class C extends Constructor
{
}
$constructor = new Constructor("Arafath", 24);
$constructor->show();
$b = new B();
$b->show();
$c = new C("Shafifa", 6);
$c->show();
