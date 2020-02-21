<?php
    #DOM in php "Document object model" that defines a standard to access
    #documents like html and xml
    #Dom is separated into 3 level, core, HTML and XML levels

    #XML
    #The XML DOM defines the objects and properties of all XML elements, 
    #and the methods (interface) to access them.

    $doc= new DomDocument();
    $doc->load('course.xml');


    $courses = $doc->getElementsByTagName('name'); 
    foreach ($courses as $course) { 
        echo $course->nodeValue."<br>"; 
    }

    $contacts = $doc->getElementsByTagName('contact'); 
    foreach ($contacts as $contact) { 
        echo $contact->nodeValue. "<br>"; 
    }
  
    // Loop starts from first element of xml and  
    // run upto when elements are not valid 
   
    $xmlIt = new SimpleXMLIterator('course.xml', 0, true); 
    for( $xmlIt->rewind(); $xmlIt->valid(); $xmlIt->next() ) { 
        foreach($xmlIt->getChildren() as $element => $content) { 
            echo "The content of '$element' element is '$content'" . "<br>"; 
        } 
    } 
    

