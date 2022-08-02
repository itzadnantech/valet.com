<?php
    $add_driver=1;
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
                                <h5 class="bgc-light-blue-500 c-white p-20">Add driver form</h5>
                                <div class="mT-30">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <form method="post" action="php/engine.php" id="driver_form">
                                                    
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label for="t_amount">Driver Email</label>
                                                        <input id="driver_email" name="driver_email" type="text" class="form-control" placeholder="Enter driver email" required/>

                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12"><label for="driver_name">Driver Name</label>
                                                            <input type="text" class="form-control" id="driver_name" name="driver_name" placeholder="Enter driver name" required>
                                                        </div>
  
                                                    </div>
                                                    <div class="form-group">
                                                        <label name="status" id="status"></label>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary" name="add_driver" id="add_driver" >Add driver</button>
                                                </form>
                                            </div>
                                            <div class="col-md-8">
                                                
                                                <div class="bd bgc-white">
                                                    <div class="layers">
                                                        <div class="layer w-100">
                                                            <div class="bgc-light-blue-500 c-white p-20">
                                                                <div class="peers ai-c jc-sb gap-40">
                                                                    <div class="peer peer-greed">
                                                                        <h5>Drivers</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="table-responsive p-20">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="bdwT-0">Name</th>
                                                                            <th class="bdwT-0">Email</th>
                                                                            <th class="bdwT-0">Date Added</th>
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