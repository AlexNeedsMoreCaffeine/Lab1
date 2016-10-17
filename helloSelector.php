/**
Week4 Lab
*/
<!DOCTYPE html>
<?php

$username = $_GET["username"];
echo $username;

echo"<p>Hello" . $username . " how are you today? </p>";

echo"<p>Hello {$username} how are you today? </p>";

?>