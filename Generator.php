<?php
    echo "<br>"."******************** Generator ************************"."<br>";
    #A generator function looks just like a normal function, 
    #except that instead of returning a value, a generator yields
    #as many values as it needs to. Any function containing yield is a generator function.
    #When a generator function is called, it returns an object that can be iterated over. 
    #When you iterate over that object (for instance, via a foreach loop), 
    #PHP will call the object's iteration methods each time it needs a value, 
    #then saves the state of the generator 
    #when the generator yields a value so that it can be resumed when the next value is required.

    function gen_one_to_five() {
        for ($i = 1; $i <= 5; $i++) {
            // Note that $i is preserved between yields.
            yield $i;
        }
    }
    $generator = gen_one_to_five();
    foreach ($generator as $value) {
        echo "$value"."<br>";
    }


    /************************* Array vs yields**************************/
    function randomNumbers(int $len) {
        $arr=[];
        for ($i = 1; $i <= $len; $i++) {
            $arr[]=mt_rand(1,100);
        }
        return $arr;
    }
    $rand=randomNumbers(10);
    var_dump($rand);

    #using yields
    function randomNo(int $len) {
        for ($i = 1; $i <= $len; $i++) {
            yield mt_rand(1,100);
        }
    }
    foreach (randomNo(10) as $no){
        echo $no."<br>";
    }
    






?>