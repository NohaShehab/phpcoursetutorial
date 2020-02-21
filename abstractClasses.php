<?php 
    #any class abstract methods --> will be an abstract one
    #used to provide default structure to the project

    abstract class Base { 
        function __construct() { 
            echo " <br> <b> This is abstract class constructor "; 
        } 
      
        // This is abstract function #abstract function cannot contain body
        abstract function printdata(); 
    } 
    class Derived extends base { 
        function __construct() { 
            echo "<br> <b> Derived class constructor"; 
            Base::__construct();
        } 
        function printdata() { 
            echo "<br> <b> Derived class printdata function"; 
        } 
    } 
    $b1 = new Derived; 
    $b1->printdata(); 

    #traits
    #PHP allows single inheritance 
    #traits A Trait is similar to a class, 
    #but only intended to group functionality in a fine-grained and consistent way.

    trait Hello {
        public function sayHello() {
            echo ' <br> Hello ';
        }
    }
    trait World {
        public function sayWorld() {
            echo 'World';
        }
    }
    class MyHelloWorld {
        use Hello, World;
        public function sayExclamationMark() {
            echo '!';
        }
    }
    $o = new MyHelloWorld();
    $o->sayHello();
    $o->sayWorld();
    $o->sayExclamationMark();

    