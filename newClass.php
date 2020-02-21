<?php
    require_once ('AccessModifiers.php');

    $test = new Test();
    var_dump($test);
    $test->var1=5;
    var_dump($test);

    echo $test->var2."<br>";
    echo $test->var3."<br>";

    #note you can see the parameters in var_dump but you cannot access them 

?>