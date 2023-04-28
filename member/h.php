
<?php include('../condb.php');
 $member_id = $_SESSION['member_id'];
 $m_name = $_SESSION['m_name'];
 $m_level = $_SESSION['m_level'];
 $m_img = $_SESSION['m_img'];
 if($m_level!='member'){
 Header("Location: ../logout.php");
 }
 $sql = "SELECT * FROM tbl_member WHERE member_id=$member_id";
 $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
 $row = mysqli_fetch_array($result);
 extract($row);
 $m_name = $row['m_name'];
 $m_img = $row['m_img'];


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cartoonrodfi</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/custome.css">
  </head>
