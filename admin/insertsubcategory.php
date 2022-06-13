
<?php
require('connect.php');
$subcategoryname = $_POST['uname'];
$subcategorydesc = $_POST['udesc'];
$subcategorystatus = $_POST['ustatus'];
$subcategorycat = $_POST['ucat'];

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["myfile"]["name"]);
$filename = $_FILES["myfile"]["name"];
move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);


$sql = "insert into subcategory_tbl (m_subcategory_title,m_subcategory_desc,m_subcategory_img,m_subcategory_status,m_subcategory_category) values('$subcategoryname','$subcategorydesc','$filename','$subcategorystatus','$subcategorycat')";
//echo $sql;
mysql_query($sql, $con);

header('location:subcategory.php');
?>