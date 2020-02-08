<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>PHP: Adding Records to the Database</title></head>
<body>

<h1>PHP: Populating a database with data from a form.</h1>    

<?php
// Source: https://stackoverflow.com/a/39654637
// Edited by Paolo, for assignment purposes

//Connecting to database
$servername = "localhost:3306";             // Server to connect to
$username = "pe76_ass1Example";             // Server username
$password = "Monthlyadverts25!";            // Server user password
$dbname = "pe76_assignment1_example";       // Server database name


// Create connection using credentials from above
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    // if connection fails, display error message
    die("Connection failed: " . $conn->connect_error);
}

// if submit button (with id Save) is clicked call query below
if(isset($_POST['save']))
{
    /*
    Below is the SQL statement which is run when the submit button
    is pressed. It includes, the table to insert the data, the
    columns that is populated and the placeholders which point
    to the data in the form.
    */
    $sql = "INSERT INTO assignment1_table (forename, lastname, age, dob)
    VALUES ('".$_POST["forename"]."','".$_POST["lastname"]."','".$_POST["age"]."','".$_POST["dob"]."')";

    $result = mysqli_query($conn,$sql);
}

// close connection
$conn->close();
?>

<form action="php_sample3.php" method="post"> <!--Specify form--> 
<label id="first"> First name:</label><br/> <!--Label for input-->
<input type="text" name="forename"><br/> <!--type and placeholder name-->

<label id="first">Last Name:</label><br/><!--Label for input-->
<input type="text" name="lastname"><br/><!--type and placeholder name-->

<label id="first">Age:</label><br/><!--Label for input-->
<input type="int" name="age"><br/><!--type and placeholder name-->

<label id="first">Date of Birth:</label><br/><!--Label for input-->
<input type="date" name="dob"><br/><!--type and placeholder name-->

<button type="submit" name="save">save</button><!--Submit button-->

</form>

</body>
</html>
