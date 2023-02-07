<?php 
/* $GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script. PHP stores all global variables in an array called $GLOBALS[index]. The index holds the NAME of the variable; */

$x = 70;
$y = 30;

function add(){
      $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

add();

echo $z; # outputs 100, because it can be accessed as a super global;  

/* $_SERVER is a super global variable which holds information about headers, paths and script locations */

echo $_SERVER['REQUEST_METHOD']; # returns the method used to access; 
echo $_SERVER['HTTP_ACCEPT']; # returns the accept header from the current request;


?>