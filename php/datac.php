
<?php 

$conn = new mysqli("localhost", "root", "", "webxolutions_valet_db");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    date_default_timezone_set('Asia/Dubai');
    $datenow = date('Y/m/d H:i:s');
?>