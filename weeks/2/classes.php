<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

function myFuncInterface(IMyInterface $o)
{
$o->myPredefinedMethod();
}
function myFuncBaseClass(MyBaseClass $o)
{
$o->myMethod();
$o->myChildMethod();

}
function myFuncChildClass(MyChildClass $o)
{
$o->myChildMethod();
$o->myMethod();
}

interface IMyInterface
{
public myPredefinedMethod();
}

/*abstract*/ class MyBaseClass implements IMyInterface
{
const MY_CONST = '0';

private $_my_private_var;
protected $_my_protected_var;
public $_my_public_var;

/* final */public function __construct() //constructor
{
print __METHOD__ . '<br />';

$this->_my_private_var = 'private';
$this->_my_protected_var = 'protected';
$this->_my_public_var = 'public';

$this->myPrivateMethod();
}

public function __destruct() //destructor
{
print __METHOD__ . '<br />';
}


public function myMethod()
{
print __METHOD__ . '<br />';
}

public function myPrivateMethod()
{
print __METHOD__ . '<br />';
}

public function myProtectedMethod()
{
print __METHOD__ . '<br />';
}
}

class MyChildClass extends MyBaseClass
{
public function __construct() //constructor
{
print __METHOD__ . '<br />';
parent:: __construct();
}
public static function myStaticMethod()
{
print __METHOD__ . '<br />';
}
}
//base specific class
$base_class = new MyBaseClass();
$base_class ->myMethod();
//$base_class->myProtecedMethod(); //won't run
//$base_class->myPrivateMethod();  //won't run

//print_r($base_class);

unset ($base_class);
print '<br /><br />';

$child = new MyChildClass();
MyChildClass:: myStaticMethod();

print '<br /><br />';
print '<br /><br />';

myFuncInterface($base_class);
myFuncInterface($child);

myFuncBaseClass($base_class);
myFuncBaseClass($child);

myFuncChildClass($base_class);
myFuncChildClass($child);













