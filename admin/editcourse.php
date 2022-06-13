<?php
  require('connect.php');
  $userid = $_GET['user'];

  $sql = "select * from courses_tbl where m_course_id = '$userid'";
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
                        <a href="courses.php" class="btn btn-info">All Courses</a></span></h2>
                    <div class="panel-body widget-shadow">
                     <form method="post" action="updatecourse.php" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Course Name</label>
                                          <input type="text" class="form-control" name="uname" value="<?php echo $usr['m_course_title']?>">
                               </div>
                            </div>
                            <input type="hidden" name="uid" value="<?php echo $usr['m_course_id'] ?>">


                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Course Description</label>
                                          <input type="text" class="form-control" name="udesc"value="<?php echo $usr['m_course_desc']?>">
                               </div>
                            </div>

                             <div class="col-md-4">
                               <div class="form-group">
                                    <label> Course Banner</label>
                                          <input type="file" class="form-control" name="uimg" >
                                          <input type="hidden" name="uimgs" value="<?php echo $usr['m_course_banner']?>" >
                               </div>
                            </div>

                             <div class="col-md-4">
                               <div class="form-group">
                                    <label> Course Image</label>
                                          <input type="file" class="form-control" name="myfile" >
                                          <input type="hidden" name="usrimg" value="<?php echo $usr['m_course_img']?>" >
                               </div>
                            </div>



                             <div class="col-md-4">
                               <div class="form-group">
                                    <label>Category</label>
                                          <select name="ucat" class="form-control">
                                            <?php
                                              $res=mysql_query("select * from category_tbl");
                                              while($row=mysql_fetch_assoc($res))
                                              {
                                               ?>
                                              <option value="<?php echo $row["m_category_id"];?>"><?php echo $row["m_category_title"];?></option>

                                              <?php
                                               }
                                              ?>
                                                 
                                         </select>
                               </div>
                            </div>


                             <div class="col-md-4">
                               <div class="form-group">
                                    <label>Sub-Category</label>
                                          <select name="usubcat" class="form-control">
                                            <?php
                                              $res=mysql_query("select * from subcategory_tbl");
                                              while($row=mysql_fetch_assoc($res))
                                              {
                                               ?>
                                              <option><?php echo $row["m_subcategory_title"];?></option>

                                              <?php
                                               }
                                              ?>
                                                 
                                         </select>
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Course Duration</label>
                                          <input type="text" class="form-control" name="uduration" value="<?php echo $usr['m_course_duration']?>">
                               </div>
                            </div>

                        
                        

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Course fees</label>
                                          <input type="number" class="form-control" name="ufees"value="<?php echo $usr['m_course_fees']?>">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Course Offer-fees</label>
                                          <input type="number" class="form-control" name="uofees"value="<?php echo $usr['m_course_offerfees']?>">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Course Language</label>
                                          <input type="text" class="form-control" name="ulang"value="<?php echo $usr['m_course_language']?>">
                               </div>
                            </div>

                            

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Course Order</label>
                                          <input type="text" class="form-control" name="uorder" value="<?php echo $usr['m_course_order']?>">
                               </div>
                            </div>




                             <div class="col-md-4">
                               <div class="form-group">
                                    <label>Status</label>
                                
                                       <?php $st = $usr['m_course_status']; ?>
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
