<?php
require('connect.php');
  $userid = $_GET['user'];

  $sql = "delete from category_tbl where m_category_id='$userid'";
  mysql_query($sql, $con);

   header('location:category.php');
?>