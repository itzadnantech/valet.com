        <?php
        session_start();
         if(isset($_SESSION["email"])&&isset($_SESSION["name"])&&isset($_SESSION["role"])){
            session_unset();
            session_destroy();
            session_write_close();
            setcookie(session_name(),'',0,'/');
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
            </div>
        </div>
        <div class="page-container">
            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <div class="row gap-20 masonry pos-r">
                        <div class="masonry-sizer col-md-6"></div>
                        <div class="masonry-item col-md-10">
                            <div class="bgc-white p-20 bd">
                                <h5 class="bgc-light-blue-500 c-white p-20">Login</h5>
                                <div class="mT-30">
                                    <form method="post" action="php/engine.php" id="login_form">
                                        <div class="form-group">
                                            <label class="text-normal text-dark" for="email">Email</label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-normal text-dark" for="password" >Password</label>
                                            <input type="password" class="form-control" placeholder="Enter your password" id="password" name="password">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label name="status" id="status"></label>
                                        </div>
                                        <div class="form-group">
                                            <div class="peers ai-c jc-sb fxw-nw">
                                                <div class="peer">
                                                    <!--<div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                                        <input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
                                                        <label for="inputCall1" class="peers peer-greed js-sb ai-c">
                                                            <span class="peer peer-greed">Remember Me</span>
                                                        </label>
                                                    </div>-->
                                                    <p>-</p>
                                                    <button type="submit" class="btn btn-primary" id="login" name="login">Login</button>
                                                </div>
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