<?php
    $index=1;
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
        <?php
        include 'php/dashboard_data.php';
        ?>
            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <div class="row gap-20 masonry pos-r">
                        <div class="masonry-sizer col-md-6"></div>
                        <div class="masonry-item w-100">
                            <div class="row gap-20">
                                <div class="col-md-3">
                                    <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <h6 class="lh-1">Total Check In</h6>
                                        </div>
                                        <div class="layer w-100">
                                            <div class="peers ai-sb fxw-nw">
                                                <div class="peer peer-greed"><span id="sparklinedash"></span></div>
                                                <div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">+<?php echo $row["t_checkin"] ?></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <h6 class="lh-1">Total Check Out</h6>
                                        </div>
                                        <div class="layer w-100">
                                            <div class="peers ai-sb fxw-nw">
                                                <div class="peer peer-greed"><span id="sparklinedash2"></span></div>
                                                <div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">-<?php echo $row["t_checkout"] ?></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <h6 class="lh-1">On The Way</h6>
                                        </div>
                                        <div class="layer w-100">
                                            <div class="peers ai-sb fxw-nw">
                                                <div class="peer peer-greed"><span id="sparklinedash3"></span></div>
                                                <div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">~<?php echo $row["onway"] ?></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <h6 class="lh-1">Daily Inventory</h6>
                                        </div>
                                        <div class="layer w-100">
                                            <div class="peers ai-sb fxw-nw">
                                                <div class="peer peer-greed"><span id="sparklinedash4"></span></div>
                                                <div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500"><?php echo $row["dailyinv"] ?></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="masonry-item col-md-6">
                            <div class="bd bgc-white">
                                <div class="layers">
                                    <div class="layer w-100 pX-20 pT-20">
                                        <h6 class="lh-1">Monthly Stats</h6>
                                    </div>
                                    <div class="layer w-100 p-20"><canvas id="line-chart" height="220"></canvas></div>
                                    <div class="layer bdT p-20 w-100">
                                        <div class="peers ai-c jc-c gapX-20">
                                            <div class="peer"><span class="fsz-def fw-600 mR-10 c-grey-800">10% <i class="fa fa-level-up c-green-500"></i></span> <small class="c-grey-500 fw-600">APPL</small></div>
                                            <div class="peer fw-600"><span class="fsz-def fw-600 mR-10 c-grey-800">2% <i class="fa fa-level-down c-red-500"></i></span> <small class="c-grey-500 fw-600">Average</small></div>
                                            <div class="peer fw-600"><span class="fsz-def fw-600 mR-10 c-grey-800">15% <i class="fa fa-level-up c-green-500"></i></span> <small class="c-grey-500 fw-600">Sales</small></div>
                                            <div class="peer fw-600"><span class="fsz-def fw-600 mR-10 c-grey-800">8% <i class="fa fa-level-down c-red-500"></i></span> <small class="c-grey-500 fw-600">Profit</small></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <div class="masonry-item col-md-12">
                            <div class="bd bgc-white">
                                <div class="layers">
                                    <div class="layer w-100">
                                        <div class="bgc-light-blue-500 c-white p-20">
                                            <div class="peers ai-c jc-sb gap-40">
                                                <div class="peer peer-greed">
                                                    <h5><?php echo date('F, Y');?></h5>
                                                    <p class="mB-0">Recent Records</p>
                                                </div>
                                                <div class="peer">
                                                    <h3 class="text-right">AED <?php echo $row["income"] ?></h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive p-20">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="bdwT-0">Car Model</th>
                                                        <th class="bdwT-0">Status</th>
                                                        <th class="bdwT-0">Date</th>
                                                        <th class="bdwT-0">Price (AED)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                <?php
                                                    include 'php/showtable.php';
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
        </main>
    </div>
    </div>
    <?php include'php/footer.php'?>
    </body>

</html>