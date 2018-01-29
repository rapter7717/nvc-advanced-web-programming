<?php

/*****************************************
*************  Instructions  *************
******************************************
         Fill in your responses
        to this assignment below.
*****************************************

************* AUSTIN SMITH **************/



// 01. Create and use a string variable
$test = "This is a test" ;


// 02. Create and use an integer variable
$one = 1 ;
$two = 2 ;


// 03. Create and use a boolean variable

$true_variable = true ;
$false_variable = false ;


// 04. Create and call one or more function(s)
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

function writeMsg() {
    if ( $true_variable == TRUE ) {
    	echo "Hello world!";
	} else {
    	echo "Hi Guys!";
    }
    
}
// 05. Basic conditional statement
$numbers = array ( "0" , "1") ;


// 01. Echo to page

?>

<html>

<head> 
	 <?php echo $test; ?>
</head>
</br> 

<body> 
<p> <?php echo $one + $two ; ?> </p>

</br>

<?php  
if (array_rand ($numbers) == "TRUE") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>
</br>
<?php
echo "5 + 184 = " . sum(5,184) . "<br>";
echo "451 + 843 = " . sum(451,843) . "<br>";
echo "2 + 9 = " . sum(2,9) . "<br>" ;
writeMsg();

?>
	</body>

</html>




