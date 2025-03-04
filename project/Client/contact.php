<?php include("header1.php"); ?>  




    <!-- Header Start -->
    <div class="bg-light" style="margin-bottom: 100px;">
        <div class="container text-center py-5">
            <h3 class="text-black display-3 mb-4">Contact</h3>
            <div class="d-inline-flex align-items-center text-black">
                <p class="m-0"><a class="text-black" href="">Home</a></p>
                <i class="far fa-circle px-3"></i>
                <p class="m-0">Contact</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                
      <div class="col-lg-6" style="min-height: 500px;"> 
        <div class="position-relative h-100"> 
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4514.543940709573!2d72.54962957601029!3d23.13503881212056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e82922c70b911%3A0x36d3c658cf9f6bc1!2s360058%2C%20Sardar%20Patel%20Ring%20Rd%2C%20Ahmedabad%2C%20Gujarat%20382481%2C%20India!5e1!3m2!1sen!2sbd!4v1723787477785!5m2!1sen!2sbd" width="600" height="750" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="contact-form bg-light p-4 p-lg-5 my-lg-5">
                        <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Contact</h6>
                        <h1 class="mb-4">Contact For Any Query</h1>
                        <div id="success"></div>
                        <form action="feedbacksave.php" method="post" name="feedback" onSubmit="return validateForm()">
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control border-0 p-4" name="nm" placeholder="Your Name"
                                        required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control border-0 p-4" name="email" placeholder="Your Email"
                                        required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control border-0 p-4" name="city" placeholder="Your city"
                                        required="required" data-validation-required-message="Please enter your city" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="phone number"class="form-control border-0 p-4" name="mno" placeholder="Your contact number"
                                        required="required" data-validation-required-message="Please enter your contact number" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control border-0 py-3 px-4" rows="3" name="feed" placeholder="Message"
                                    required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-4" type="submit" name="submit">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <?php include("footer1.php"); ?>  