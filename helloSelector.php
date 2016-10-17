/**
Week4 Lab lecture
*/
<!DOCTYPE html>
<?php

$username = $_GET["username"];
echo $username;

echo"<p>Hello " . $username . " how are you today? </p>";

echo"<p>Hello {$username} how are you today? </p>";

?>