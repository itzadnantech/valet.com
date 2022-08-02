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
                                <h5 class="bgc-light-blue-500 c-white p-20"><?php
                                                    if ( $_SESSION["role"]==101) {
                                                    echo "Checkout";
                                                    }
                                                    else if ( $_SESSION["role"]==110) {
                                                    echo "Request";
                                                    }
                                                    ?> Form</h5>
                                <div class="mT-30">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <?php if($_SESSION["role"]==101){ ?>
                                                  <div class="form-row">
                                                        <div class="form-group col-md-12"><label for="checkout_type">Select action</label>
                                                            <select id="checkout_type" name="checkout_type" class="form-control">
                                                               <option value="checkout_form" selected>Request Checkout</option>
                                                               <option value="c_checkout_form">Checkout</option>
                                                            </select>
                                                         </div>
  
                                                    </div> 
                                                    <?php } ?>

                                                <form method="post" action="php/engine.php" id="<?php if($_SESSION["role"]==101){
                                                    echo "checkout_form";
                                                    }else if($_SESSION["role"]==110){echo "onway_form";}?>">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12"><label for="get_ticket_no">Ticket No.</label>
                                                            <select id="get_ticket_no" name="get_ticket_no" class="form-control" style="width:100%;" required>
                                                                <option value="">Select</option>
                                                                <?php
                                                                include 'php/load_tickets.php';
                                                                ?>
                                                            </select>
                                                             </div>
  
                                                    </div>
                                                    
                                                     <?php
                                                    if ( $_SESSION["role"]==101) {
                                                    ?>
                                                    
                                                    
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label for="cashier_name">Cashier Name</label>
                                                            <input type="text" class="form-control" id="cashier_name" name="cashier_name" placeholder="Enter cashier name" required>
                                                        </div> 
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label for="t_amount">Total Amount</label>
                                                            <input id="t_amount" name="t_amount" type="text" class="form-control" value="0" readonly="readonly" />

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label name="status" id="status"></label>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary" name="checkout" id="checkout"></button>
                                                
                                                    <?php
                                                    }
                                                    ?>
                                                    
                                                    <?php
                                                    if ( $_SESSION["role"]==110) {
                                                    ?>
                                                    <div class="form-group">
                                                        <label name="status" id="status"></label>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary" name="Onway" id="onway">On the Way</button>
                                                
                                                    <?php
                                                    }
                                                    ?>
                                                    </form>
                                                
                                                
                                                <form method="post" action="php/engine.php" id="c_checkout_form" style="display:none">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12"><label for="get_c_ticket_no">Ticket No.</label>
                                                            <select id="get_c_ticket_no" name="get_c_ticket_no" class="form-control" style="width:100%;" required>
                                                                <option value="">Select</option>
                                                                <?php
                                                                include 'php/load_tickets.php';
                                                                ?>
                                                            </select>
                                                         </div>
  
                                                    </div>
                                                    <div class="form-group">
                                                        <label name="c_status" id="c_status"></label>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary" name="c_checkout" id="c_checkout">Check Out</button>
                                                
                                                    </form>
                                            </div>
                                            <div class="col-md-8">
                                                
                            <div class="bd bgc-white">
                                <div class="layers">
                                    <div class="layer w-100">
                                        <div class="bgc-light-blue-500 c-white p-20">
                                            <div class="peers ai-c jc-sb gap-40">
                                                <div class="peer peer-greed">
                                                    <h5>Recent Activities</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive p-20">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="bdwT-0">Ticket No.</th>
                                                        <th class="bdwT-0">Time in</th>
                                                        <th class="bdwT-0">Car Model</th>
                                                        <th class="bdwT-0">Plate No.</th>
                                                        <th class="bdwT-0">Status</th>
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
    <script>
    $('#checkout_type').on('change', function() {
    var val = $(this).val();
    $('#c_checkout_form').hide();
    $('#checkout_form').hide();
    $('#' + val).show();
    });
    </script>
</body>

</html>