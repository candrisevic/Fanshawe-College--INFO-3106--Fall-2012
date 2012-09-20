<?php

define('IN_APPLICATION', true);

require_once 'bootstrap.php';

print 'Hello World from shapes<br />';
$square = new Square(array(10));

print $square . '<br />';
foreach( $square->getDimensions() as $side_length ) {
	print $side_length . '<br />';
}

$pentagon = new Pentagon(array(15));
print $pentagon . '<br />';
foreach( $pentagon->getDimensions() as $side_length ) {
	print $side_length . '<br />';
}

$triangle = new Triangle(array(20));
print $triangle . '<br />';
foreach( $triangle->getDimensions() as $side_length ) {
	print $side_length . '<br />';
}
