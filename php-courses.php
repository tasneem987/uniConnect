<?php
 //Connection
 $servername = "localhost";
$username = "root"; // default for XAMPP
$password = "";     // default is empty
$database = "user-db"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die(/*"Connection failed: " .*/ $conn->connect_error);
}
else echo/*"Connect to the Server <br>".*/ $conn->connect_error;
 
//print data from table
$Courses = mysqli_query($conn,"SELECT * FROM courses")
or die ("Couldn't connect to the table");
//echo "Connect to the Table";
echo ("<table border='1' width='40%'>");
echo ("<tr><th>Course_Name</th><th>Course_ID</th><tr>");
while($row = mysqli_fetch_array($Courses))
{
    print("<tr align='center'><td>".$row["C_Name"]."</td>");
    print("<td>".$row["C_Code"]."</td></tr>");
}
?>