<?php
 $server name = "localhost";

 $database = "database";

 $username = "username";

 $password = "password";

 //create connection

 $con = mysql_connect($server name, $username, $password, $database);

 if($con->connect error){
    die("connection failed", $con->connect error);
 }
 else
 {
    echo"successfully connected";
 }
 mysql_close($con);

 
?>