<?php
    echo "<br>"."******************** Classes ************************"."<br>";

    echo "<br> Reflection";

    /*
        “reflection” in software development means that a program knows its own structure at runtime 
        and can also modify it. This capability is also referred to as “introspection”.
        the types of data in the memory can change dynamically in PHP. For example, 
        there is always an attempt to determine an integer value for scalar types. 
        Variables also do not have to be declared explicitly in PHP. 
        This means that the declaration of a new variable does not necessarily have to specify a data type
        in this case.    
        Reflection is generally defined as a program's ability to inspect itself and modify 
        its logic at execution time.
        In less technical terms, reflection is asking an object to tell you about its properties
        and methods,
        and altering those members

        The ReflectionClass class reports information about a class.
        Reflection provides information about the modifiers of a class or interface—whether that class is final or static, for example.

        It can also reveal all the methods and data members of a class and all the modifiers applied to them.

        Parameters passed to methods can also be introspected and the names of variables exposed. 
        Through reflection it is possible to automate the documentation of built-in classes or user-defined classes.
        It turns out that the central repository of information about classes was right in front of us all the time.
        PHP can tell us all about itself through the mirror of the reflection classes.
        The reflection group of classes or Application Programming Interface (API) 
        is made up of a number of different classes and on
    
    */


    /*************************************** More detailed example************************************************/
    // https://code.tutsplus.com/tutorials/reflection-in-php--net-31408
    
    // class OpenSource {
    //     private $instructor;
    //     protected $sub_tracks;
    //     public $list_of_courses;
    //     const PI = 3.1415;
    //     public function __construct() {
    //         $this->instructor = "Noha";
    //         $this->sub_tracks = "Application";
    //         $this->list_of_courses = "PHP";
    //     }
    //     public function getInstructor() {
    //         return $this->instructor;
    //     }
    //     public function setInstructor($instructor) {
    //         $this->instructor = $instructor;
    //     }
    //     private function getsub_tracks() {
    //         return $this->sub_tracks;
    //     }
    // }

    // $reflection_class = new ReflectionClass("Opensource");
    // foreach ($reflection_class->getMethods() as $method) {
    //     echo $method->getName() . "<br>";
    // }

    //// when to use 
    // 1- perform unit testing to your application
    // 2- accessing information about unknown classes 
        
 
       
    /***************************************** anonymous class**************************************/
    #From PHP 7. Anonymous classes are useful when simple, one-off objects need to be created.
    #note ananymous class can cause problem when you define a class after it
    #can be used to implement interfaces 
    interface DisplayMsg {
        public function printMsg(string $msg);
    }
  
    class Application {
        private $displayer;

        public function getDisplayer(): DisplayMsg {
            return $this->displayer;
        }

        public function setPrinter(DisplayMsg $dismsg) {
            $this->displayer = $dismsg;
        }  
    }
  
    $app = new Application;
    var_dump($app->getDisplayer());
    $app->setPrinter(new class implements DisplayMsg {
            public function printMsg(string $msg) {
                echo($msg)."<br>";
            }
        }
    );

    $app->getDisplayer()->printMsg("My first Log Message using anonymous class ");
    

    
?>