<?php

defined('IN_APPLICATION') or exit;

require_once 'Shape.php';

class Triangle extends Shape {
	
	public function getName() {
	return 'Triangle';
	}
	
	public function getNumberOfSides() {
	return 3;
	}
	
	public function setDimensions(array $dimensions){
	$dimensions_count = count($dimensions);
	
	if( 0 == $dimensions_count) {
	throw new Exception('Cannot have empty array of dimensions when setting.');
	}
	
	if( 1 === $dimensions_count) {
	for( $i = 0; $i < $this->getNumberOfDimensions(); ++$i) {
		$this->_dimensions[] = $dimensions[0];
	}
}
	else if( 3 === $dimensions_count) {
	$value = $dimensions[0];
	for ($i = 1; $i < $this->getNumberOfDimensions(); ++$i ) {
	if ($value !== $dimensions[$i]) {
	throw new Exception('all sides of a triangle must have identical length.');
	}
}
	$this->_dimensions = $dimensions;
}
	else {
	throw new Exception('You must specify one or all 3 sides of the triangle');
	}
	}
 
}