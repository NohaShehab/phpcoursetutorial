<?php 

    // dynamic setters and getters
    class Tracks{
        public $trackName;

        function __get($name){
            $this->$name;
        }

        function __set($name, $value){
            $this->$name=$value;
        }

    }

    $reflection_class = new ReflectionClass("Tracks");

    foreach ($reflection_class->getMethods() as $method) {
        echo $method->getName() . "<br>";
    }

    $aaa= new Tracks();
    var_dump($aaa);

    $track= new Tracks();
    $track->__set("name","Maged");
    var_dump($track);

    $track2 = new Tracks();
    var_dump($track2);

//     class PropertyTest{
//         private $data = array();
//         private $hidden = 2;
//         public function __set($name, $value){
//             echo "Setting '$name' to '$value'\n";
//             $this->data[$name] = $value;
//         }

//         public function __get($name){
//             echo "Getting '$name'\n";
//             if (array_key_exists($name, $this->data)) {
//                 return $this->data[$name];
//             }

//             $trace = debug_backtrace();
//             trigger_error(
//                 'Undefined property via __get(): ' . $name .
//                 ' in ' . $trace[0]['file'] .
//                 ' on line ' . $trace[0]['line'],
//                 E_USER_NOTICE);
//             return null;
//         }
//         public function getHidden(){
//             return $this->hidden;
//         }
// }


// // echo "<pre><br>";

// $obj = new PropertyTest;

// $obj->a = 'noha';
// echo $obj->a . "<br.";

// echo "Let's experiment with the private property named 'hidden' <br>";
// echo "Privates are visible inside the class, so __get() not used...<br>";
// echo $obj->getHidden() . "<br>";
// echo "Privates not visible outside, so __get() is used...<br>";
// echo $obj->hidden . "<br>";

