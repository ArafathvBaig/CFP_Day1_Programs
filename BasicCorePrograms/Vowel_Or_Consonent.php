<?php
// user input of character to check vowel or consonent
$char = readline('Enter a Character: ');
// checking the input and comparing the input
if (strlen($char) > 1) {
	echo "Input is not a Single Character";
} else {
	//if ($char == 'a' || $char == 'A' || $char == 'e' || $char == 'E' || $char == 'i' || $char == 'I' || $char == 'o' || $char == 'O' || $char == 'u' || $char == 'U') {
	//if (strcasecmp($char,'a') == 0 || strcasecmp($char,'e') == 0 || strcasecmp($char,'i') == 0 || strcasecmp($char,'o') == 0 || strcasecmp($char,'u') == 0 ) {
	if (strtolower($char) == 'a' || strtolower($char) == 'e' || strtolower($char) == 'i' || strtolower($char) == 'o' || strtolower($char) == 'u') {
		echo "The Character '" . $char . "' is Vowel";
	} else {
		echo "The Character '" . $char . "' is Consonent";
	}
}
