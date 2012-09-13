<?php

$my_array = array(1, 2, 3, 4, 5);

$my_array[] = 6;
$my_array[] = 7;
$my_array[] = 8;
$my_array[] = 9;
$my_array[] = 10;

for ($i = 0; $i < count($my_array); ++$i)
{
print $my_array[$i] . ', ';
}

print '<br />';

for ($i = 0; $i < count($my_array); ++$i)
{
$my_array[$i] = $i + 10;
}

print_r ( $my_array );





