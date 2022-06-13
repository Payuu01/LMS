
<?php
require('connect.php');
print_r($_POST);
$statename = $_POST['uname'];
$statecountry = $_POST['ucountry'];
$statestatus = $_POST['ustatus'];
$stateid = $_POST['uid'];
$sql = "update state_tbl set m_state_title='$statename', m_state_country='$statecountry', m_state_status='$statestatus' where m_state_id='$stateid'";

mysql_query($sql, $con);
//echo $sql;
header('location:states.php');
?>