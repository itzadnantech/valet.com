<?php
    $row = array();

include 'datac.php';
$sql = "SELECT count(*) as t_checkin FROM parking where status=0;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
    $row["t_checkin"] = $result->fetch_assoc()["t_checkin"];
}
else {
    $row["t_checkin"]=0;
}

$sql = "SELECT count(*) as t_checkout FROM parking where status=3;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
   $row["t_checkout"] = $result->fetch_assoc()["t_checkout"];
}
else {
    $row["t_checkout"]=0;
}

$sql = "SELECT count(*) as onway FROM parking where status=2;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
   $row["onway"] = $result->fetch_assoc()["onway"];
}
else {
    $row["onway"]=0;
}



$sql = "SELECT count(*) as dailyinv FROM parking WHERE DATE(in_time) = CURDATE();";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
   $row["dailyinv"] = $result->fetch_assoc()["dailyinv"];
}
else {
    $row["dailyinv"]=0;
}


$sql = "SELECT sum(earned_amount) as income FROM parking WHERE MONTH(in_time) = MONTH(CURRENT_DATE())
AND YEAR(in_time) = YEAR(CURRENT_DATE())";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
   $row["income"] = $result->fetch_assoc()["income"];
}
else {
    $row["income"]=0;
}


$sql = "SELECT sum(earned_amount) as income FROM parking WHERE MONTH(in_time) = MONTH(CURRENT_DATE())
AND YEAR(in_time) = YEAR(CURRENT_DATE())";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
   $row["income"] = $result->fetch_assoc()["income"];
}
else {
    $row["income"]=0;
}


$sql = "SELECT sum(earned_amount) as income FROM parking WHERE MONTH(in_time) = MONTH(CURRENT_DATE())
AND YEAR(in_time) = YEAR(CURRENT_DATE())";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
   $row["income"] = $result->fetch_assoc()["income"];
}
else {
    $row["income"]=0;
}

$conn->close();  
?>