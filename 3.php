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
 echo "connection was sucessful <br>";
}

// creating the table : 

$sql = "create table DemoTable6890(
    UserId int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    UserName varchar(100),
    UserLoginDate date NOT NULL
 )";

 $result = mysqli_query($conn, $sql);

if($result)
{
    echo "the table was sucessfully created"; 
}
else
echo "the table not created successfully because of this error ----> ". mysqli_error($conn);
?>