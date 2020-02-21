<?php
   /*********************************** OOP *******************************************/
    #require #require_once #include #include_once to load file into php script

    echo "<br>"."******************** OOP ************************"."<br>";

    #functions
    echo "<br>"."******************** functions ************************"."<br>";
    // getSum('kl',44); // check the output
    getSum(55,55);
    function getSum($x,$y){
        $z=$x+$y;
        echo 'Sum of x and y is'.$z."<br>";
    }

    getsum(5,10);  // function name are not case sensetive 
    #you cannot define function with name starts with digit 

    echo "<br>"."******************** Variable scopes ************************"."<br>";

    function checkScope(){
        $var ='welcome I am inside the function can you call me outside it?';
        echo $var."<br>";
    }
   
    // echo $var."<br>"; #variable inside a function is called local variable and cannot be used out side it 
    #let's try this 

    $var="Now I am out the function";  // Global variable
    echo $var."<br>";
    checkScope();
    echo $var."<br>"; 

    #note you can see that the script can have two vars with the same name, one global and other local 
    #variables that can be accessed inside and outside functions are called super global
    echo "<br>"."********************super global variable ************************"."<br>";
    // $GLOBALS
    // $_SERVER
    // $_REQUEST
    // $_POST
    // $_GET
    // $_FILES
    // $_ENV
    // $_COOKIE
    // $_SESSION
    
    $GLOBALS['x']=5;
    function insidefunction(){
        $GLOBALS['x']=7;
        echo  $GLOBALS['x']. "x is called form a function <br>";
    }   
    insidefunction();
    echo  $GLOBALS['x'].  "x is called form outside the function <br>";

    /*********************************** Delete variable *******************************************/
    #unset function
    unset($var);
    // echo $var; #will produce undefined

    /******************************** Function parameters ******************************/
    #1- you can pass default parameters
    function add($x,$y=1){
        $z=$x+$y;
        echo 'Sum of x and y is'.$z."<br>";
    }
    add(6);
    add(6,7);
    /******************************** return keyword with function ******************************/
    function mul($x,$y){
        return $x*$y;
        echo 'This line will never executed';
    }
    $res=mul(5,6);
    echo $res."<br>";

    function larger($x,$y){
        if(!isset($x)|| !isset($y)){
            return false;
        }elseif($x>$y){
            return $x;
        }else{
            return $y;
        }
    }
    // $num=larger(5,6);
    // echo $num."<br>";
    // $num=larger(5,'kjkj');
    // echo $num."<br>";
    // $f;
    // $num=larger(5,$f);
    // echo $num."<br>";

    /******************************* Function clousre  ***************************************/
    // Anonymous function === function has no name
    // A closure is nothing but an object of the Closure class which is
    // created by declaring a function without a name. 
    $greet = function($name)
    {
        printf("Hello %s\r\n", $name);
    };  // ; is a must here 
    $greet('World');
    $greet('PHP');
    $xx=function(){
        echo 'Welcome ';
    };
    $xx();

    $x=5;
    $quantity = 1;
    $calculator = function($number)
        use($quantity) {  # use special keyword to use the variable form outside
        return $number + $quantity;
    };
    var_dump($calculator(7));

    /********************************** clousre inside another**************************************/
    
    function createCalculator ($quantity){
        return function($number) use($quantity) {
            return $number + $quantity;
        };             
    }
    $calculator1 = createCalculator (1); $calculator2 = createCalculator (2);
    var_dump($calculator (2)); // Shows 3
    var_dump($calculator (3)); // Shows 4

    /************************** binding a Clousre to an object from a class*****************/
    # you can use clousers to add functionality to the class     
    $myclousre=function(){
        echo $this->property."<br>";
    };
    class MyClass{
        public $property;
        function __construct($propertyValue){
            $this->property=$propertyValue;

        }
    }
    # an instance from a class 
    $objClass= new MyClass("Hello World");
    $myBoundClousre= $myclousre->bindTo($objClass);
    $myBoundClousre();
    /*********************************** clousre inside a class  **************************************************/
    
    class NewClass{

        #note functions inside the class by default are public
        private $prop;
        function __construct($propertyValue){
            $this->prop=$propertyValue;
        }

        function display(){
            return function(){
                echo $this->prop."<br>";
            };

        }
    }
    $obj= new NewClass("Hello World");
    $display= $obj->display();
    $display();

    /***************************************** from php 7************************************************/

    $myClassObj= new MyClass("Calling from outside clousre using call");
    $myclousre->call($myClassObj);
?>