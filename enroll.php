<?php include('top_header.php');?>
  <body>
<!--header-->
 

<!--/header-->
<!-- about breadcrumb -->
<!-- //about breadcrumb -->
<!-- contact block -->
<!-- contact1 -->
<section class="w3l-contact-1 pb-5" id="contact">
    <div class="contacts-9 py-lg-5 py-md-4">
        <div class="container">  
           
                <div class="map-content-9">
                    <center><h5 class="mb-sm-4 mb-3">Sing In</h5></center>
                    <form action="insertuser.php" method="post">
                        
                        <div class="twice">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                               </div>
                                 <input type="text" class="form-control" placeholder="Username" name="uname" aria-label="Username" aria-describedby="basic-addon1">
                             </div>
                       </div>
                        <div class="twice">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o"></i></span>
                               </div> 
                                <input type="email" class="form-control" name="uemail" id="w3lSender" placeholder="Enter Your Email"
                                required="">
                            </div>
                        </div>
                        <div class="twice">
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                               </div>
                            <input type="passeord" class="form-control"  name="upassword" id="w3lSubject"
                                placeholder="Password" required="">
                           </div>
                        </div>
                        <div class="text-right">
                           <center><button type="submit" class="btn btn-primary btn-style mt-4">Singin</button></center> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
