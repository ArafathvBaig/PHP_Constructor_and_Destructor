<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class for Destructor program
 */
/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class for Destructor program
 */
class Destructor
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
    function __destruct()
    {
        echo "\nDestructor has been used";
    }
}

$destructor = new Destructor("Arafath", 24);
$destructor->show();
