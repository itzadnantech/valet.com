<?php
include('datac.php');
include ('session_flag.php');
include 'defaultfunctions.php';
$message = "wrong answer";

if(isset($_POST['view'])){

if($_POST["view"] != '')
{
    $update_query = "UPDATE comments SET comment_status = 1 WHERE comment_status=0 and userid = ". $_SESSION["userid"];
    mysqli_query($conn, $update_query);
}
$query = "SELECT comment_id,comments.ticket_no,comments.status,time,model,brand,name 
                FROM comments inner join vehicle on comments.ticket_no= vehicle.ticket_no inner join 
                parking on parking.ticket_no=vehicle.ticket_no inner join
                status on parking.status=status.id where userid=".$_SESSION["userid"]." ORDER BY comment_id DESC LIMIT 5";
$result = mysqli_query($conn, $query);
           
    
    

    
   $output='';                                 
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
     $start_date = new DateTime($datenow);
     $since_start = $start_date->diff(new DateTime($row["time"]));

     $minutes = $since_start->days * 24 * 60;
     $minutes += $since_start->h * 60;
     $minutes += $since_start->i;
    $output .= '<li><a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                                <div class="peer peer-greed"><span> <span class="c-grey-600">Ticket no: '.$row["ticket_no"].'<span class="fw-500">, '.brandname($row["brand"]).', '.$row["model"].'</span> <span class="text-dark"> is '.$row["name"].'</span></span></span>
                                                    <p class="m-0"><small class="fsz-xs">'.$minutes.' mins ago</small></p>
                                                </div>
                                            </a></li>';

 }
   
}
else{
     $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
}
 
$status_query = "SELECT * FROM comments WHERE comment_status=0 and userid =  ".$_SESSION["userid"];
$result_query = mysqli_query($conn, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
    'notification' => $output,
    'unseen_notification'  => $count
);

echo json_encode($data);

}

?>