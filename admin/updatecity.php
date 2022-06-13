
<?php
require('connect.php');
print_r($_POST);
$cityname = $_POST['uname'];
$citystate = $_POST['ustate'];
$citystatus = $_POST['ustatus'];
$cityid = $_POST['uid'];
$sql = "update city_tbl set m_city_title='$cityname', m_city_state='$citystate', m_city_status='$citystatus' where m_city_id='$cityid'";

mysql_query($sql, $con);
//echo $sql;
header('location:city.php');
?>