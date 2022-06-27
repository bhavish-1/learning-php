<?php
//establish connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "bhavish1";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
{
    die("sorry we failed to connect because of " .mysqli_connect_error());
}
else
echo "connection established sucessfully <br> ";

//inserting data inside the database

@$name = $_POST['myname'];
@$date = $_POST['mydate'];

$sql = "INSERT INTO demotable689(UserName, UserLoginDate) values('$name', $date)";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully. </h3>";    
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
    }

$res = mysqli_query($conn, $sql);

/*if($res)
{
    echo "data inserted inside the database sucessfully !";
}
else
echo "data not inserted successfully". mysqli_error($conn);
*/
?>