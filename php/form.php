<?php
$first_name = $_POST['first_name'];
$last_name  = $_POST['last_name'];
$password   = $_POST['password'];
$email      = $_POST['email'];
$phone      = $_POST['phone'];
$color      = $_POST['color'];
$terms      = $_POST['terms'];

//show information
if ($first_name == "" or $last_name == "" or $password == "" or $email == "" or $color == "" or $terms == "") {
    echo "Complete todos los campos";
} else {
    echo 'first_name: ' . $first_name;
    echo '<br>last_name: ' . $last_name;
    echo '<br>password: ' . $password;
    echo '<br>email: ' . $email;
    echo '<br>phone: ' . $phone;
    echo '<br>color: ' . $color;
    echo '<br>terms: ' . $terms;
}
?>