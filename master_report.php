<?php
 include 'php/session_flag.php';
?>
<?php
    $from_date="2019-09-24";
    $to_date="2019-11-18";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
       $from_date=$_POST["from_date"];
        $to_date=$_POST["to_date"];
    } 
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <?php
        include 'php/head.php';
    ?>
    <title>Master Report</title>
</head>

<body class="app">
    <div>

        <?php
        include 'php/nav.php';
        ?>
        <div class="page-container">
            <?php
            include 'php/header.php';
            ?>
            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <div class="row gap-20 masonry pos-r">
                        <div class="masonry-sizer col-md-6"></div>
                        <div class="masonry-item col-md-12" >
                            <div class="bgc-white p-20 bd">
                                <h5 class="bgc-light-blue-500 c-white p-20">Master Report</h5>
                                <div class="mT-30">
                                    <form method="post" action="" id="master_form">
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label for="from_date">From Date</label>
                                                <input id="from_date" name="from_date" type="date" class="form-control date" value="<?php echo $from_date?>" />
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="to_date">To Date</label>
                                                <input id="to_date" name="to_date" type="date" class="form-control" value="<?php echo $to_date?>" />
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="location">Select Location</label>
                                                <select class="form-control" id="location" name="location" onchange="">
                                                    <option value="">Sort By Parking Location</option>
                                                    <option value="1">Location 1</option>
                                                    <option value="2">Location 2</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="Slot">Select Slot</label>
                                                <select class="form-control" id="slot" name="slot">
                                                    <option value="">Slot 1</option>
                                                    <option value="">Slot 2</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label name="status" id="status"></label>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="master_search" id="master_search">Search</button>
                                    </form>



                                    <p>-</p>
                                    <div >
                                        <div class="bd bgc-white" >
                                            <div class="layers">
                                                <div class="layer w-100" style="width:100%">
                                                    <div class="bgc-light-blue-500 c-white p-20">
                                                        <div class="peers ai-c jc-sb gap-40">
                                                            <div class="peer peer-greed" >
                                                                <h4>Report Details</h4>
                                                            </div>

                                                            <!--<div class="panel-btns pull-right" style="color:white;">
                                                                <button type="button" class="btn btn-default pull-right" id="EXCEL">Download
                                                                </button>
                                                            </div><br />-->
                                                        </div>
                                                        <div class="peer">
                                                            <h6 class="text-left">Total Records : <b>0</b>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive p-20">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Ticket No</th>
                                                                    <th>Checkin Date</th>
                                                                    <th>Time-In</th>
                                                                    <th>Checkout Date</th>
                                                                    <th>Time-Out</th>
                                                                    <th>Duration</th>
                                                                    <th>Plate No</th>
                                                                    <th>Total Amount(AED)</th>
                                                                    <th>Incl. VAT(%)</th>
                                                                    <th>Incl. VAT Amount(AED)</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php

                                                                    include 'php/datac.php';
                                                                    // Check connection
                                                                    if ($conn->connect_error) {
                                                                        die("Connection failed: " . $conn->connect_error);
                                                                    }
                                                                    $sql = "SELECT parking.ticket_no as ticket,reg_no,earned_amount,in_time,out_time 
                                                                            from parking
                                                                            inner join vehicle on parking.ticket_no=vehicle.ticket_no 
                                                                            where
                                                                            (date(in_time) BETWEEN '".$from_date."'AND '".$to_date."') OR 
                                                                            (date(out_time) BETWEEN '".$from_date."' AND '".$to_date."')";

                                                                    if (($result = $conn->query($sql)) !== FALSE)
                                                                            {
                                                                                if ($result->num_rows > 0) {
                                                                                    // output data of each row
                                                                                        while($res = $result->fetch_assoc()) {
                                                                                            $startdatetime=new DateTime($res["in_time"]);
                                                                                            $enddatetime=new DateTime($res["out_time"]);
                                                                                            $dteDiff  = $startdatetime->diff($enddatetime);
                                                                                            $startdate = $startdatetime->format('y/m/d');
                                                                                            $starttime = $startdatetime->format('H:i:s');

                                                                                            $enddate = $enddatetime->format('y/m/d');
                                                                                            $endtime = $enddatetime->format('H:i:s');
                                                                                            
                                                                                            if($startdate<$enddate){
                                                                                            $amount = (float)$res["earned_amount"];
                                                                                            echo "<tr><td class='fw-600'>".$res["ticket"]."</td>
                                                                                            <td>".$startdate."</td>
                                                                                            <td>".$starttime."</td>
                                                                                            <td>".$enddate."</td>
                                                                                            <td>".$endtime."</td>
                                                                                            <td>".$dteDiff->format("%D:%H:%I")."</td>
                                                                                            <td >".$res["reg_no"]."</td>
                                                                                            <td >".$amount."</td>
                                                                                            <td >5%</td>
                                                                                            <td >".$amount*0.05."</td></tr>";
                                                                                            }
                                                                                            else{
                                                                                            echo "<tr><td class='fw-600'>".$res["ticket"]."</td>
                                                                                            <td>".$startdate."</td>
                                                                                            <td>".$starttime."</td>
                                                                                            <td>0/0/0</td>
                                                                                            <td>00-00-00</td>
                                                                                            <td>00-00-00</td>
                                                                                            <td >".$res["reg_no"]."</td>
                                                                                            <td >".$res["earned_amount"]."</td></tr>";
                                                                                            }
                                                                                        }
                                                                                    }
                                                                            }
                                                                            else
                                                                            {
                                                                                echo "query failure";
                                                                                echo "Error: " . $sql . "<br>" . $conn->error;
                                                                            }

                                                                            $conn->close(); 
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <?php include'php/footer.php'?>
</body>

</html>