<?php
require "conn.php";
$name = $_POST["fullname"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$class = $_POST["classs"];
$gender = $_POST["gender"];
$account = $_POST["account"];
$sql = "SELECT * FROM Student WHERE E_Mail = '".$email."'";
$sql1 = "SELECT * FROM Student WHERE Username = '".$username."'";
$result = mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)>=1)
{
echo "E-Mail already exists";
}
elseif(mysqli_num_rows($result1)>=1){
echo"Username already exists";
}
else{
$mysql_qry = "INSERT INTO '".$account."'" (Name,Email,Username,Password,Class,Gender) VALUES ('$name','$email','$username','$password','$class','$gender');";
$result = mysqli_query($conn ,$mysql_qry);
 if($result==1)
 {
 header("Location:Login.html");
 }
}
?>
