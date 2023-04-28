<?php 
 if(@$_GET['do']=='success'){
    echo '<script type="text/javascript">
          swal("", "ทำรายการสำเร็จ !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=product.php" />';

  }else if(@$_GET['do']=='finish'){
    echo '<script type="text/javascript">
          swal("", "แก้ไขสำเร็จ !!", "success");
          </script>';
    echo '<meta http-equiv="refresh" content="1;url=product.php" />';
  }

  $query = "SELECT * FROM tbl_oder INNER JOIN tbl_order_detail ON tbl_oder.order_id = tbl_order_detail.order_id" or die("Error:" . mysqli_error());
  $result = mysqli_query($con, $query);
echo ' <table id="example1" class="table table-bordered table-striped">';
  echo "<thead>";
    echo "<tr class=''>
        <th width='3%'  class='hidden-xs'>ID</th>
        <th width='20%'>ชื่อลูกค้า</th>
        <th width='10%' class='hidden-xs'>จำนวน</th>
        <th>ราคาสินค้า</th>
        <th>วันที่ทำรายการ</th>
        <th width='5%'>รหัสพัสดุ</th>
        <th width='5%'>เปิด</th>
    </tr>";
  echo "</thead>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td  class='hidden-xs'>" .$row["order_id"] .  "</td> ";
    echo "<td class='hidden-xs'>" .$row["name"] .  "</td>";
    echo "<td class='hidden-xs'>" .$row["p_c_qty"] .  "</td>";
    echo "<td class='hidden-xs'>" .$row["total"] .  "</td>";
    echo "<td class='hidden-xs'>" .$row["oder_datre"] .  "</td>";
    echo "<td class='hidden-xs'>" .$row["postcode"] .  "</td>";
    echo "<td> <a href='pay.php?act=show&ID=$row[order_id]' class='btn btn-danger btn-xs'>เปิด</a></td>";
  }
echo "</table>";
mysqli_close($con);
?>