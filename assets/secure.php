<h1>Welcome to Spere_Landing Admin</h1>
<?php
include('./database.php');


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT ID, Email FROM Emails";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row

    echo "<h3>There are   <span style='color: skyblue; font-size: 35px;'>" . $result->num_rows . "</span>   users signed up.</h3>";

    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"]. " - Email: " . $row["Email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>
