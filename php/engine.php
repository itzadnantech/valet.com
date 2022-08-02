<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:signin.php');
    exit;
}
?>
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    include 'datac.php';
    
    if(isset($_POST['checkin'])){
        checkin($conn,$datenow);
    }
    else if(isset($_POST['add_driver'])){
        add_driver($conn);
    }
    else if(isset($_POST['submitbtn'])){
        if($_POST['submitbtn']=='Check Out'){
            checkout($conn,$datenow);
        }
        else if($_POST['submitbtn']=='Generate Bill'){
            generateBill($conn,$datenow);
        }
    }
    
    else if(isset($_POST['add_user'])){
        add_user($conn);
    }
    
    else if(isset($_POST['update_rates'])){
        update_rates($conn);
    }
    
    
    else if(isset($_POST['login'])){
        login($conn);
    }
    
    else if(isset($_POST['onway'])){
        onway($conn,$datenow);
    }
    
    else if(isset($_POST['c_checkout'])){
        c_checkout($conn,$datenow);
    }
    
    else if(isset($_POST['p_save'])){
        update_password($conn,$datenow);
    }
    
    $conn->close();
} 
 
  function update_password($conn)
{
    $oldpassword = $_POST['oldpassword'];
    $new_password = $_POST['new_password'];
      
    $sql = "SELECT password
    FROM users where id='".$_SESSION["userid"]."';";
    try {
        
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              $res = $result->fetch_assoc();
              if($res["password"]==md5($oldpassword) && md5($oldpassword)!=md5($new_password)){
                    $sql = "update users set password='".md5($new_password)."' where id='".$_SESSION["userid"]."';";
                    if ($conn->query($sql)) {
                        echo "done";
                    }
              }
        }
    } 
    catch(Exception $e) {
      echo 'Message: ' .$e->getMessage();    
    }
}

  function c_checkout($conn,$datenow)
{
    $ticket_no = $_POST['ticket_no'];
      
    $sql = "SELECT status
    FROM parking where ticket_no='".$ticket_no."' and status=2;";
    try {
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
                $sql = "update parking set out_time='".$datenow."', status=3 where ticket_no='".$ticket_no."';";
                if ($conn->query($sql)) {
                    notify($ticket_no,$a=3,$conn,$datenow);
                    echo "done";
                }
            }
    } 
    catch(Exception $e) {
      echo 'Message: ' .$e->getMessage();    
    }
}

  function onway($conn,$datenow)
{
    $ticket_no = $_POST['ticket_no'];
    $sql = "SELECT status
    FROM parking where ticket_no='".$ticket_no."' and status=1;";
      try {
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
                $sql = "update parking set on_the_way_time='".$datenow."', status=2 where ticket_no='".$ticket_no."';";
                if ($conn->query($sql)) {
                    notify($ticket_no,$a=2,$conn,$datenow);
                  echo "done";
                }
            }
    } 
    catch(Exception $e) {
      echo 'Message: ' .$e->getMessage();    
    }
}
  function login($conn)
{
    $email = strtolower($_POST['email']);
    $password = $_POST['password'];
      
    $sql = "SELECT id,email,name,role,password
    FROM users where email='".$email."';";
    $conn->query($sql);
    if (($result = $conn->query($sql))!=false) {
        if ($result->num_rows > 0) {
                $res = $result->fetch_assoc();
                if($res['password']==md5($password)){
                $_SESSION["email"] = $email;
                $_SESSION["name"] = $res["name"];
                $_SESSION["role"] = $res["role"];
                $_SESSION["userid"]=$res["id"];
                echo "document.location = 'index.php';";
            }
            else
            {
                //echo mysqli_error($conn);
                echo 'no';
            }
            
        }
        else{
            //echo mysqli_error($conn);
            echo 'no';
        }
    }
    else{
        //echo mysqli_error($conn);
        echo 'no';
    }  
}

  function update_rates($conn)
{
    $shift1_time = $_POST['shift1_start']."-".$_POST['shift1_end'];
    $shift2_time = $_POST['shift2_start']."-".$_POST['shift2_end'];
    $shift1_rate = $_POST['shift1_rate'];
    $shift2_rate = $_POST['shift2_rate'];
      
    $sql = "update rate set rate_one_time='".$shift1_time."',
    rate_one='".$shift1_rate."',
    rate_two_time='".$shift2_time."', 
    rate_two='".$shift2_rate."' where id=1;";

    if ($conn->query($sql)) {
      echo "done";
    }
    else{
       //echo mysqli_error($conn);
    echo 'not done';
    } 
}
function add_user($conn)
{
    
    $email = $_POST['user_email'];
    $name = $_POST['user_name'];
    $password = md5($_POST['user_password']);
    $role = $_POST['user_role'];
    
    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO users(email,name,password,role) VALUES (?, ?, ?,?)");
    
    $stmt->bind_param("sssi",$email,$name,$password,$role);

    if ($stmt->execute()) { 

       echo "done";
    } else {
       echo "no";
       //echo $stmt->errorInfo();
    }

    $stmt->close(); 
}
 
function add_driver($conn,$datenow)
{
    
    $driver_name = $_POST['driver_name'];
    $driver_email = $_POST['driver_email'];
    $add_driver = $_POST['add_driver'];
    
    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO driver(name,email,date_added) VALUES (?, ?, ?)");
    
    $stmt->bind_param("sss",$driver_name,$driver_email,$datenow);

    if ($stmt->execute()) { 

       echo "done";
    } else {
       echo $stmt->errorInfo();
    }

    $stmt->close(); 
}

function generateBill($conn,$datenow)
{
    
    $ticket_no = $_POST['ticket_no'];
    $cashier_name = $_POST['cashier_name'];
    $t_amount = $_POST['t_amount'];
    
    $sql = "SELECT in_time,earned_amount
    FROM parking where ticket_no='".$ticket_no."';";
    
    if (($result = $conn->query($sql))!=false) {
      
        if ($result->num_rows > 0) {
            $res = $result->fetch_assoc();
            if($res['earned_amount']==0){
                $hours=round((strtotime($datenow) - strtotime($res['in_time']))/3600, 0);
                if($hours<=0){
                    echo "1"."-hours";
                }
                else{
                    echo $hours.'-hours';
                }
            }
            else
            {
                echo 'already';
            }
            
        }
        else{
            echo 'no ticket';
        }
    }
    else{
       echo mysqli_error($conn);
        //echo 'not done';
    } 
}

  function checkout($conn,$datenow)
{
    $ticket_no = $_POST['ticket_no'];
    $cashier_name = $_POST['cashier_name'];
    $t_amount = $_POST['t_amount'];
      
    include 'datac.php';
      
    $sql = "update parking set cashier_name='".$cashier_name."',request_time='".$datenow."', status=1 , 
    earned_amount=CASE when earned_amount=0 then ".$t_amount." ELSE earned_amount END where ticket_no='".$ticket_no."';";
    if ($conn->query($sql)) {
      notify($ticket_no,$a=1,$conn,$datenow);
      echo "done";
    }
    else{
       // echo 'not done';
        echo mysqli_error($conn);
    }    
}


function checkin($conn,$datenow)
{
    if (isset($_POST['parking_no'])){
        
    }
    $ticket_no = $_POST['ticket_no'];
    $vehicle_brand = $_POST['vehicle_brand'];
    $vehicle_model = $_POST['vehicle_model'];
    $vehicle_color = $_POST['vehicle_color'];
    $description = $_POST['description'];
    $reg_country = $_POST['reg_country'];
    $vehicle_reg = $_POST['vehicle_reg'];
    $diverid = $_POST['diver'];
    $parking_no = $_POST['parking_no'];


    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO parking
        (ticket_no,driver_id,parking_no,in_time) VALUES (?, ?, ?,?);");
    $stmt->bind_param("siss",$ticket_no,$diverid,$parking_no,$datenow);

    if ($stmt->execute()) { 
        // prepare and bind
        $stmt = $conn->prepare("INSERT INTO vehicle (brand,color,reg_no,ticket_no,reg_country,model,description) VALUES (?, ?, ?,?,?,?,?);");
        $stmt->bind_param("iississ",$vehicle_brand,$vehicle_color,$vehicle_reg,
                      $ticket_no,$reg_country,$vehicle_model,$description);
    
        if ($stmt->execute()) { 
            notify($ticket_no,$a=0,$conn,$datenow);
            echo "done";
        }
        else{
            echo "no";
           // print_r($stmt->error);
        }
    }
    else
    {
        echo "no";
       // print_r($stmt->error);
    }

    $stmt->close();
    
}
 function notify($ticket_no,$status,$conn,$datenow)
{
     $c_status=0;
     $userid=1;//for admin
    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO comments(comment_status, ticket_no,userid,status,time) VALUES (?, ?,?, ?,?);");
    
    $stmt->bind_param("isiis",$c_status,$ticket_no,$userid,$status,$datenow);

    if ($stmt->execute()) { 
    } else {
       echo $stmt->error;
    }
     $userid=5;//for admin
     // prepare and bind
    $stmt = $conn->prepare("INSERT INTO comments(comment_status, ticket_no,userid,status,time) VALUES (?, ?,?, ?,?);");
    
    $stmt->bind_param("isiis",$c_status,$ticket_no,$userid,$status,$datenow);

    if ($stmt->execute()) { 
    } else {
       echo $stmt->error;
    }
}
?>