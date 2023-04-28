<meta charset="UTF-8" />
<?php
  include('../condb.php');
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting( error_reporting() & ~E_NOTICE );
 

$postcode = $_POST['postcode'];
$order_id = $_POST['order_id'];
$oder_status = $_POST['oder_status'];

 
$sql ="UPDATE tbl_oder SET	 
		postcode='$postcode',
		oder_status='$oder_status'
		WHERE order_id=$order_id
	 ";
			
		$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	
// 	mysqli_close($con);
//  echo $sql;
// exit();
	
		if($result){
			echo "<script>";
			echo "alert('เพิ่มเลขพัสดุเรียบร้อย !');";
			echo "window.location ='index.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='index.php'; ";
			echo "</script>";
		}
		


?>