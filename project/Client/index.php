<?php include("header1.php"); ?>  


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            
    <ol class="carousel-indicators">
      <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#header-carousel" data-slide-to="1"></li>
      <li data-target="#header-carousel" data-slide-to="2"></li>
    </ol>
            
    <div class="carousel-inner"> 
      <div class="carousel-item position-relative active" style="min-height: 100vh;"> 
        <img class="position-absolute w-100 h-100" src="image_project/giphy.webp" style="object-fit: cover;"> 
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center"> 
          <div class="p-3" style="max-width: 900px;"> 
            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">BeautyZone</h6>
            <h5 class="display-3 text-capitalize text-white mb-3">Welcome</h5>
            <h3 class="display-3 text-capitalize text-white mb-3">Most Popular 
              Cosmo</h3>
            <p class="mx-md-5 px-5">Rated by More Then 1000+ Customers. A Meditative 
              Means Of Discoveing Dysfunctional Perception And Cognifion.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item position-relative" style="min-height: 100vh;"> 
        <img class="position-absolute w-100 h-100" src="image_project/bgnew2.gif" style="object-fit: cover;"> 
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center"> 
          <div class="p-3" style="max-width: 900px;"> 
            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">BeautyZone</h6>
            <h3 class="display-3 text-capitalize text-white mb-3">Premium Beauty 
              Products</h3>
            <p class="mx-md-5 px-5">Rated by More Then 1000+ Customers. A Meditative 
              Means Of Discoveing Dysfunctional Perception And Cognifion.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item position-relative" style="min-height: 100vh;"> 
        <img class="position-absolute w-100 h-100" src="image_project/bgnew1.webp" style="object-fit: cover;"> 
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center"> 
          <div class="p-3" style="max-width: 900px;"> 
            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">BeautyZone</h6>
            <h3 class="display-3 text-capitalize text-white mb-3">Make Your Skin 
              Shine & Glowing</h3>
            <p class="mx-md-5 px-5">Rated by More Then 1000+ Customers. A Meditative 
              Means Of Discoveing Dysfunctional Perception And Cognifion.</p>
          </div>
        </div>
      </div>
    </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="../Client/image_project/model.jpg" alt="">
                </div>
                
      <div class="col-lg-6"> 
        <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">About 
          Us</h6>
        <h1 class="mb-4">Welcome to BeautyZone </h1>
        <p class="pl-4 border-left border-primary"></p>
        <div class="row pt-3"> 
          <div class="col-6"> 
            <div class="bg-light text-center p-4"> 
              <h3 class="display-4 text-primary" data-toggle="counter-up">99</h3>
              <h6 class="text-uppercase">Beauty Expert</h6>
              <h6 class="text-uppercase"></h6>
            </div>
          </div>
          <div class="col-6"> 
            <div class="bg-light text-center p-4"> 
              <h3 class="display-4 text-primary" data-toggle="counter-up">999</h3>
              <h6 class="text-uppercase">Happy Clients</h6>
            </div>
          </div>
        </div>
      </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid px-0 py-5 my-5">
        <div class="row mx-0 justify-content-center text-center">
            
    <div class="col-lg-6"> 
      <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Our 
        Products</h6>
      <h1> Beauty Products</h1><br><br><br>
    </div>
        </div>
       
        <div class="owl-carousel service-carousel">
       
        <?php
include("con1.php");
$query="select *from items";
$result=mysqli_query($con,$query);
 while($row=mysqli_fetch_array($result))
{?>
        <div class="Products-item position-relative">
            <?php echo " <img src='image_project/$row[4]' height=300 width=300 >"; ?><br><br>
                <center>
            <h3><?php echo $row["itemname"]; ?></h3></center>
                <div class="service-text text-center">
                <h5>price= <?php echo $row["price"]; ?></h5>
                    
                    
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href=<?php echo "addtocart.php?id=".$row[0] ?>>Order Now</a>
                    </div>
                </div>
            </div>
<?php } ?>
            
        </div>
        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Open Hours Start -->
    <!--<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                
      <div class="col-lg-6" style="min-height: 500px;"> 
        <div class="position-relative h-100"> <img class="position-absolute w-100 h-100" src="../Client/image_project/brushlakme3.jpg" style="object-fit: cover;"> 
        </div>
      </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                        <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Open Hours</h6>
                        <h1 class="mb-4">Best Beauty Products</h1>
                        <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                        <ul class="list-inline">
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Mon ? Fri : 9:00 AM - 7:00 PM</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Saturday : 9:00 AM - 6:00 PM</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Sunday : Closed</li>
                        </ul>
                        <a href="" class="btn btn-primary mt-2">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Open Hours End --> 


    <!<!-- Pricing Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                
      <div class="col-lg-5" style="min-height: 500px;"> 
        <div class="position-relative h-100"> <img class="position-absolute w-100 h-100"src="image_project/bg10" style="object-fit: cover;"> 
        </div>
      </div>
                <div class="col-lg-7 pt-5 pb-lg-5">
                    <div class="pricing-text bg-light p-4 p-lg-5 my-lg-5">
                        <div class="owl-carousel pricing-carousel">
                            <div class="bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    
                                    <h5 class="text-primary text-uppercase m-0" >Sugar</h5>
                                </div>
                                <div class="p-4">
                                    <p><i class="fa fa-check text-success mr-2"></i>Foundation</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Comapact</p>
                                    
									 <p><i class="fa fa-check text-success mr-2"></i>Eyeshadow</p>
									<p><i class="fa fa-check text-success mr-2"></i>Lipstic</p>
						
                                    
                                </div>
                            </div>
                            <div class="bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    
                                    <h5 class="text-primary text-uppercase m-0">HUDA Beauty</h5>
                                </div>
                                <div class="p-4">
                                <p><i class="fa fa-check text-success mr-2"></i>Foundation</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Comapact</p>
                                    
									 <p><i class="fa fa-check text-success mr-2"></i>Eyeshadow</p>
									<p><i class="fa fa-check text-success mr-2"></i>Lipstic</p>
                                   
                                </div>
                            </div>
                            <div class="bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    
                                    <h5 class="text-primary text-uppercase m-0">Swiss Beauty</h5>
                                </div>
                                <div class="p-4">
                                <p><i class="fa fa-check text-success mr-2"></i>Foundation</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Comapact</p>
                                    
									 <p><i class="fa fa-check text-success mr-2"></i>Eyeshadow</p>
									<p><i class="fa fa-check text-success mr-2"></i>Lipstic</p>
                                    
                                </div>
                            </div>
							<div class="bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    
                                    <h5 class="text-primary text-uppercase m-0">Lakme</h5>
                                </div>
                                <div class="p-4">
                                <p><i class="fa fa-check text-success mr-2"></i>Foundation</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Comapact</p>
                                    
									 <p><i class="fa fa-check text-success mr-2"></i>Eyeshadow</p>
									<p><i class="fa fa-check text-success mr-2"></i>Lipstic</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->


   <!-- Team Start -->
   <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row justify-content-center text-center">
                
      <div class="col-lg-6"> 
        <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2s">Beauty 
          Specialist</h6>
        <h1 class="mb-5">Makeup Expert & Beauty Specialist</h1>
      </div>
            </div>
            <div class="row">
            &nbsp;
               &nbsp;
               &nbsp;
               &nbsp;
               &nbsp;
               &nbsp;
               &nbsp;
               &nbsp;
               &nbsp;
               &nbsp;
               &nbsp;
               &nbsp;
               &nbsp;
               &nbsp;
               &nbsp;
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="image_project/modelv.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Vinisha Jethva</h5>
                                <p class="m-0"> Beauty Specialist</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                &nbsp;
               &nbsp;
               &nbsp;
               &nbsp;
               &nbsp;
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="image_project/feedback2.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Khushbu Kamriya</h5>
                                <p class="m-0">Makeup Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
               &nbsp;
               &nbsp;
               &nbsp;
               &nbsp;
               &nbsp;
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="image_project/MODELL.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Hiral Dhola</h5>
                                <p class="m-0">Makeup Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="image_project/bg9.jpg" alt="">
                </div>
                
      <div class="col-lg-6"> 
        <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Testimonial</h6>
        <h1 class="mb-4">What Our Clients Say!</h1>
        <div class="owl-carousel testimonial-carousel"> 
          <div class="position-relative"> <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i> 
            <div class="d-flex align-items-center mb-3"> <img class="img-fluid rounded-circle" src="image_project/feedback1.jpg" style="width: 80px; height: 80px;" alt=""> 
              <div class="ml-3"> 
                <h5 class="text-uppercase">Saru oberoi</h5>
                <span>Profession</span> </div>
            </div>
            <p class="m-0">Just wanted to say thanks for doing such a great job 
              with makeup for my wedding. I have never felt so beautiful in my 
              life (at age 31!) and the pictures look fabulous. You were great 
              to work with! I just wanted to say thank you again for everything.</p>
          </div>
          <div class="position-relative"> <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i> 
            <div class="d-flex align-items-center mb-3"> <img class="img-fluid rounded-circle" src="image_project/feedback2.jpg" style="width: 80px; height: 80px;" alt=""> 
              <div class="ml-3"> 
                <h5 class="text-uppercase">Dayna shah</h5>
                <span>Profession</span> </div>
            </div>
            <p class="m-0">I just wanted to let you know again how much I appreciate 
              everything you did for my engagement day. You were definitely a 
              calming presence for me. I've only seen the photos from our digital 
              camera, but even the ones from the wedding after-party have my makeup 
              looking fresh and beautiful. Your product is premium quality.</p>
          </div>
          <div class="position-relative"> <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i> 
            <div class="d-flex align-items-center mb-3"> <img class="img-fluid rounded-circle" src="image_project/feedback3.jpg" style="width: 80px; height: 80px;" alt=""> 
              <div class="ml-3"> 
                <h5 class="text-uppercase">Jenna ortega</h5>
                <span>Profession</span> </div>
            </div>
            <p class="m-0">my skin is so sensitive so i can,t do makup ,but i 
              try your website's product and i use on my skin,oh my god my skin 
              was absolutely fine and i looking so beautiful.thank you so mach 
              for this product </p>
          </div>
        </div>
      </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


     <?php include("footer1.php"); ?>  