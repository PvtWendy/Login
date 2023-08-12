<?php
$user = $_POST["name"];
$cell = $_POST["cell"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirmpassword"];

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || $password != $confirmpassword) {
    header('location: signup.html?error=1');
}else{

}

?>