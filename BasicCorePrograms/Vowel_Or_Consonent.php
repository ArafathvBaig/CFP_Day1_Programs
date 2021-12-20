<?php
$char = 'A';
if(strlen($char)>1)
{
	echo "Input is not a Single Character";
}
else
{
	if($char== 'a' || $char=='A' || $char=='e' || $char=='E' || $char=='i' || $char=='I' || $char=='o' || $char=='O' || $char=='u' || $char=='U')		
    {
		echo "The Number '".$char."' is Vowel";
	}
	else
	{
		echo "The Character '".$char."' is Consonent";
	}
}