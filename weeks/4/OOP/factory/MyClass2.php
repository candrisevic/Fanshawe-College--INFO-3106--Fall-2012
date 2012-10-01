<?php

/*
*MyClass
*
*Provide a descripton of the class here...
*/

class MyClass2 {
/*
*factory
*
*description of the method
*
*@access public
*@param void
*@return MyClass returns a new instance of MyClass
*
*/

	
	public function __construct()
	{
		print __METHOD__ . '::' . __LINE__ . '<br />';
	}
	
	public function __destruct()
	{
		print __METHOD__ . '::' . __LINE__ . '<br />';
	}
}


?>