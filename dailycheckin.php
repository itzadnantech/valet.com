<?php
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
        
        <?php
        include 'php/nav.php';
        ?>
        
        <div class="page-container">
            <?php
            include 'php/header.php';
            include 'php/checkin_graph.php';
            ?>
            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <div class="row gap-20 masonry pos-r">
                        <div class="masonry-sizer col-md-6"></div>
                        <div class="masonry-item col-md-12">
                            <div class="bgc-white p-20 bd">
                                <h5 class="bgc-light-blue-500 c-white p-20">Today's check-in count w.r.t hours</h5>
                                <div class="mT-30">     
                                 <div id="columnchart" style="height: 500px;width:80%;"></div>      
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    
<?php include'php/footer.php'?>
</body>

</html>