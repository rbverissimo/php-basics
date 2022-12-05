<?php
// this is a comment
# this is also a comment
$x = 5 + /* + 15 */ 5; # it is possible to comment between lines of code
echo $x; 

# a variable must start with a letter or an underscore character
# they are case-sensitive 
$age = 13;
$AGE = 15;

echo $AGE; 
echo $age; 

# outputs

$name = "Renato";
echo "I am" .$name. "!"; 
echo $age + $AGE; // for a total of 28;

# php is loosely typed, for php 7+ type declarations were added
# three scopes for variables: global, local and static

function myTest($x, $y){ 
      $z = 1; // local
      $sum = $x + $y + $z;
      return $sum; 
};

$result = myTest($age, $AGE);
echo $result; 

// we use the static keyword when we don't want a variable to be deleted after runtime; 

function myTest2(){
      static $txt = "something in the way she moves"; // albeit static, this variable is still local;
};

echo $txt; 


# the main difference between echo and print is that print has a return value of 1; 
# echo may take multiple param while print can only take one;
# echo is marginally fast than print;
# print can be used as print or print(); 

print "<h2> Summertime </h2>";
print "and the living is easy! <br>";
print "fishing are jumping and the cottom is high!"; 


?>