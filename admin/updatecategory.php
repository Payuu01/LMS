
<?php
require('connect.php');
//print_r($_POST);
$categoryname = $_POST['uname'];
$categorydesc = $_POST['udesc'];

$categorystatus = $_POST['ustatus'];


if(!empty($_FILES["myfile"]["name"])){
	$target_dir = "upload/";
   $target_file = $target_dir . basename($_FILES["myfile"]["name"]);

	$filename=$_FILES["myfile"]["name"];

	move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);
}
else{

$filename = $_POST['usrimg'];
}

$categoryid = $_POST['uid'];
$sql = "update category_tbl set m_category_title='$categoryname', m_category_desc='$categorydesc',  m_category_img='$filename',m_category_status='$categorystatus' where m_category_id='$categoryid'";

mysql_query($sql, $con);
//echo $sql;
header('location:category.php');
?>