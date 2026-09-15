<?php
        if (isset($_POST['submit'])) {
            // Database credentials
            $servername = "localhost";
            $db_username = "root";
            $db_password = "";
            $database = "user-db";

            // Connect to DB
            $conn = new mysqli($servername, $db_username, $db_password, $database);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Sanitize inputs
            $username = $conn->real_escape_string($_POST['username']);
            $email = $conn->real_escape_string($_POST['email']);
            $password = $conn->real_escape_string($_POST['password']);

            // Insert into database
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
            if ($conn->query($sql) === TRUE) {
                echo "<p style='color:green;'>User registered successfully!</p>";
            } else {
                echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
            }

            $conn->close();
        }
        ?>