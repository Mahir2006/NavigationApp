<?php
$servername = "localhost";
$username = "id9193466_admi";
$password = "mahir2006";
$dbname = "id9193466_contacts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$d=$_POST[hid];
$sql = "SELECT * FROM MyGuests where name = $d ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo"<script>window.location='shares.php?pro=$d';</script>";
    }
} else {
    echo "<script>
    alert('No user found');
    window.location='shares.html';</script>";
}
$conn->close();
?>