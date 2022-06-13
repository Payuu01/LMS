
<?php
require('connect.php');
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

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["myfile"]["name"]);
$filename = $_FILES["myfile"]["name"];
move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);


$sql = "insert into student_tbl (m_student_name,m_student_phone,m_student_email,m_student_password,
m_student_dob,m_student_gender,m_student_img,m_student_state,m_student_city,m_student_addedon,m_student_status) values('$studentname','$studentphone','$studentemail','$studentpass','$studentdob','$studentgender','$filename','$studentstate','$studentcity','$studentaddedon','$studentstatus')";
//echo $sql;
mysql_query($sql, $con);

header('location:students.php');
?>