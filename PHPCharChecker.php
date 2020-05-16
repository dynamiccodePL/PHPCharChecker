<?php



function char_checker($char, $string = '') {

if($string === '') die('Podaj jakiś tekst.');

$words = explode(' ', $string);

$last_word = end($words);

$last_char = strlen($last_word) - 1;

if($last_word[$last_char] === $char) {

echo "Find search char '" . $char . " in the end string.'";

}

else {

echo "NOT found char '" . $char . "' in the end string.";

}

}
