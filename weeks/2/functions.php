<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

/*
*print_ln
*
*prints the desired string
*
*public
*accepts string
*accepts bool
*return void
*/

function print_ln($line, $ln_break = true)
{
	print  my_trim($line);
	if( $ln_break )
	{
	print '<br />';
	}
}

/*
*my_trim
*
*trims the desired string of whitespace
*
*public
*contains string to be trimmed
*returns trimmed string
*/

function my_trim($arg)
{
return trim($arg);
}

function print_array($array)
{

foreach ($array as $i => $i)
{
print_ln($i);
}
}



print_ln( 'first and foremost ');
print_ln( 'hello world', true );
print_ln( 'hello world from foo bar' );

print '<br /><br />';

$array = array('a' => 1, 'b' => 2, 'c' => 4, 'd' => 5, 1024 => 7);
print_array($array);
print '<br /><br />';
print_array('hello world');
print '<br /><br />';















