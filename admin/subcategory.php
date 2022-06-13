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
                    <h2 class="title1">Sub Categories <span class="pull-right">
                        <a href="addsubcategory.php" class="btn btn-info">Add New</a></span></h2>
                    <div class="panel-body widget-shadow">
                        <h4></h4>
                        
                        <table class="table">
                            <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Sub-Category Name </th>
                                  <th> Description</th>
                                  <th> Image</th>
                                  <th>Status</th>
                                  <th>Category</th>
                                  <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>

                                    
<?php
require('connect.php');
$query="select * from subcategory_tbl";
$data=mysql_query($query, $con);
//$result= mysql_fetch_assoc($data);
   $num = 1;
  while($result=mysql_fetch_assoc($data))
    {
        $uid = $result['m_subcategory_id'];
    
        echo"
        <tr>
        <td>".$num."</td>
        <td>".$result['m_subcategory_title']."</td>
        <td>".$result['m_subcategory_desc']."</td>
        <td>".$result['m_subcategory_img']."</td>
        <td>".$result['m_subcategory_status']."</td>
        <td>".$result['m_subcategory_category']."</td>
        <td><a href='editsubcategory.php?user=$uid'>Edit</a> | <a href='deletesubcategory.php?user=$uid'>Delete</a></td>
        </tr>
        
        ";
        $num++;
    }
?>

</tbody>
</table>
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