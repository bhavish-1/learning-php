<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bhavish1";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
{
    die("connection not established : ".mysqli_connect());
}
else
echo "connection established successfully <br>";

// inserting data inside table in the database : 

$sql = "insert into DemoTable689(UserName,UserLoginDate) values('Robert',CURDATE())";

$res = mysqli_query($conn, $sql);

if($res)
{
    echo "the data inserted inside the table sucessfully <br>";
}
else
echo "the data not inserted ".mysqli_error($conn);

?>