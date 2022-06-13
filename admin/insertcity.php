
<?php
require('connect.php');
$cityname = $_POST['uname'];
$citystate = $_POST['ustate'];
$citystatus = $_POST['ustatus'];

$sql = "insert into city_tbl (m_city_title,m_city_state,m_city_status) values('$cityname','$citystate','$citystatus')";
//echo $sql;
mysql_query($sql, $con);

header('location:city.php');
?>