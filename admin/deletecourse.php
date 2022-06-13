<?php
require('connect.php');
  $userid = $_GET['user'];

  $sql = "delete from courses_tbl where m_course_id='$userid'";
  mysql_query($sql, $con);

   header('location:courses.php');
?>