<?php
require "conn.php";
$username = $_POST["username"];
$password = $_POST["password"];
$mysql_qry = "select  Username from Student where Password='$password';";
$result = mysqli_query($conn ,$mysql_qry);
$check = mysqli_fetch_array($result);
if(isset($check)){
     header("Location:Home.html");
}else{
    echo "Please fill Proper Details";
    }
?>