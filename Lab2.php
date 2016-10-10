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

//section 4
// This code can be used to cycle through an array of elements that is returned from a mysqli_query. Youshould be able to use this to create a website. This code is the basis of a good blog system.
$result=mysqli_query($db,$sql);
while($row = $result->fetch_array())
{
    /* the code inside here is repeat ed for each item i n the array
    You can do thi ngs like the followi ng to print out each movi e title */
$movieTitle = $row[‘title’];
echo"<p>"’. $movieTitle ."</p>";
}