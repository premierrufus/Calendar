<?php  

/*
 * Include necessary files
 */
include_once '../sys/core/init.inc.php';

/*
 * Load the calendar for January
 */
$cal = new Calendar($dbo, "2018-01-01 12:00:00");
echo "<h1>Hello!</h1>";

if ( is_object ($cal) )
{
	echo "<pre>", var_dump($cal), "</pre>";
}

?>
