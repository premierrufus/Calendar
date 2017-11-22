<?php  

declare(strict_types=1);

/*
 * Include necessary files
 */
echo "<h1>Hello!</h1>";
echo getcwd();
include_once '/home/glx/sites/html/Calendar/sys/core/init.inc.php';

echo "<h3>Still working</h3>";
/*
 * Load the calendar for January
 */
$cal = new Calendar($dbo, "2018-01-01 12:00:00");
echo "<h2>Hello!</h2>";
if ( is_object ($cal) )
{
	echo "<pre>", var_dump($cal), "</pre>";
}
echo "<h1>Hello!</h1>";

?>
