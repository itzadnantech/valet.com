<?php
    $rate_plan=1;
    include 'php/session_flag.php';
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />


<head>
    <?php
        include 'php/head.php';
    ?>
    <title>Rate Plan</title>
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
                                <h5 class="bgc-light-blue-500 c-white p-20">Parking Rate Plan</h5>
                                <div class="mT-30">
                                                <form method="post" action="php/engine.php" id="rate_form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label for="shift1_start">1st rate plan start time</label>
                                                            <input type="time" class="form-control" id="shift1_start" name="shift1_start" value="08:00">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label for="shift1_end">1st rate plan end time</label>
                                                            <input type="time" class="form-control" id="shift1_end" name="shift1_end" value="20:00">
                                                        </div>
                                                    </div>
                                                
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label for="shift1_rate">Rate in AED</label>
                                                            <input type="number" class="form-control" id="shift1_rate" name="shift1_rate" required placeholder="Enter numeric value only">
                                                        </div>
                                                    </div>
                                               
                                            </div>
                                            <div class="col-md-6">
                                               
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label for="shift2_start">2nd rate plan Start time</label>
                                                            <input type="time" class="form-control" id="shift2_start" name="shift2_start" value="20:00">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label for="shift2_end">2nd rate plan end time</label>
                                                            <input type="time" class="form-control" id="shift2_end" name="shift2_end" value="08:00">
                                                        </div>
                                                    </div>
                                                
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label for="shift2_rate">Rate in AED</label>
                                                            <input type="number" class="form-control" id="shift2_rate" name="shift2_rate" required placeholder="Enter numeric value only">
                                                        </div>
                                                    </div>
                                                
                                                    <div class="form-group">
                                                        <label name="status" id="status"></label>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary" name="update_rates" id="update_rates" >Update rates</button>
                                            </div>
                                        </div>
                                           </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <?php include 'php/footer.php'?>
</body>

</html>