<?php

define("username", "Sohan");
define("password", "sKgH12");

echo "Enter Username:";
$inputUsername = readline();

echo "Enter Password:";
$inputPassword = readline();
if ($inputUsername === username && $inputPassword === password) {
    echo "Login Successful";
} else {
    echo "Invalid Username or Password.";
}
