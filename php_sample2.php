<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>PHP: Adding Records to the Database</title></head>
<body>
<b>
<?php
// Source: https://www.w3schools.com/php/php_mysql_connect.asp
// Edited by Paolo, for assignment purposes

//Connecting to database
$servername = "localhost:3306";     // Server to connect to
$username = "pe76_ass1Example";           // Server username
$password = "Monthlyadverts25!";    // Server user password
$dbname = "pe76_assignment1_example";       // Server database name


// Create connection using credentials from above
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    // if connection fails, display error message
    die("Connection failed: " . $conn->connect_error);
}

/* 
Below is the SQL that inserts into table form_info
it also includes the column names and the data to 
add into the table
*/
$sql = "INSERT INTO assignment1_table (forename, lastname, age, dob)
VALUES ('Paolo', 'Espiritu', '21', '98/08/01')";

if ($conn->query($sql) === TRUE) {
    // if the query is ran successfully display below
    echo "New record created successfully";
} else {
    // otherwise, display the message below with error
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// close connection
$conn->close();

?>
</b>
</body>
</html>
