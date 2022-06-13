<?php
require('connect.php');
  $userid = $_GET['user'];

  $sql = "delete from city_tbl where m_city_id='$userid'";
  mysql_query($sql, $con);

   header('location:city.php');
?>