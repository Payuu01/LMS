
<?php
require('connect.php');
$username = $_POST['uname'];
$useremail = $_POST['uemail'];
$userpass = $_POST['upassword'];

$sql = "insert into user_tbl (m_user_name,m_user_email,m_user_pass) values('$username','$useremail','$userpass')";
//echo $sql;
mysql_query($sql, $con);

header('location:enroll.php');
?>