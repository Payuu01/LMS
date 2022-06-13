<?php
//mysql_connect("localhost","root"," ");
$host = "localhost";
$user="root";
$pass="";
$con = mysql_connect($host, $user, $pass);
if($con){
   // echo"connect sussessfully";
    mysql_select_db('lms_db');
}else{
    echo"some problem occured ";
}
 
?>