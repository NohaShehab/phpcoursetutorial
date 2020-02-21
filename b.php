<?php

    require ('a.php');
    use \s\phpClass as myphpClass;
    new myphpClass();
    $obj = new myphpClass(); 
    #function declared on the run time
    $obj->runTest('in object context')."<br>"; 
    myphpClass::runTest('in static context'); 