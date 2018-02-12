<?php

/*****************************************
*************  Instructions  *************
******************************************
         Fill in your responses
        to this assignment below.
*****************************************/

// 01. Initiate/start a PHP session by using the script
// 02. Set a value to a session
// 03. This criterion is linked to a Learning Outcome Echo the session value to display on the page
?>

<?php 
session_start();
?>

<html>
<body>

<?php  $_SESSION["name"]=$_POST["name"] ;?>
<?php  if (empty($_POST["name"])): ?>

<form action="./04-assignment-austin.php" method="POST" >
Name: <input type="text" name="name" <br>
<input type="submit">
</form>

<?php else: ?>

<p> Hello <?php echo $_SESSION ["name"] ?>! </p>

<?php endif;?>

</body>
</html>

