<?php
$checkout=1;
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
                                <h5 class="bgc-light-blue-500 c-white p-20">Change Password Form</h5>
                                <div class="mT-30">
                                        <div class="row">
                                            <div class="col-md-4">

                                                <form method="post" action="php/engine.php" id="changepassword_form">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12"><label for="oldpassword">Old password</label>
                                                            <input type="password" class="form-control" id="oldpassword" name="oldpassword" placeholder="Enter old password" required>

                                                        </div>
  
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label for="new_password">New password</label>
                                                            <input id="new_password" name="new_password" type="password" class="form-control" placeholder="Enter new password (8 characters minimum)" required/>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label for="r_new_password">Retype new password</label>
                                                            <input id="r_new_password" name="r_new_password" type="password" class="form-control" placeholder="Retype new password" required/>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="form-group">
                                                        <label name="status" id="status"></label>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary" name="p_save" id="p_save" disabled>Save password</button>
                                                
                                                    </form>
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
<script>


    </script>
</html>