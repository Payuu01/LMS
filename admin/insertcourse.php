<?php
require('connect.php');
$coursename = $_POST['uname'];
$coursedesc = $_POST['udesc'];
$coursecategory = $_POST['ucat'];
$coursesubcategory = $_POST['usubcat'];
$courseduration = $_POST['uduration'];
$coursefees = $_POST['ufees'];
$courseofferfees = $_POST['uofees'];
$courselang= $_POST['ulang'];
$courselastupdate = $_POST['ulastupdate'];
$courseorder = $_POST['uorder'];
$coursestatus = $_POST['ustatus'];

print_r($_FILES);

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["myfile"]["name"]);
$filename = $_FILES["myfile"]["name"];
move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);

$target_dir1 = "upload/";
$target_file1 = $target_dir1 . basename($_FILES["uimg"]["name"]);
$filename1 = $_FILES["uimg"]["name"];
move_uploaded_file($_FILES["uimg"]["tmp_name"], $target_file1);


$sql = "insert into courses_tbl (m_course_title,m_course_desc,m_course_banner,m_course_img,m_course_category,m_course_subcategory,m_course_duration,m_course_fees,m_course_offerfees,m_course_language,m_course_lastupdated,m_course_order,m_course_status) values('$coursename','$coursedesc','$filename','$filename1','$coursecategory','$coursesubcategory','$courseduration','$coursefees','$courseofferfees','$courselang','$courselastupdate','$courseorder','$coursestatus')";
//echo $sql;
mysql_query($sql, $con);

header('location:courses.php');
?>