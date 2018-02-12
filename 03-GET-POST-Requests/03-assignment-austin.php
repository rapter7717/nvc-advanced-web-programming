<?php

/*****************************************
*************  Instructions  *************
******************************************
         Fill in your responses
        to this assignment below.
*****************************************/



// 01. Create a form with at least 2 text inputs and a submit button
// 02. This criterion is linked to a Learning Outcome Display URL parameter value for "first_name" text input
// 03. This criterion is linked to a Learning Outcome Display URL parameter value for "email" text input
// 04. This criterion is linked to a Learning Outcome Display POST data once form has been submitted
//url: http://localhost:8888/03-assignment-austin.php?first_name=Austin&email=Email
?>



<html>
<body>

<?php if (empty($_POST["email"])): ?>

<form action="./03-assignment-austin.php" method="POST">
Name: <input type="text" name="first_name" value="<?php echo $_GET["first_name"]; ?>"><br> 
E-Mail: <input type="text" name="email" value="<?php echo $_GET ["email"]; ?>"><br> 
<input type="submit"><br>
</form>

<?php else: ?>

<p> Thank you <?php echo $_POST ["first_name"] ?>! </p>

<?php endif; ?>
</body>
</html>