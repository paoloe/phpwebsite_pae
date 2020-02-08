<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>PHP: Connecting to Database</title></head>
<body>
<b>
<?php
// Source: https://www.w3schools.com/php/php_mysql_connect.asp
// Edited by Paolo, for assignment purposes
$servername = "localhost:3306";     // Server Name
$username = "pe76_paea1";           // Server database username
$password = "Monthlyadverts25!";    // Servere database password

// Create connection, using the info provided above
$conn = new mysqli($servername, $username, $password);

// Check connection, and display error code if any...
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";      // if connected say this!
?>
</b>
</body>
</html>

