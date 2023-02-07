<?php 

$string = 'My name is Renato';
$pattern = "/renato/i"; # try to find the word, i = case-insensitive
echo preg_match($pattern, $string); # outputs 1; 

$string_rep = "My Renato is Renato, Renato";

echo preg_match_all($pattern, $string_rep); # outputs 3; 

# using the preg_replace() method
echo preg_replace($pattern, "Rafael", $string_rep) # outputs "My Rafael is Rafael, Rafael"; 


?>