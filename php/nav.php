
<div id="loader">
    <div class="spinner"></div>
</div>
<script type="529210a053eec5510ffebb9c-text/javascript">
    window.addEventListener('load', () => {
        const loader = document.getElementById('loader');
        setTimeout(() => {
            loader.classList.add('fadeOut');
        }, 300);
    });
</script>
<div class="sidebar">
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
                <div class="peer peer-greed"><a class="sidebar-link td-n" href="index.php" class="td-n">
                        <div class="peers ai-c fxw-nw">
                            <div class="peer">
                                <div class="logo"><img src="img/favicon.png" alt=""></div>
                            </div>
                            <div class="peer peer-greed">
                                <h5 class="lh-1 mB-0 logo-text">Valet Parking</h5>
                            </div>
                        </div>
                    </a></div>
                <div class="peer">
                    <div class="mobile-toggle sidebar-toggle"><a href="#" class="td-n"><i class="ti-arrow-circle-left"></i></a></div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu scrollable pos-r">
            <li class="nav-item mT-30 active"><a class="sidebar-link" href="index.php" default><span class="icon-holder"><i class="c-blue-500 ti-home"></i> </span>
                    <span class="title">Dashboard</span></a>
            </li>
            <?php
            if ( $_SESSION["role"]==101 ) {
            ?>
            
            <li class="nav-item"><a class="sidebar-link" href="checkin.php">
                    <span class="icon-holder"><i class="c-brown-500 ti-email"></i> </span>
                    <span class="title">Check In</span></a>
            </li>
            <li class="nav-item">
                <a class="sidebar-link" href="checkout.php">
                    <span class="icon-holder"><i class="c-blue-500 ti-share"></i> </span>
                    <span class="title">Check Out</span></a>
            </li>
            <?php
            }
            else if($_SESSION["role"]==111){
            ?>
            
            <li class="nav-item">
                <a class="sidebar-link" href="checkout.php">
                    <span class="icon-holder"><i class="c-blue-500 ti-share"></i> </span>
                    <span class="title">Requested</span></a>
            </li>
            <?php
            }
            ?>
            <?php
            if ( $_SESSION["role"]==101 ) {
            ?>
            <li class="nav-item"><a class="sidebar-link" href="add_driver.php">
                    <span class="icon-holder"><i class="c-deep-orange-500 ti-calendar"></i> </span>
                    <span class="title">Add Drivers</span></a>
            </li>
            <li class="nav-item"><a class="sidebar-link" href="manage_users.php">
                    <span class="icon-holder"><i class="c-deep-purple-500 ti-comment-alt"></i> </span>
                    <span class="title">Manage Users</span></a>
            </li>
            <li class="nav-item"><a class="sidebar-link" href="add_location.php">
                    <span class="icon-holder"><i class="c-light-blue-500 ti-pencil"></i> </span>
                    <span class="title">Add Location</span></a>
            </li>
            <li class="nav-item"><a class="sidebar-link" href="shift_timings.php">
                <span class="icon-holder"><i class="c-pink-500 ti-palette"></i> </span>
                    <span class="title">Shift Timings</span></a>
            </li>
            <li class="nav-item"><a class="sidebar-link" href="rate_plan.php">
                <span class="icon-holder"><i class="c-orange-500 ti-layout-list-thumb"></i> </span>
                    <span class="title">Rate Plan</span></a>
            </li>
            
            <?php
            }
            ?>
            
            <li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-purple-500 ti-map"></i> </span>
                    <span class="title">Reports</span> <span class="arrow"><i class="ti-angle-right">
                </i></span></a>
                <ul class="dropdown-menu">
                    <li class="nav-item dropdown"><a href="master_report.php"><span>Master Report</span></a></li>
                    <li><a class="sidebar-link" href="inventoryreport.php">Inventory Report</a></li>
                    <li><a class="sidebar-link" href="cashcollection.php">Cash Collection</a></li>
                    <!--<li><a class="sidebar-link" href="datatable.php">Monthly Operation</a></li>-->
                    <li><a class="sidebar-link" href="dailycheckin.php">Daily Check In</a></li>
                    <li><a class="sidebar-link" href="dailycheckout.php">Daily Check Out</a></li>
                </ul>
            </li>
            <!--
            <li class="nav-item"><a class="sidebar-link" href="signin.php">
                <span class="icon-holder"><i class="c-orange-500 ti-layout-list-thumb"></i> </span>
                    <span class="title">Log Out</span></a>
            </li>-->
        </ul>
    </div>
</div>