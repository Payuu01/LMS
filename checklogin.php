<?php
session_start();
 require('connect.php');
 session_start(); 

$email=$_POST['uemail'];
$password=$_POST['upassword'];

$sql="select * from user_tbl where m_user_email='$email' and m_user_pass='$password'";
$res=mysql_query($sql,$con);
$numrows = mysql_num_rows($res);
echo $numrows;

if($numrows>=1){
	$data = mysql_fetch_assoc($res);
    $_SESSION['m_user_id']=$data['m_user_id'];
    $_SESSION['m_user_name']=$data['m_user_name'];
     $_SESSION['user_login']=1;
     header('location:index.php');
}
 else{
 	header('location:login.php?error=1');
 }

?>
