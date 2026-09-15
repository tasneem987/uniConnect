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
$Courses = mysqli_query($conn,"SELECT * FROM users")
or die ("Couldn't connect to the table");
//echo "Connect to the Table";
echo ("<table border='1' width='40%'>");
echo ("<tr><th>username</th><th>email</th><th>password</th><tr>");


while($row = mysqli_fetch_array($Courses))
{
    print("<tr align='center'><td>".$row["username"]."</td>");
    print("<td>".$row["email"]."</td>");
    print("<td>".$row["password"]."</td></tr>");
}
?>