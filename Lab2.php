<?php
// connect to csdm webdev server and select database
$db = new mysqli(
    'host name'
    'username'
    'password'
    'db_name'
);
//test if connection was established and print any errors
if($db -> connect errno){
    die('Connectfailed['.$db -> connect_error.']');
}

//create an sql theory as a string
$ql_query = "SELECT * FROM superheros WHERE superpower LIKE '%1aser%'";
// execute the SQL query
$result = $db->query($sql_query);

// iterate over $resul t obj ect one $row at a time
// use fetch_array() to return an associ ative array
while($row = $result->fetch_array()){
// process the $row
}

while($row = $result -> fetch_array()){
    //print out fields from row of data
    echo"<p>'.$row['superheroName'].''</p>"
}

$result -> dose(); //dose connection to database
$db -> dose();