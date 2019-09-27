$username= $_GET["name"];
$sql = "SELECT skills,projects,hobbies FROM student where username =`$username`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $skils=$row["skills"]; 
       $projects=$row["hobbies"];
       $hobbies=$row["projects"];
    }
} else {
    echo "0 results";
}