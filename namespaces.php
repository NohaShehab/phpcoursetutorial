<?php
    #PHP Namespaces are the way of encapsulating items so that same names can be 
    #reused without name conflicts.It can be seen as an abstract concept in many places. 
    #It allows redeclaring the same functions/classes/interfaces/constant functions 
    #in the separate namespace without getting the fatal error.
    #A namespace is a hierarchically labeled code block holding a regular PHP code.
    #A namespace can contain valid PHP code.
    #Namespace affects following types of code: classes (including abstracts and traits), 
    #interfaces, functions, and constants.
    #Namespaces are declared using the namespace keyword.
    #A namespace must be declared the namespace at the top of the file before any other code
    #with one exception: the declare keyword.

    namespace MyNamspaceName { 
           function hello(){ 
            echo "Hello I am Running from a namespace 111! <br>"; 
        } 
    } 

    #can be declared without name if it is declared globally
    #mutliple name spaces can be declared within the code
    namespace MyNamespace1 { 
    }     
    namespace MyNamespace2 {  
    }    
    namespace {  
    } 

    #example
    // namespace newNamespace{
    //     function hello(){ 
    //         echo "Hello I am Running from a namespace455!<br>"; 
    //     } 
    //     // hello(); 
    //     // Explicitly resolves to newNamespace\hello 
    //     namespace\hello();
    //     \MyNamspaceName\hello();


    // } 

    #another example
    namespace s{
        require 'TestClass.php';
        use \dalia\nameSpaceClassTest as CalledClass;
        CalledClass::printHello();

    }
