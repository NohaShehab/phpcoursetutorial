<?php
    /* Static keyword */
    #Any method, variable declared as static is accessible without the creation of an object. 

    // class Sum { 
    //     static $count; 
    //     public static function getCount() { 
    //         return self::$count++; 
    //     } 
    // } 
      
    // Sum::$count = 1; 
      
    // for($i = 0; $i < 5; ++$i) { 
    //     echo 'The next value is: '.  
    //     Sum::getCount() . "<br>"; 
    // } 

    #self like $this but for the class, self refers to current class, 
    #$this refers to current object

    /* Overloading and overrideing */

    #Dynamic binding referred as method overriding is an example of run time polymorphism
    #that occurs when multiple classes contain different implementations of the same method,
    #but the object that the method will be called on is unknown until run time.

    Interface Animals{
        public function makeNoise();
    }
    class Cat implements Animals{
        public function makeNoise(){
            $this->meow();
        }
        function meow(){
            echo '<br> mewo';
        }
    }
    class Dog implements Animals{
        public function makeNoise(){
            $this->bark();
        }
        function bark(){
            echo '<br> bark';
        }
    }
    class Person {
        Const CAT='cat';
        Const DOG='dog';
        private $petpreference;
        private $pet;
        public function isCatLover() :bool{
            
            return $this->petpreference =Person::CAT;
        }
        public function isDogLover(): bool {
            return $this->petpreference =self::DOG;
        }
        public function setPet(Animals $pet) {
            $this->pet = $pet;
        }
    
        public function getPet(): Animals {
            return $this->pet;
        }

    }
    $person=new Person();

    /// inside if will the set function
    if($person->isDogLover()) {
        $person->setPet(new Dog());
    } 
    echo $person->getPet()->makeNoise()."<br>";

    if($person->isCatLover()) {
        $person->setPet(new Cat());
    }
   echo $person->getPet()->makeNoise()."<br>";

   var_dump($person);
   var_dump ($person->isDogLover());
   var_dump( $person->getPet());
   var_dump(Person::CAT)

    #In the above example, the Animal class (Dog|Cat) which will makeNoise is unknown
    #until run time depending on the property within the User class.

    

    ////////// overloading using __call
    #Function overloading is the ability to create multiple functions of the same name
    #with different implementations.
    #Function overloading contains same function name and that function 
    #preforms different task according to number of arguments.
    #All overloading methods must be defined as Public.
    #After creating the object for a class, we can access a set of entities that are properties
    #or methods not defined within the scope of the class.
    #Such entities are said to be overloaded properties or methods, 
    #and the process is called as overloading.
    #For working with these overloaded properties or functions, PHP magic methods are used.
    #Most of the magic methods will be triggered in object context
    #except __callStatic() method which is used in a static context.
    #Have 2 types Property Overloading & Method Overloading
    #Property Overloading
    # used to create dynamic properties in the object context.
    #For creating these properties no separate line of code is needed.
    #A property associated with a class instance, 
    #and if it is not declared within the scope of the class, 
    #it is considered as overloaded property.
    #Following operations are performed with overloaded properties in PHP.
    #1-Setting and getting overloaded properties.
    #2-Evaluating overloaded properties setting.
    #3-Undo such properties setting. __set(), __get(), __isset(), __unset()

    // class GFG { 
      
    //     // Location of overloading data 
    //     private $data = array(); 
    //     // Overloading not used here 
    //     public $declared = 1; 
    //     // Overloading used when accessed outside the class 
    //     private $hidden = 2; 
    //     // Function definition 
    //     public function __set($name, $value) { 
    //         echo "Setting '$name' to '$value'\n"; 
    //         $this->data[$name] = $value; 
    //     } 
    //     // Function definition 
    //     public function __get($name) { 
    //         echo "Getting '$name: "; 
    //         if (array_key_exists($name, $this->data)) { 
    //             return $this->data[$name]; 
    //         } 
    //         $trace = debug_backtrace(); 
    //         return null; 
    //     } 
    //     // Function definition 
    //     public function __isset($name) { 
    //         echo "Is '$name' set?\n"; 
    //         return isset($this->data[$name]); 
    //     } 
    //     // Definition of __unset function 
    //     public function __unset($name) { 
    //         echo "Unsetting '$name'\n"; 
    //         unset($this->data[$name]); 
    //     } 
    //     // getHidden functino definition 
    //     public function getHidden() { 
    //         return $this->hidden; 
    //     } 
    // } 
      
    // // Create an object 
    // $obj = new GFG; 
      
    // // Set value 1 to the object variable 
    // $obj->a = 'noha'; 
    // echo $obj->a . "<br>"; 
      
    // // Use isset function to check 
    // // 'a' is set or not 
    // var_dump(isset($obj->a)); 
    // // Unset 'a' 
    // unset($obj->a); 
    // var_dump(isset($obj->a)); 
    // echo $obj->declared . "<br>"; 
    // echo "Private property are visible inside the class "; 
    // echo $obj->getHidden() . "<br>"; 
      
    // echo "Private property are not visible outside of class <br>"; 
    // echo $obj->hidden . "<br>"; 
   
    // ////// #Function overloading
    // #Creating dynamic methods that are not declared within the class scope. 
    // #PHP method overloading also triggers magic methods dedicated to the appropriate purpose. 
    // #Unlike property overloading, PHP method overloading allows
    // #function call on both object and static context.      

    // class phpClass { 
      
    //     public function __call($name, $arguments) {  
    //         echo "Calling object method '$name' "
    //             . implode(', ', $arguments)."<br>"; 
    //     } 
    
    //     public static function __callStatic($name, $arguments) { 
              
    //         echo "Calling static method '$name' "
    //             . implode(', ', $arguments)."<br>"; 
    //     } 
    // } 
    // // Create new object 
    // $obj = new phpClass; 
    // #function declared on the run time
    // $obj->runTest('in object context')."<br>"; 
    // phpClass::runTest('in static context');  

    // /****************************** Cloning object *************************************/
    // #Object cloning is creating a copy of an object. 
    // #An object copy is created by using the clone keyword and the __clone() method 
    // #cannot be called directly. 
    // #In PHP, cloning an object is doing a shallow copy and not a deep copy. 
    // #Meaning, the contained objects of the copied objects are not copied. 
    // #If you wish for a deep copy, then you need to define the __clone() method.
    // #When there is a need that you do not want the outer enclosing object to modify the internal 
    // #state of the object then the default PHP cloning can be used. 
    // class Product{
    //     public $name;
    //     public $category;
    // }
    // $objProduct = new Product();
    // //Assigning values
    // $objProduct->name = "Apple";
    // $objProduct->category = "Fruit";
    // //Cloning the original object
    // $objCloned = clone $objProduct;
    // $objCloned->name = "Orange";
    // $objCloned->category = "Fruit";
    // print_r($objProduct);
    // print_r($objCloned);

    // /***************************************/
    // #__autoload deprecated from php 7 -Attempt to load undefined class 
    // #load class from another file
    // // function __autoload($classname) {
    // //     $filename = "./". $classname .".php";
    // //     include_once($filename);
    // // }

    // // $test=new Test();



      
?>
