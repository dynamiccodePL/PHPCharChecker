<?php

/*
* Autor: https://programistyczny.blogspot.com
*/

function char_checker($char, $string = '', $remove = FALSE) {

if($string === '') die('Input string');

$words = explode(' ', $string);

$last_word = end($words);

$last_char = strlen($last_word) - 1;

if($last_word[$last_char] === $char) {
  
  if($remove) {
    
   $$string = substr($string, 0, -1);
    
}

return [$char, $string];

}

else {

return FALSE;

}

}
