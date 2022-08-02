<?php
    $manage_users=1;
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
                                <h5 class="bgc-light-blue-500 c-white p-20">Manage/Add users form</h5>
                                <div class="mT-30">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <form method="post" action="php/engine.php" id="user_form">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12"><label for="user_email">User Email</label>
                                                            <input type="text" class="form-control" id="user_email" name="user_email" placeholder="Enter user email" required>
                                                        </div>
                                                    </div>
                                                    
                                                     <div class="form-row">
                                                        <div class="form-group col-md-12"><label for="user_name">User Name</label>
                                                            <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter user name" required>
                                                        </div>
                                                    </div>
                                                     <div class="form-row">
                                                        <div class="form-group col-md-12"><label for="user_password">User Password</label>
                                                            <input type="text" class="form-control" id="user_password" name="user_password" placeholder="Enter user password" required>
                                                        </div>
  
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="user_role">User Role</label>
                                                        <select id="user_role" name="user_role" class="form-control" style="width:100%;" required>
                                                            <option value="">Select</option>
                                                            <option value="110">
                                                                Manager </option>
                                                            <option value="111">
                                                                Key controller </option>
                                                            <option value="112">
                                                                Shop point </option>
                                                            <option value="113">
                                                                Gate man </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label name="status" id="status"></label>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary" name="add_user" id="add_user" >Add user</button>
                                                </form>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="bd bgc-white">
                                                    <div class="layers">
                                                        <div class="layer w-100">
                                                            <div class="bgc-light-blue-500 c-white p-20">
                                                                <div class="peers ai-c jc-sb gap-40">
                                                                    <div class="peer peer-greed">
                                                                        <h5>Existing users</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="table-responsive p-20">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="bdwT-0">Name</th>
                                                                            <th class="bdwT-0">Email</th>
                                                                            <th class="bdwT-0">Role</th>
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