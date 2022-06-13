<?php
require('connect.php');
  $userid = $_GET['user'];

  $sql = "delete from student_tbl where m_student_id='$userid'";
  mysql_query($sql, $con);

   header('location:students.php');
?>