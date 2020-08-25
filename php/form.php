<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$password = $_POST['password'];
$email = $_POST['email'];
$color = $_POST['color'];
$terms = $_POST['terms'];

//show information
echo 'first_name: '.$first_name;
echo '<br>last_name: '.$last_name;
echo '<br>password: '.$password;
echo '<br>email: '.$email;
echo '<br>color: '.$color;
echo '<br>terms: '.$terms;
?>
