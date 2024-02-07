<?php
$host ='localhost';
$username ='safwan';
$password='safwan123';
$dbname ="pro";
$conn = mysqli_connect($host,$username,$password,"$dbname");
if (!$conn){
    dir ('could not mysql server : '.mysql_error());
}
?>