<?php
    session_start();
    include("condb.php");
    $type_id = $_GET['type_id'];
    $sql = "SELECT * FROM tbl_product WHERE type_id= $type_id ORDER BY p_id DESC";
    // echo($sql);
    // exit();
    $result = mysqli_query($con, $sql);
    while($row_pro = mysqli_fetch_array($result)){
    //echo $query;
?>


        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                <img class="img-fluid w-100" <?php echo"<img src='../p_img/".$row_pro['p_img']."''>";?>
             </div>
            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                <h6 class="text-truncate mb-3"><?php echo $row_pro['p_name']?></h6>
                <div class="d-flex justify-content-center">
                    <h6 class="text-truncate mb-3"><?php echo $row_pro['p_price']?> บาท</h6>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="detail.php?id=<?php echo $row_pro['p_id']?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                <a href="cart.php?p_id=<?php echo $row_pro['p_id']?>&act=add" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </div>
            </div>
        </div>
    <?php }?>
    