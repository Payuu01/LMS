<?php
require('connect.php');
  $userid = $_GET['user'];

  $sql = "delete from subcategory_tbl where m_subcategory_id='$userid'";
  mysql_query($sql, $con);

   header('location:subcategory.php');
?>