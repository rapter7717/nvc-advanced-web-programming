<?php

//Austin Smith
// 01. Create and Call at least one function.
// 02. Create a For Loop
// 03. Create a While Loop
// 04. Create an Array
// 05. Sort an Array
// 01. Create a Switch Statement


?>

<html>
<?php
//Define Variables (with arrays)
$lights = ["on","off"];
$data = [5,7,9,84,73,22,59,497,12,];
$variable = "one";
$y = 1;
$z = 1;
//Define Functions
function helloworld() {
	echo "Hello World! <br>";
}
function onoff($lights) {

	if (array_rand($lights) == "on" ) { 
		echo "On <br>" ; 
	} else {
		echo "Off <br>" ;
	} 
}
//Call Functions
helloworld();
onoff($lights);
//Begin Loops
for ($x=5; $x > 0 ; $x--) {
	echo "T Minus $x <br>";
}
while ($y < 10) {
	echo "$y mississipi <br>" ;
	$y++;
	}
//Sort
sort($data);
//Resume loops
$arrlength=count($data);
for($n=0;$n<$arrlength;$n++)
  {
  echo $data[$n];
  echo "<br>";
  }
//Switch
switch ($z) {
	case 1:
		echo "This is 1";
		break;
	case 2:
		echo "This is 2";
		break;
	default:
		echo "No Data";
}

?>


</html>

