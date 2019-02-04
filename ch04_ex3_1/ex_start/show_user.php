


<?php
// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$post_email = mysqli_real_escape_string($conn, $_POST['usernamel']);
$sql = "SELECT * FROM users WHERE username='$post_username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
        $row = $result->fetch_assoc();
        echo "username: " . $row['username'] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 