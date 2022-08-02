<?php
$checkin=1;
 include 'php/session_flag.php';
?>

<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />


<head>
    <?php
        include 'php/head.php';
    ?>
    <title>Dashboard</title>
	
	<style type="text/css">
    .errspan {
        float: right;
        margin-right: 6px;
        margin-top: -25px;
        position: relative;
        z-index: 2;
        color: Black;
    }
</style>
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
                                <h5 class="bgc-light-blue-500 c-white p-20">Check-in Form</h5>
                                <div class="mT-30">
                                    <form method="post" action="php/engine.php" id="checkin_form">
                                        <div class="form-row">
                                            <div class="form-group col-md-6"><label for="ticket-no">Ticket No.</label>
                                                <input type="text" class="form-control" id="ticket_no" name="ticket_no" placeholder="Enter unique barcode / ticket number" required>
												<i class="fa fa-barcode errspan" aria-hidden="true"></i>
											</div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="parking_no">Parking No</label>
                                            <input id="parking_no" name="parking_no" type="text" class="form-control" autocomplete="off" value="" placeholder="Enter Parking Number" required/>
                                        </div>   
                                        </div>
                                        <div class="form-row">
                                            
                                        <div class="form-group col-md-6">
                                            <label for="vehicle_brand">Vehicle Brand</label>
                                            <select id="vehicle_brand" name="vehicle_brand" class="form-control" style="width:100%;" required>
                                                <option value="">Select</option><option value="62"> AUDI</option><option value="59"> BENTALY</option><option value="2"> BMW</option><option value="63"> CADILLAC</option><option value="7"> Chevrolet</option><option value="31"> Corvette</option><option value="51"> DODGE</option><option value="65"> FIAT</option><option value="61"> FORD</option><option value="30"> Geely</option><option value="60"> GMC</option><option value="55"> HONDA</option><option value="29"> Hummer</option><option value="56"> HYUNDAI</option><option value="10"> Infiniti</option><option value="57"> ISUZU</option><option value="58"> JAGUAR</option><option value="11"> Jeep</option><option value="50"> kia</option><option value="8"> Lamborghini</option><option value="49"> Land Rover</option><option value="12"> Lexus</option><option value="32"> Lincoln</option><option value="48"> Lotus</option><option value="47"> Maserati</option><option value="42"> Maybach</option><option value="46"> Mazda</option><option value="45"> McLaren</option><option value="4"> Mercedes</option><option value="44"> Mercedes Benz</option><option value="43"> MG</option><option value="41"> Mini / Mini Cooper</option><option value="52"> MINI COOPER</option><option value="5"> Mitsubishi</option><option value="28"> Mustang</option><option value="3"> Nissan</option><option value="40"> Opel</option><option value="9"> Peugeot</option><option value="39"> Porsche</option><option value="53"> RANGE ROVER</option><option value="6"> Renault</option><option value="38"> Rolls Royce</option><option value="64"> seion</option><option value="37"> Skoda</option><option value="27"> Spyker</option><option value="26"> Ssangyong</option><option value="25"> SSC</option><option value="13"> Subaru</option><option value="36"> Suzuki</option><option value="24"> Tatra</option><option value="35"> Tesla</option><option value="1"> Toyota</option><option value="23"> Tramontana</option><option value="22"> Troller</option><option value="21"> TVR</option><option value="20"> UAZ</option><option value="19"> Vauxhall</option><option value="18"> Vector</option><option value="17"> Venturi</option><option value="54"> VOLKS WAGAN</option><option value="34"> Volkswagen</option><option value="33"> Volvo</option><option value="16"> Wiesmann</option><option value="15"> ZAZ</option><option value="14"> Zil</option>
                                            </select>
                                        </div>
                                            <div class="form-group col-md-6"><label for="vehicle_model">Vehicle Model</label>
                                                <input type="text" class="form-control" id="vehicle_model" name="vehicle_model" placeholder="Enter Vehicle Model No." required></div>
                                          
                                        </div>
                                         
                                        <div class="form-row">
                                             <div class="form-group col-md-6">
                                            <label for="vehicle_color">Vehicle Color</label>
                                            <select id="vehicle_color" name="vehicle_color" class="form-control" style="width:100%;" required>
                                               <option value="">Select</option><option value="6"> Black</option><option value="3"> Blue</option><option value="11"> Brown</option><option value="9"> Golden</option><option value="13"> GRAY</option><option value="12"> Green</option><option value="7"> Maroon</option><option value="14"> orange</option><option value="1"> Red</option><option value="4"> silver</option><option value="8"> Violet</option><option value="2"> White</option><option value="10"> Yellow</option>
                                            </select>
                                        </div>
                                            <div class="form-group col-md-6"><label for="description">Description</label>
                                                <input type="text" class="form-control" id="description" name="description" placeholder="Enter description / condition of vehicle"></div>
                                        
                                        </div>
                                        
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="reg_country">Country of Vehicle Registration</label>
                                                        <select id="reg_country" name="reg_country" class="form-control" style="width:100%;" required>
                                                            <option value="">Select</option><option value="1">Abu Dhabi<option value="2"> Ajman</option><option value="3"> Sharjah</option><option value="4"> Dubai</option><option value="5"> Fujairah</option><option value="6"> Ras Al Khaimah</option><option value="7"> Umm Al Quwain</option><option value="8"> KSA - Saudi Arabia</option><option value="9"> Kuwait</option><option value="10"> Qatar</option><option value="11"> Bahrain</option><option value="12"> Oman</option>
                                                        </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="vehicle_reg">Reg no.</label>
                                                <input class="form-control" placeholder="Enter Registration no." type="text" id="vehicle_reg" name="vehicle_reg" value="" required/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="diver">Select Driver</label>
                                            <select id="diver" name="diver" class="form-control" style="width:100%;">
                                                <option value="">Select</option>
                                                <?php
                                                include 'php/load_driver.php';
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label name="status" id="status"></label>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="checkin" id="checkin">Check In</button>
                                    </form>
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