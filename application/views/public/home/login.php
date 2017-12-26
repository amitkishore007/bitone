
<section  class="main-section gradient-color  login">
    <!-- Overlay Color -->
    
    <div class="container">
        <div class="row">
            <!-- Single Show Case -->
            <div class="col-md-6 col-md-offset-3 ">
                
            <div class="contact">
                <!--Title-->
                <h4 class="reflection-text p-b-2">Login</h4>
                <?php if($msg = $this->session->userdata('msg')): ?>
                    <p class="alert alert-success text-center"> <?php echo $msg; ?></p>
                <?php endif; ?>

                <p class="form-error text-center" style="color: #ffffff !important;background-color: #c10f41;"></p>
                

                    <!-- Contact Form -->
                    <form id="login-form" name="contact-form" data-name="Contact Form" autocomplete="off">

                        <div class="row">

                            <!-- Email Field -->
                            <div class="input-field col s12 m-t-1">

                                <i class="fa fa-user-o prefix" aria-hidden="true"></i>
                                <input id="user-email" type="email" autocomplete="off" class="validate" name="email" required="">
                                <label data-error="Invalid Email" for="user-email">Email*</label>

                            </div>
                            <div class="input-field col s12 m-t-1">

                                <i class="fa fa-lock prefix" aria-hidden="true"></i>
                                <input id="user-password" type="password" autocomplete="off" class="validate" name="password" required="">
                                <label data-error="Invalid Password" for="user-password">Password*</label>

                            </div>
                            <div class="input-field col s12 m-t-1 two-fa-input">

                                <i class="fa fa-key prefix" aria-hidden="true"></i>
                                <input id="twofa-number" type="number" class="validate" name="number" required="">
                                <label data-error="Enter 2FA" for="twofa-number">2FA</label>

                            </div>

                            <!-- Submit Button -->
                            <div class="col s12 text-center">

                                <button type="submit" class="btn btn-default user-login">Login</button>
                                <button type="submit" class="btn btn-default check2fa" style="display: none;">Login</button>

                                <p class="text-right"><a href="<?php echo base_url('signup'); ?>">Signup ? </a></p>

                            </div>
                            
                        </div>

                    </form>

            </div>
        </div>
    </div>
</section>
<!-- Start Features Section-->
