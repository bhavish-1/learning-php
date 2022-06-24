<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "bhavish1";
// create connection 
$conn = mysqli_connect($servername, $username, $password, $database); //it opens connection to the server

if(!$conn){
    die("sorry we failed to connect :". mysqli_connect_error());
}

else{
 echo "connection was sucessful";
}

echo "<br>";

// creating db using php
$sql = "CREATE DATABASE bhavish1";
$result = mysqli_query($conn, $sql);

if($result)
{
    echo "the database was sucessfully created"; 
}
else
echo "the database not created successfully because of this error ----> ". mysqli_error($conn);


// creating table using php inside the database:
/* 1. now when you create table which is inside the 
   database. then you have to give database information inside the 
   connection.
   
   you can see everything in 3.php
*/



?>

<?php
/* 
mysqli_connect() -----> it establish a connection with MYSQL server and returns the connection as object
mysqli_query() -----> performs the query in the database and takes two parameters inside the function compuslary; 
*/
?>