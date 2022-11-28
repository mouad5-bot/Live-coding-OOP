<?php

// creat a class
class apprenant 
{
    //les proprieties
    const pi = 3.14;
    public $name = "mouad";
    public $age = 24;
    public $code = 55;

}

//creat an object 
$myobject = new apprenant();

//access to the prorieties
$myobject->name .= "fifel";
echo $myobject->name."\n";

$myobject->age += 6;
echo $myobject->age."\n";

//access to the const
    //1 - using the object (::scope resolution operator) 
    echo $myobject::pi."\n"; 

    //2 - using the class (::scope resolution operator) 
    echo apprenant::pi; 



?>