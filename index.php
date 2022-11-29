<?php

    // creat a class
    class apprenant 
    {
        //les proprieties
        const pi = 3.14;
        public $name = "mouad";
        public $age = 24;
        public $code = 55;

        //Les methodes 
        // getters and setters 
        public function getName()
        {
            return $this->name;
        }

        public function setName($tempName) 
        {
            $this->name = $tempName;
        }

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
        echo apprenant::pi."\n"; 

    //accesss to the methodes 
        $myobject->setName("aymen");
        echo $myobject->name."\n";  
        // or    
        echo $myobject->getName()."\n";


//================================ constructor =========================================

    // creat a class
    class apprenantTest 
    {
        //les proprieties
        public $name;
        public $age;

        function __construct($name,$age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        function __destruct()
        {
            echo "\n by=>".$this->name;
        }

        public function getName()
        {
            return $this->name; 
        }
        
        public function setName($tempName)
        {
            $this->name = $tempName;
        }

        public function toString()  //afficher les donnees d'un objets
        {
            return "nom :".$this->name." age:".$this->age;
        }
    }

    $apprenant1 = new apprenantTest("ali", 33); 
    $apprenant2 = new apprenantTest("youcode", 313);
    echo $apprenant1->toString()."\n";
    echo $apprenant2->toString();

    //======================= destructor =================================
    
    //A destructor is called when the object is destructed or the script is stopped or exited. 
    //If you create a __destruct() function, PHP will automatically call this function at the end of the script.
    
    class Fruit {
        public $name;
        public $color;
      
        function __construct($name) {
          $this->name = $name;
        }
        function __destruct() {
          echo "\n"."The fruit destruct is {$this->name}."."\n";
        }
      }
      
      $apple = new Fruit("Apple");
?> 