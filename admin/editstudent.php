<?php
  require('connect.php');
  $userid = $_GET['user'];

  $sql = "select * from student_tbl where m_student_id = '$userid'";
  $res = mysql_query($sql, $con);

  $usr = mysql_fetch_assoc($res);

?>

<?php include('top_header.php');?>
<body class="cbp-spmenu-push">
    <div class="main-content">
    <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        <!--left-fixed -navigation-->
        <?php include('sidebar.php');?>

        <!--left-fixed -navigation-->
        
        <!-- header-starts -->
         <?php include('header.php');?>

        <!-- //header-ends -->
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="tables">
                    <h2 class="title1">Edit record <span class="pull-right">
                        <a href="students.php" class="btn btn-info">All Students</a></span></h2>
                    <div class="panel-body widget-shadow">
                     <form method="post" action="updatestudent.php">
                        <div class="row">
                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Student Name</label>
                                          <input type="text" class="form-control" name="uname" value="<?php echo $usr['m_student_name']?>">
                               </div>
                            </div>
                            <input type="hidden" name="uid" value="<?php echo $usr['m_student_id'] ?>">


                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>
                                        Phone Number
                                    </label>
                                          <input type="number" class="form-control" name="uphone"value="<?php echo $usr['m_student_phone']?>">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>E-mail</label>
                                          <input type="email" class="form-control" name="uemail"value="<?php echo $usr['m_student_email']?>">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Password</label>
                                          <input type="text" class="form-control" name="upass"value="<?php echo $usr['m_student_password']?>">
                               </div>
                            </div>



                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>DOB</label>
                                          <input type="text" class="form-control" name="udob"value="<?php echo $usr['m_student_dob']?>">
                               </div>
                            </div>

                           <div class="col-md-4">
                               <div class="form-group">
                                    <label> Gender: </label>
                                         
                                          <input type="radio" name="ugender" value="Male">Male<br>
                                          <input type="radio"  name="ugender" value="feMale">Female<br>
                                           <input type="radio" name="ugender" value="other">other<br>
    
                               </div>
                            </div>


                            <div class="col-md-4">
                               <div class="form-group">
                                    <label> Image</label>
                                          <input type="file" class="form-control" name="myfile" >
                                          <input type="hidden" name="usrimg" value="<?php echo $usr['m_student_img']?>" >
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>State</label>
                                          <input type="text" class="form-control" name="ustate"value="<?php echo $usr['m_student_state']?>">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>City</label>
                                          <input type="text" class="form-control" name="ucity"value="<?php echo $usr['m_student_email']?>">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Addedon</label>
                                          <input type="date" class="form-control" name="uadd"value="<?php echo $usr['m_student_addedon']?>">
                               </div>
                            </div>

       


                             <div class="col-md-4">
                               <div class="form-group">
                                    <label>Status</label>
                                
                                       <?php $st = $usr['m_student_status']; ?>
                                               <select name="ustatus" class="form-control">
                                                <option value="1" <?php if($st == 1){echo'selected';} ?>>Active</option>
                                                 <option value="0" <?php if($st == 0){echo'selected';} ?>>In-Active</option>
                                         </select>
                               </div>
                            </div>
                        </div>

                             
                             <center><input type="submit" class="btn btn-primary" value="Upload"></center>
                           </form>

                    </div>

               </div>
           </div>
        </div>

    </div>    
                        
                       <!--footer-->
    <?php include('footer.php');?>
      <!--//footer-->
    </div>
        
    <?php include('top_footer.php');?>                 
</body>
</html>
