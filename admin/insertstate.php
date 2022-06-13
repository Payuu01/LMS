
<?php
require('connect.php');
$statename = $_POST['uname'];
$statecountry = $_POST['ucountry'];
$statestatus = $_POST['ustatus'];

$sql = "insert into state_tbl (m_state_title,m_state_country,m_state_status) values('$statename','$statecountry','$statestatus')";
//echo $sql;
mysql_query($sql, $con);

header('location:states.php');
?>