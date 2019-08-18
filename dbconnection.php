<?php
$host="localhost";
$user="root";
$password="";
$database="gate2020";
$conn=mysqli_connect($host, $user, $password, $database);
if(!$conn){
    die('Sorry could not connect :' . mysqli_error());
}
/*mysqli_close($conn);*/
?>

