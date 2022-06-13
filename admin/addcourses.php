<?php include('top_header.php');
require('connect.php');
 $sql = "SELECT * from category_tbl where m_category_status='1'";
 $res = mysql_query($sql, $con);

 $sql2 = "select * from subcategory_tbl  where m_subcategory_status='1'";
 $res2 = mysql_query($sql2, $con);
?>
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
                    <h2 class="title1">Add Courses <span class="pull-right">
                        <a href="courses.php" class="btn btn-info">All Courses</a></span></h2>
                    <div class="panel-body widget-shadow">
                     <form method="post" action="insertcourse.php" enctype="multipart/form-data">
                     	<div class="row">
                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Course Name</label>
						                  <input type="text" class="form-control" name="uname">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label> Course Description</label>
						                  <input type="text" class="form-control" name="udesc">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label> Course Banner</label>
                                          <input type="file" class="form-control" name="uimg">
                               </div>
                            </div>


                            <div class="col-md-4">
                               <div class="form-group">
                                    <label> Course Image</label>
                                          <input type="file" class="form-control" name="myfile">
                               </div>
                            </div>


                            <div class="col-md-4">
                               <div class="form-group">
                                  <label> Course Category</label>
                                   <select class="form-control" name="ucat">
                                   <?php
                                   while($cat = mysql_fetch_assoc($res)) {
                                   echo"<option value='".$cat['m_category_id']."'>".$cat['m_category_title']."</option>";
                                   }
                                    ?>
                                  </select>
                               </div>
                            </div>

                             <div class="col-md-4">
                              <div class="form-group">
                                    <label> Course Sub-Category</label>
                                            
                                          <select class="form-control" name="usubcat">
                        <?php
                        while($subcat = mysql_fetch_assoc($res2)) {
                         echo"<option value='".$subcat['m_subcategory_id']."'>".$subcat['m_subcategory_title']."</option>";
                        }
                        ?>
                    </select>
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label> Course Duration</label>
                                          <input type="text" class="form-control" name="uduration">
                               </div>
                            </div>



                           <div class="col-md-4">
                               <div class="form-group">
                                    <label> Course Fees</label>
                                          <input type="text" class="form-control" name="ufees">
                               </div>
                            </div>

                             <div class="col-md-4">
                               <div class="form-group">
                                    <label> Offer Fees</label>
                                          <input type="text" class="form-control" name="uofees">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label> Course Language</label>
                                          <input type="text" class="form-control" name="ulang">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label> Course Lastupdate</label>
                                          <input type="text" class="form-control" name="ulastupdate">
                               </div>
                            </div>


                             <div class="col-md-4">
                               <div class="form-group">
                                    <label> Course Order</label>
                                          <input type="text" class="form-control" name="uorder">
                               </div>
                            </div>


                             <div class="col-md-4">
                               <div class="form-group">
                                    <label>Status</label>
						                  <select name="ustatus" class="form-control">
									            <option value="1">Active</option>
									             <option value="0">In-Active</option>
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