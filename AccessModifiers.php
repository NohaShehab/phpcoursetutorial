<?php
/*************************************** Access modifiers*********************************************************/
    class Test{
        public $var1;
        private $var2=7;
        // protected $var3;
        public function __construct(){
            echo 'welcome to php class';
        }
        private function xyx(){
            echo '<br>'.$var2;
        }

        # setters and getters
        function __get($var2){
            return $var2;
        }
        #set her must take 2 arguments
        # the var you want to set and the value used in that set
        function __set($var2, $value){
           $this->var2=$value;
        }
    }


    /************************************ Inheritance *********************************************/
    class A {
        public $attr1;
        function __construct(){
            echo "Parent constructor <br>";
        }
        function print1(){
            echo "Welcome to parent <br>";
        }
    }

    class B extends A{
        public $attr2;
        function __construct(){
            parent:: __construct();
            echo "Child constructor <br>";
        }
        function print2(){
            echo "Welcome to child <br>";
        }
    }

    $b= new B();
    $b->print1();
    $b->print2();


   
?>