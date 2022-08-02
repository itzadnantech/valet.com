<?php
 include 'php/session_flag.php';
?>
<?php

    include 'php/defaultfunctions.php';
    $v_brand="";
    $v_model="";
    $v_reg="";
    $v_reg_country="";
    $from_date="2019-11-01";
    $to_date="2019-11-18";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $from_date=$_POST["from_date"];
        $to_date=$_POST["to_date"];
        if(isset($_POST["vehicle_brand"])&&strlen($_POST["vehicle_brand"])>0){
            $v_brand=$_POST["vehicle_brand"];
        }
        if(isset($_POST["vehicle_model"])&&strlen($_POST["vehicle_model"])>0){
            $v_model=$_POST["vehicle_model"];
        }
        if(isset($_POST["vehicle_reg"])&&strlen($_POST["vehicle_reg"])>0){
            $v_reg=$_POST["vehicle_reg"];
        }
        if(isset($_POST["reg_country"])&&strlen($_POST["reg_country"])>0){
            $v_reg_country=$_POST["reg_country"];
        }
    }
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />


<head>
    <?php
        include 'php/head.php';
    ?>
    <title>Dashboard</title>
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
                        <div class="masonry-item col-md-12">
                            <div class="bgc-white p-20 bd">
                                <h5 class="bgc-light-blue-500 c-white p-20">Inventory Report</h5>
                                <div class="mT-30">
                                    <form method="post" action="" id="master_form">
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for="from_date">From Date</label>
                                                <input id="from_date" name="from_date" type="date" class="form-control date" value="<?php echo $from_date?>" />
                                            </div>

                                            <div class="form-group col-md-2">
                                                <label for="to_date">To Date</label>
                                                <input id="to_date" name="to_date" type="date" class="form-control" value="<?php echo $to_date?>" />
                                            </div>


                                            <div class="form-group col-md-2">
                                                <label for="vehicle_brand">Vehicle Brand</label>
                                                <select id="vehicle_brand" name="vehicle_brand" class="form-control" style="width:100%;">
                                                    <option value="">Select</option>
                                                    <option value="62"> AUDI</option>
                                                    <option value="59"> BENTALY</option>
                                                    <option value="2"> BMW</option>
                                                    <option value="63"> CADILLAC</option>
                                                    <option value="7"> Chevrolet</option>
                                                    <option value="31"> Corvette</option>
                                                    <option value="51"> DODGE</option>
                                                    <option value="65"> FIAT</option>
                                                    <option value="61"> FORD</option>
                                                    <option value="30"> Geely</option>
                                                    <option value="60"> GMC</option>
                                                    <option value="55"> HONDA</option>
                                                    <option value="29"> Hummer</option>
                                                    <option value="56"> HYUNDAI</option>
                                                    <option value="10"> Infiniti</option>
                                                    <option value="57"> ISUZU</option>
                                                    <option value="58"> JAGUAR</option>
                                                    <option value="11"> Jeep</option>
                                                    <option value="50"> kia</option>
                                                    <option value="8"> Lamborghini</option>
                                                    <option value="49"> Land Rover</option>
                                                    <option value="12"> Lexus</option>
                                                    <option value="32"> Lincoln</option>
                                                    <option value="48"> Lotus</option>
                                                    <option value="47"> Maserati</option>
                                                    <option value="42"> Maybach</option>
                                                    <option value="46"> Mazda</option>
                                                    <option value="45"> McLaren</option>
                                                    <option value="4"> Mercedes</option>
                                                    <option value="44"> Mercedes Benz</option>
                                                    <option value="43"> MG</option>
                                                    <option value="41"> Mini / Mini Cooper</option>
                                                    <option value="52"> MINI COOPER</option>
                                                    <option value="5"> Mitsubishi</option>
                                                    <option value="28"> Mustang</option>
                                                    <option value="3"> Nissan</option>
                                                    <option value="40"> Opel</option>
                                                    <option value="9"> Peugeot</option>
                                                    <option value="39"> Porsche</option>
                                                    <option value="53"> RANGE ROVER</option>
                                                    <option value="6"> Renault</option>
                                                    <option value="38"> Rolls Royce</option>
                                                    <option value="64"> seion</option>
                                                    <option value="37"> Skoda</option>
                                                    <option value="27"> Spyker</option>
                                                    <option value="26"> Ssangyong</option>
                                                    <option value="25"> SSC</option>
                                                    <option value="13"> Subaru</option>
                                                    <option value="36"> Suzuki</option>
                                                    <option value="24"> Tatra</option>
                                                    <option value="35"> Tesla</option>
                                                    <option value="1"> Toyota</option>
                                                    <option value="23"> Tramontana</option>
                                                    <option value="22"> Troller</option>
                                                    <option value="21"> TVR</option>
                                                    <option value="20"> UAZ</option>
                                                    <option value="19"> Vauxhall</option>
                                                    <option value="18"> Vector</option>
                                                    <option value="17"> Venturi</option>
                                                    <option value="54"> VOLKS WAGAN</option>
                                                    <option value="34"> Volkswagen</option>
                                                    <option value="33"> Volvo</option>
                                                    <option value="16"> Wiesmann</option>
                                                    <option value="15"> ZAZ</option>
                                                    <option value="14"> Zil</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-2">
                                                <label for="reg_country">Country of Registration</label>
                                                <select id="reg_country" name="reg_country" class="form-control" style="width:100%;">
                                                    <option value="">Select</option>
                                                    <option value="1">Abu Dhabi
                                                    <option value="2"> Ajman</option>
                                                    <option value="3"> Sharjah</option>
                                                    <option value="4"> Dubai</option>
                                                    <option value="5"> Fujairah</option>
                                                    <option value="6"> Ras Al Khaimah</option>
                                                    <option value="7"> Umm Al Quwain</option>
                                                    <option value="8"> KSA - Saudi Arabia</option>
                                                    <option value="9"> Kuwait</option>
                                                    <option value="10"> Qatar</option>
                                                    <option value="11"> Bahrain</option>
                                                    <option value="12"> Oman</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2"><label for="vehicle_model">Vehicle Model</label>
                                                <input type="text" class="form-control" id="vehicle_model" name="vehicle_model" placeholder="Enter Vehicle Model No." value="<?php echo $v_model;?>"></div>

                                            <div class="form-group col-md-2"><label for="vehicle_reg">Vehicle Reg no.</label>
                                                <input type="text" class="form-control" id="vehicle_reg" name="vehicle_reg" placeholder="Enter Vehicle Reg No." value="<?php echo $v_reg;?>"></div>

                                        </div>

                                        <div class="form-group">
                                            <label name="status" id="status"></label>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="master_search" id="master_search">Search</button>
                                    </form>



                                    <p>-</p>
                                    <div >
                                        <div class="bd bgc-white">
                                            <div class="layers">
                                                <div class="layer w-100">
                                                    <div class="bgc-light-blue-500 c-white p-20">
                                                        <div class="peers ai-c jc-sb gap-40">
                                                            <div class="peer peer-greed">
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
                                                                    <th align="center" style="width:5%;">#</th>
                                                                    <th>Ticket No.</th>
                                                                    <th>Checkin Time</th>
                                                                    <th>Request Time</th>
                                                                    <th>On the way Time</th>
                                                                    <th>Checkout Time</th>
                                                                    <th>Total-Time</th>
                                                                    <th>Reg No</th>
                                                                    <th>Vehicle Model</th>
                                                                    <th>Vehicle Brand</th>
                                                                    <th>Vehicle Color</th>
                                                                    <th>Emirate</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php

                                                                    include 'php/datac.php';
                                                                    // Check connection
                                                                    if ($conn->connect_error) {
                                                                        die("Connection failed: " . $conn->connect_error);
                                                                    }
                                                                    $sql = "SELECT parking.ticket_no as ticket,in_time,request_time,on_the_way_time,out_time,reg_no, 
                                                                                    brand,color,model,reg_country
                                                                            from parking
                                                                            inner join vehicle on parking.ticket_no=vehicle.ticket_no 
                                                                            where
                                                                            ((date(in_time) BETWEEN '".$from_date."'AND '".$to_date."') OR 
                                                                            (date(out_time) BETWEEN '".$from_date."' AND '".$to_date."'))";
                                                                
                                                                
                                                                    if($v_brand!=""){
                                                                       $sql=$sql." and brand=".$v_brand; 
                                                                    }
                                                                    if($v_reg_country!=""){
                                                                       $sql=$sql." and reg_country=".$v_reg_country; 
                                                                    }
                                                                    if($v_model!=""){
                                                                       $sql=$sql." and model='".$v_model."'"; 
                                                                    }
                                                                    if($v_reg!=""){
                                                                       $sql=$sql." and reg_no='".$v_reg."'"; 
                                                                    }
                                                                    $n=1;
                                                                    if (($result = $conn->query($sql)) !== FALSE)
                                                                            {
                                                                                if ($result->num_rows > 0) {
                                                                                    // output data of each row
                                                                                        while($res = $result->fetch_assoc()) {
                                                                                            $startdatetime=new DateTime($res["in_time"]);
                                                                                            $enddatetime=new DateTime($res["out_time"]);
                                                                                            $dteDiff  = $startdatetime->diff($enddatetime);
                                                                                            $start="<tr><td class='fw-600'>".$n."</td>
                                                                                            <td class='fw-600'>".$res["ticket"]."</td>
                                                                                            <td>".$res["in_time"]."</td>
                                                                                            <td>".$res["request_time"]."</td>
                                                                                            <td>".$res["on_the_way_time"]."</td>
                                                                                            <td>".$res["out_time"]."</td>
                                                                                            <td>";
                                                                                            $mid="";
                                                                                            $end="</td>
                                                                                            <td >".$res["reg_no"]."</td>
                                                                                            <td >".$res["model"]."</td>
                                                                                            <td >".brandname((int)$res["brand"])."</td>
                                                                                            <td >".colorname((int)$res["color"])."</td>
                                                                                            <td >".countryname((int)$res["reg_country"])."</td></tr>";
                                                                                            
                                                                                            if($startdatetime<$enddatetime){
                                                                                            $mid=$dteDiff->format("%D:%H:%I");
                                                                                            }
                                                                                            else{
                                                                                            $mid="00-00-00";
                                                                                            }
                                                                                            echo $start.$mid.$end;
                                                                                            $n=$n+1;

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
    <?php
    echo "<script>";
    
    if($v_brand!=""){
    echo "document.getElementById('vehicle_brand').value = ".$v_brand.";";
    }
    
    if($v_reg_country!=""){
        echo "document.getElementById('reg_country').value = ".$v_reg_country.";";
    }
    echo "</script>";
    ?>
    <?php include'php/footer.php'
    ?>
</body>

</html>
