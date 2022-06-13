
<?php
require('connect.php');
//print_r($_POST);echo"<br><br>";
//print_r($_FILES);echo"<br><br>";

$coursename = $_POST['uname'];
$coursedesc = $_POST['udesc'];
$coursecategory = $_POST['ucat'];
$coursesubcategory = $_POST['usubcat'];
$courseduration = $_POST['uduration'];
$coursefees = $_POST['ufees'];
$courseofferfees = $_POST['uofees'];
$courselang= $_POST['ulang'];
$courselastupdate = date('Y-m-d h:i:s');
$courseorder = $_POST['uorder'];
$coursefees = $_POST['ufees'];
$coursestatus = $_POST['ustatus'];
$courseid = $_POST['uid'];

if(!empty($_FILES["myfile"]["name"])){
	$target_dir = "upload/";
   $target_file = $target_dir . basename($_FILES["myfile"]["name"]);

	$filename=$_FILES["myfile"]["name"];

	move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);
}
else{

$filename = $_POST['usrimg'];
}

if(!empty($_FILES["uimg"]["name"])){
	$target_dir1 = "upload/";
   $target_file1 = $target_dir1 . basename($_FILES["uimg"]["name"]);

	$filename1 = $_FILES["uimg"]["name"];

	move_uploaded_file($_FILES["uimg"]["tmp_name"], $target_file1);
}
else{

$filename1 = $_POST['uimgs'];
}

$categoryid = $_POST['uid'];

$categoryid = $_POST['uid'];

$sql = "update courses_tbl set m_course_title='$coursename', m_course_desc='$coursedesc',m_course_banner='$filename1',m_course_img='$filename',m_course_category='$coursecategory',m_course_subcategory='$coursesubcategory',m_course_duration='$courseduration',m_course_fees='$coursefees',m_course_offerfees='$courseofferfees',m_course_language='$courselang',m_course_lastupdated='$courselastupdate',m_course_order='$courseorder', m_course_status='$coursestatus' where m_course_id='$courseid'";

mysql_query($sql, $con);
//echo $sql;
header('location:courses.php');
?>