<?php 

    /*
        An Interface allows the users to create programs, 
        specifying the public methods that a class must implement, 
        without involving the complexities and details of how the particular methods are implemented.
        It is generally referred to as the next level of abstraction. 
        It resembles the abstract methods, resembling the abstract classes.

        An interface allows unrelated classes to implement the same set of methods, 
        regardless of their positions in the class inheritance hierarchy.
        An interface can model multiple inheritances because a class can implement more than one
        interface whereas it can extend only one class.
        The implementation of an inheritance will save the caller from full implementation
        of object methods and focus on just he objects interface, 
        therefore, the caller interface remains unaffected.
    
    */

    interface Tracks { 
        public  function setCourses($course); 
        public  function setInstructors($instructor); 
     
    }  
    class OpenSource implements Tracks{ 
        private $instructor; 
        private $course;
        public  function setCourses($course="php") {  
            $this->$course=$course;
            echo $course."<br>";
        }  
        public function setInstructors($instructor="noha"){  
            $this->$instructor=$instructor;
            echo $instructor."<br>";
        } 
    } 

    $opensource=new OpenSource();
    $opensource->setCourses("Noha");
    $opensource->setInstructors("php");

    

     /* Interface can extend onther interface */
    interface MyInterfaceName1{ 
        public  function methodA($test); 
    } 
      
    interface MyInterfaceName2 extends MyInterfaceName1{ 
        public  function methodB(); 
    } 
    class test implements MyInterfaceName2{
        public $test;
        #overriding 
        function methodA($test){
            // echo 'Welcome to method 1 <br>';
            return $this->test=$test;
        }
        function methodB(){
            echo 'Welcome to method 2 <br>';
        }
        
    }

    $test=new Test();
    echo $test->methodA("text")."<br>";
    $test->methodB();
   
    /************************* inheritance ***********************/
    class Track {
        var $name;
        var $course;

        public function __construct($name, $course){
            $this->name=$name;
            $this->course=$course;
        }   
        
        /* Member functions */
        function setName($name){
           $this->name = $name;
        }
        
        function getName(){
           echo $this->name ."<br/>";
           return $this->name;
        }
        
        function setCourse($course){
           $this->course = $course;
        }
        
        function getCourse(){
           echo $this->course ." <br/>";
        }
     }
    class OS extends Track {
        var $instructor;
        
        function setInstructor($instructor){
           $this->Instructor = $instructor;
        }
        
        function getInstructor(){
           echo $this->Instructor. "<br />";
        }
        // calling parent constructor 
        public function __construct($instructor,$name,$course){
            $this->instructor=$instructor;
            parent::__construct($name,$course);

        }
    }

    $s= new OS('Noha','Application','PHP');
    var_dump($s);
    $s->setName('Application');
    echo "calling fun.  ".$s->getName();
   
    /// preventing inheritance and overriding

    #1-final 
    /* When you use this keyword in front of a function declaration, 
        that function cannot be overridden in any subclasses. 
    */

    class Base { 
        // Final method 
        final function printdata() { 
            echo "<br> Base class final printdata function."; 
        } 
        // Non final method 
        function nonfinal() { 
            echo "<br> This is nonfinal function of base class."; 
        } 
    } 
  
    // Class that extend base class 
    class Derived extends Base { 
        // Inheriting method nonfinal  
        function nonfinal() { 
            echo "<br> Derived class non final function"; 
        } 
        
        // Here printdata function can not be overridden 
    } 
  
    $obj = new Derived; 
    $obj->printdata(); 
    $obj->nonfinal(); 

    #final class, you cannot inherit from it 
    final class Finalclass { 
      
        // Final method 
        final function printdata() { 
            echo " <br> final base class final method"; 
        } 
              
        // Non final method 
        function nonfinal() { 
            echo "<br> non final method of final base class"; 
        } 
    } 
      
    $obj = new Finalclass; 
    $obj->printdata(); 
    $obj->nonfinal(); 
    // class newclass extends Finalclass { } 