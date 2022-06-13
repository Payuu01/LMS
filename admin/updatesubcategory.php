
<?php
require('connect.php');
//print_r($_POST);
$subcategoryname = $_POST['uname'];
$subcategorydesc = $_POST['udesc'];

$subcategorystatus = $_POST['ustatus'];
$subcategorycat = $_POST['ucat'];
//print_r($_FILES);

$subid = $_POST['uid'];

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
$sql = "update subcategory_tbl set m_subcategory_title='$subcategoryname', m_subcategory_desc='$subcategorydesc',  m_category_img='$filename',m_subcategory_status='$subcategorystatus',m_subcategory_category='$subcategorycat' where m_subcategory_id='$subid'";

mysql_query($sql, $con);
//echo $sql;
header('location:subcategory.php');
?>