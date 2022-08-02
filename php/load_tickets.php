<?php
// Create connection
include 'datac.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ticket_no FROM parking where status<3;";
$result = $conn->query($sql);
if (($result = $conn->query($sql)) !== FALSE)
{
    if ($result->num_rows > 0) {
    // output data of each row
        while($res = $result->fetch_assoc()) {
            echo "<option value=".$res["ticket_no"].">".ucfirst(strtolower($res["ticket_no"]))."</option>";
        }
    }
}
else{
    echo "query failure";
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();  
?>