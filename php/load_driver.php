<?php
// Create connection
include 'datac.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT id,name FROM driver;";
$result = $conn->query($sql);
if (($result = $conn->query($sql)) !== FALSE)
{
    if ($result->num_rows > 0) {
    // output data of each row
        while($res = $result->fetch_assoc()) {
            echo "<option value=".$res["id"].">".ucfirst(strtolower($res["name"]))."</option>";
        }
    }
}
else{
    echo "query failure";
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();  
?>