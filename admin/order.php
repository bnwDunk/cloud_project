<?php 

  $ID = mysqli_real_escape_string($con,$_GET['ID']);
  $query = "SELECT * FROM tbl_oder INNER JOIN tbl_order_detail ON tbl_oder.order_id = tbl_order_detail.order_id WHERE tbl_order_detail.order_id=$ID" or die("Error:" . mysqli_error());
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_array($result);
?>



  <div class="col-md-12">
    <div class="col-sm-2 control-label">
      รหัสสั้งซื้อ :
    </div>
    <div class="col-sm-3">
      <?php echo $row['order_id'];?>
    </div>
  </div>
  <div class="col-md-12">
    <div class="col-sm-2 control-label">
      ชื่อสินค้า :
    </div>
    <div class="col-sm-3">
      <?php echo $row['p_name'];?>
    </div>
  </div>
  <div class="col-md-12">
    <div class="col-sm-2 control-label">
      ชื่อลูกค้า :
    </div>
    <div class="col-sm-3"> 
      <?php echo $row['name'];?>
    </div>
  </div>
  <div class="col-md-12">
    <div class="col-sm-2 control-label">
      อีเมล์ :
    </div>
    <div class="col-sm-3">
      <?php echo $row['email'];?>
    </div>
  </div>
    <div class="col-md-12">
    <div class="col-sm-2 control-label">
      ที่อยู่ :
    </div>
    <div class="col-sm-3">
      <?php echo $row['address'];?>
    </div>
  </div>
  <div class="col-md-12">
    <div class="col-sm-2 control-label">
      ราคารวม :
    </div>
    <div class="col-sm-3">
      <?php echo $row['total'];?>
    </div>
  </div>
  <div class="col-md-12">
    <div class="col-sm-2 control-label">
      สลิปโอนเงิน :
    </div>
    <div class="col-sm-3">
      <?php echo "<img src='../pay_slip/".$row['pay_slip']."' width='100%'>"?>
    </div>
  </div>
  
  <form id="form1" name="form1" method="post" action="add_postcode_db.php">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="11%">เลขพัสดุ</td>
            <td width="42%">
              <input name="postcode" type="text" id="postcode" size="40"  value="<?php echo $row['postcode'];?>" required="required">
              <input name="order_id" type="hidden" id="order_id" value="<?php echo $row['order_id'];?>" />
              <input name="oder_status" type="hidden" id="oder_status" value="3" /></td>
              <td width="47%">
                <input type="submit" name="button" id="button" class="btn btn-primary" value="บันทึก" />
              </td>
            </tr>
          </table>
        </form>
