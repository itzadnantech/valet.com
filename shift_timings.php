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
                                <h5 class="bgc-light-blue-500 c-white p-20">Staff Shift timings</h5>
                                <div class="mT-30">
                                                <form method="post" action="php/engine.php" id="shift_timings_form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="shift_start">1st Shift start time</label>
                                                        <input type="time" class="form-control" id="1shift_start" name="1shift_start" value="08:00">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="1shift_end">1st Shift end time</label>
                                                        <input type="time" class="form-control" id="1shift_end" name="1shift_end" value="20:00">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="2shift_start">2nd Shift Start time</label>
                                                        <input type="time" class="form-control" id="2shift_start" name="2shift_start" value="20:00">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="2shift_end">2nd Shift Start time</label>
                                                        <input type="time" class="form-control" id="2shift_end" name="2shift_end" value="08:00">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label name="status" id="status"></label>
                                                </div>
                                                <button type="submit" class="btn btn-primary" name="update_shifts" id="update_shifts" >Update shifts</button>
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