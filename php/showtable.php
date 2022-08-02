<?php
if(isset($checkout)){
    showCheckoutTable();
}
else if(isset($add_driver)){
    showDriverTable();
}

else if(isset($add_location)){
    showLocationTable();
}

else if(isset($index)){
    showIndexTable();
}

else if(isset($manage_users)){
    showUserTable();
}

function showDriverTable(){
    // Create connection
include 'datac.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT name, email, date_added FROM driver;";
$result = $conn->query($sql);
if (($result = $conn->query($sql)) !== FALSE)
{
    if ($result->num_rows > 0) {
    // output data of each row
        while($res = $result->fetch_assoc()) {
            echo "<tr><td class='fw-600'>".ucfirst(strtolower($res["name"]))."</td>
                <td>".$res["email"]."</td>
                <td>".$res["date_added"]."</td></tr>";
        }
    }
}
else{
    echo "query failure";
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); 
}

function showLocationTable(){
    
}

function showIndexTable(){
    // Create connection

include 'defaultfunctions.php';
include 'datac.php';
$sql = "SELECT brand,model,
       name,
       Concat (DATE_FORMAT(parking.in_time, '%b'),', ',DATE_FORMAT(parking.in_time, '%y')) as date,
       earned_amount
  FROM parking
 INNER JOIN vehicle ON vehicle.ticket_no = parking.ticket_no
 INNER JOIN status ON parking.status = status.id
 ORDER BY parking.in_time DESC Limit 5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
        while($res = $result->fetch_assoc()) {
            echo "<tr><td class='fw-600'>".brandname($res["brand"]).", ".$res["model"]."</td>
            <td><span class='badge p-10 lh-0 tt-c badge-pill'>".$res["name"]."</span></td>
            <td>".$res["date"]."</td>
            <td class='text-success'>".$res["earned_amount"]."</td></tr>";
        }
    }
$conn->close(); 
}

function showUserTable(){
    // Create connection
include 'datac.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT name, email, role FROM users where role !=101;";
$result = $conn->query($sql);
if (($result = $conn->query($sql)) !== FALSE)
{
    if ($result->num_rows > 0) {
    // output data of each row
        while($res = $result->fetch_assoc()) {
            $role=$res["role"];
            $role_name="";
            if($role==110)
            {
                $role_name="Manager";
            }
            else if($role==111)
            {
                $role_name="Key controller";
            }
            else if($role==112)
            {
                $role_name="Shop point";
            }
            else if($role==113)
            {
                $role_name="Gate man";
            }
            echo "<tr><td class='fw-600'>".ucfirst(strtolower($res["name"]))."</td>
                <td>".$res["email"]."</td>
                <td>".$role_name."</td></tr>";
        }
    }
}
else{
    echo "query failure";
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

function showCheckoutTable(){
// Create connection
include 'defaultfunctions.php';
include 'datac.php';
$status='';
    if($_SESSION["role"]==101)
    {
        $status='status<=3';
    }
    else if($_SESSION["role"]==110)
    {
        $status='status=1 or status = 2';
    }
$sql = "SELECT vehicle.Ticket_no as ticket,
       in_time, brand, model, Reg_no,name
  FROM parking
 INNER JOIN vehicle ON vehicle.ticket_no = parking.ticket_no
 INNER JOIN status ON parking.status = status.id where ".$status." 
 ORDER BY parking.in_time DESC Limit 5";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // output data of each row
        while($res = $result->fetch_assoc()) {
            echo "<tr><td class='fw-600'>".$res["ticket"]."</td>
            <td>".$res["in_time"]."</td>
            <td>".brandname($res["brand"]).", ".$res["model"]."</td>
            <td >".$res["Reg_no"]."</td>
            <td><span class='badge p-10 lh-0 tt-c badge-pill'>".$res["name"]."</span></td></tr>";
        }
    }
$conn->close();  
}
?>