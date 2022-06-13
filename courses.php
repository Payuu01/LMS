<?php
require("connect.php");
$sql="select * from courses_tbl inner join category_tbl on category_tbl.m_category_id = courses_tbl.m_course_category order by m_course_order ASC ";
$res = mysql_query($sql,$con);

?>
<?php include('top_header.php');?>
  <body>
<!--header-->
<?php include('header.php') ?>
<!--/header-->
<!-- about breadcrumb -->
<section class="w3l-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container pt-lg-5 pt-3 p-lg-4 pb-3">
            <h2 class="title mt-5 pt-lg-5 pt-sm-3">Online Courses</h2>
            <ul class="breadcrumbs-custom-path pb-sm-5 pb-4 mt-2 text-center mb-md-5">
                <li><a href="index.html">Home</a></li>
                <li class="active"> / Courses </li>
            </ul>
        </div>
    </div>
    <div class="waveWrapper waveAnimation">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none">
            <path d="M-5.07,73.52 C149.99,150.00 299.66,-102.13 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none;"></path>
        </svg>
    </div>
</section>
<!-- //about breadcrumb -->
<section class="w3l-courses">
    <div class="blog pb-5" id="courses">
        <div class="container py-lg-5 py-md-4 py-2">
            <div id="course" class="row">
                <?php
                while($course = mysql_fetch_assoc($res)){
                    if(!empty($course['m_course_img'])&& file_exists('admin/upload/'.$course['m_course_img'])){
                     $file="admin/upload/".$course['m_course_img'];
                    }
                   else{
                    $file="admin/upload/social.png";
                   }
                echo"<div class='col-lg-4 col-md-6 item'>
                    <div class='card' style='margin-top: 20px;'>
                        <div class='card-header p-0 position-relative'>
                            <a href='course_detail.php?id=".$course['m_course_id']."' class='zoom d-block'>
                                <img class='card-img-bottom d-block' style='height: 260px' src='".$file."' alt='Card image cap'>
                            </a>
                            <div class='post-pos'>
                                <a href='#reciepe' class='receipe blue'>".$course['m_category_title']."</a>
                            </div>
                        </div>
                        <div class='card-body course-details'>
                            <div class='price-review d-flex justify-content-between mb-1align-items-center'>
                                <p><span class='fa fa-inr' style='color:red'></span> ".$course['m_course_offerfees']."</p>
                                <ul class='rating-star'>
                                    <li><span class='fa fa-star'></span></li>
                                    <li><span class='fa fa-star'></span></li>
                                    <li><span class='fa fa-star'></span></li>
                                    <li><span class='fa fa-star'></span></li>
                                    <li><span class='fa fa-star-o'></span></li>
                                </ul>
                            </div>
                             <a href='course_detail.php?id=".$course['m_course_id']."' class='course-desc'>".$course['m_course_title']."
                        </a>
                      
                            <div class='course-meta mt-4'>
                                <div class='meta-item course-lesson'>
                                    <span class='fa fa-clock-o'></span>
                                    <span class='meta-value'>".$course['m_course_duration']." </span>
                                </div>
                                <div class='meta-item course-'>
                                    <span class='fa fa-inr' style='color:red'></span>
                                    <span class='meta-value'><del>".$course['m_course_fees']." </del></span>
                                </div>
                            </div>
                        </div>
                        <div class='card-footer'>
                            <div class='author align-items-center'>
                                <img src='assets/images/a1.jpg' alt='' class='img-fluid rounded-circle'>
                                <ul class='blog-meta'>
                                    <li>
                                        <span class='meta-value mx-1'>by</span> <a href='#author'> Olivia</a>
                                    </li>
                                    <li>
                                        <span class='meta-value mx-1'>in</span> <a href='#author'> Programing</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>";
                }                     
            ?>
                
            </div>
            <!-- pagination -->
            <div class="pagination-wrapper mt-5 pt-lg-3 text-center">
                <ul class="page-pagination">
                    <li><a class="next" href="#url"><span class="fa fa-angle-left"></span> Prev</a></li>
                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                    <li><a class="page-numbers" href="#url">2</a></li>
                    <li><a class="page-numbers" href="#url">3</a></li>
                    <li><a class="page-numbers" href="#url">....</a></li>
                    <li><a class="next" href="#url">Next <span class="fa fa-angle-right"></span></a></li>
                </ul>
            </div>
            <!-- //pagination -->
        </div>
    </div>
</section>
<!-- footer -->
<?php
  include('footer.php');

  include('top_footer.php');
 ?>