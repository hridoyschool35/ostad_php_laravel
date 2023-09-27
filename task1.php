<?php
/*
Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.". Write a PHP function 
which takes "$text" as an argument to:

Convert the string to all lowercase.
Replace "brown" with "red" in the string.
Print the modified text.
*/


// Task 1: String Manipulation

$text = "The quick brown fox jumps over the lazy dog.";
display_modified_text( $text );

function display_modified_text( $text ) {
    $text = strtolower( $text );
    $text = str_replace( 'brown', 'red', $text );
    echo $text;
}

?>

