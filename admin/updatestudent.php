
<?php
require('connect.php');
print_r($_POST);
$studentname = $_POST['uname'];
$studentphone = $_POST['uphone'];
$studentemail = $_POST['uemail'];
$studentpass = $_POST['upass'];
$studentdob = $_POST['udob'];
$studentgender = $_POST['ugender'];
$studentstate = $_POST['ustate'];
$studentcity = $_POST['ucity'];
$studentaddedon = $_POST['uadd'];
$studentstatus = $_POST['ustatus'];
print_r($_FILES);

$studentid = $_POST['uid'];

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
$sql = "update student_tbl set m_student_name='$studentname',m_student_phone='$studentphone',m_student_email='$studentemail',m_student_password='$studentpass',m_student_dob='$studentdob',m_student_gender='$studentgender',m_student_img='$filename',m_student_state='$studentstate',m_student_city='$studentcity',m_student_addedon='$uadd' where m_student_id='$studentid'";

mysql_query($sql, $con);
//echo $sql;
header('location:students.php');
?>