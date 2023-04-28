<?php include('h.php');?>
<body class="hold-transition skin-purple sidebar-mini">
  <div class="wrapper">
    <!-- Main Header -->
    <?php include('menutop.php');?>
        <?php include('menu_l.php');?>
    <div class="content-wrapper">
 
      <section class="content-header">
      <h1>       
        <i class="glyphicon glyphicon-edit hidden-xs"></i> <span class="hidden-xs">รายการสั่งซื้อสินค้า</span>
        <a href="pay.php?act=show-payed" class="btn btn-success btn-xs"> ชำระเงินแล้ว </a> |
        <a href="pay.php?act=show-post" class="btn btn-primary btn-xs"> ส่งของแล้ว </a>
        </h1>
      </section>
      <br>
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="row">
                <div class="col-sm-12">
                  <div class="box-body">
                    <?php
                    $act = (isset($_GET['act']) ? $_GET['act'] : '');
                    if($act == 'show'){
                        include('order.php');
                    }elseif ($act == 'show-payed') {
                      include('order_list.php');
                    }elseif ($act == 'show-post') {
                      include('order_show.php');
                  }else {
                        include('order_list.php');
                    }
                  ?>                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </body>
  </html>
  <?php include('footerjs.php');?>



