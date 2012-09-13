<?php

$array = array();

for($i = 0; $i < 10; ++$i)
{
$array[] = $i;
}

print_r($array);

foreach( $array as $key => $value)
{
print $key . '-> ' . $value . '<br />';
}
print '<br />';

$array['my-value'] = 'my-value';
print_r($array);
print '<br />';

foreach( $array as $key => $value)
{
print $key . '-> ' . $value . '<br />';
}
print '<br />';


for ($i =0; $i < count($array); ++$i)
{
print $array[$i] . '<br />';
}