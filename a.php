<?php
namespace s {
    class phpClass { 
        
        public function __call($name, $arguments) {  
            // echo "Calling object method '$name' "
            //     . implode(', ', $arguments)."<br>"; 
            echo $name. "<br>";
            var_dump($arguments);
        } 

        public static function __callStatic($name, $arguments) { 
            
            // echo "Calling static method '$name' "
            //     . implode(', ', $arguments)."<br>";
            echo $name. "<br>";
            var_dump($arguments);
        } 
    } 
    // Create new object 
    $x=5;
    $y="Dalia";
    $obj = new phpClass; 
    #function declared on the run time
    // $obj->runTest($x,$y){
    //     echo "we are the arguments ". $x." ". $y;
    // }; 
    $obj->runTest($x)."<br>"; 
    var_dump($obj->runTest($x));
    phpClass::runTest('in static context'); 
}