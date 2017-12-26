
<section  class="main-section gradient-color  login">
    <!-- Overlay Color -->
    
    <div class="container">
        <div class="row">
            <!-- Single Show Case -->
            <div class="col-md-6 col-md-offset-3 ">
                
               <div class="contact">
                <!--Title-->
                <h4 class="reflection-text p-b-2">Register</h4>

                    <!-- Contact Form -->
                    <form id="signup-form" method="post" action="<?php echo base_url('signup/create_user'); ?>" name="contact-form" data-name="Contact Form">

                        <div class="row">

                           
                            <div class="input-field col s12 m-t-1">

                                <i class="fa fa-user-o prefix" aria-hidden="true"></i>
                                <input id="contact-email" type="text" class="validate" name="name" required="">
                                <label data-error="Username required" for="user-name">Username*</label>

                            </div>

                            <!-- Email Field -->
                            <div class="input-field col s12 m-t-1">

                                <i class="fa fa-envelope prefix" aria-hidden="true"></i>
                                <input id="contact-email" type="email" class="validate" name="email" required="">
                                <label data-error="Email address required" for="user-email">Email*</label>

                            </div>
                            <div class="input-field col s12 m-t-1">

                                <i class="fa fa-mobile prefix" aria-hidden="true"></i>
                            <input id="contact-mobile" type="number" class="validate" name="phone" required="">
                                <label data-error="phone number required" for="user-mobile" class=''>Mobile No.</label>



                            </div>
                            <div class="input-field col s12 m-t-1">

                                <i class="fa fa-lock prefix" aria-hidden="true"></i>
                                <input id="contact-email" type="password" class="validate" name="password" required="">
                                <label data-error="Password required" for="user-password">Password*</label>

                            </div>
                            <div class="input-field col s12 m-t-1">

                                <i class="fa fa-lock prefix" aria-hidden="true"></i>
                                <input id="contact-email" type="password" class="validate" name="retype" required="">
                                <label data-error="Retype password required" for="user-retype">Re-Password*</label>

                            </div>

                            <!-- Submit Button -->
                            <div class="col s12 text-center">

                                <button type="submit" class="btn btn-default create-user">Register</button>
                                <p class="text-danger signup-error text-center"></p>
                            </div>

                            
                            

                        </div>

                    </form>


            </div>

            </div>
        </div>
    </div>
</section>
<!-- Start Features Section-->

