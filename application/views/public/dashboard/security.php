 <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">Security</h2>
          
        </div>
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default">
                
                <div class="tab-container">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab"><h2>Two-Factor Authentication</h2></a></li>
                    <li><a href="#profile" data-toggle="tab"><h2>Signin History</h2></a></li>
                    
                  </ul>
                  <div class="tab-content">
                    <div id="home" class="tab-pane active cont">
                      
                    <div class="row">
            
            
            <div class="col-xs-12 col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading">Security</div>
                <div class="panel-body">
                 <?php $msg = $myinfo->is_2fa ? 'You have enabled two factor authentication' : 'your account is not completely secure!, use google two factor authentication to secure yoru account'; ?>
                     <?php $class = $myinfo->is_2fa ? 'success' : 'primary'; ?>
                      <div class="user-timeline-date">Google Two Factor Authentication</div>
                      <div class="user-timeline-title 2fa-title alert alert-<?php echo $class; ?>"><?php echo $msg; ?></div>
                      
                      <div class="user-timeline-description">

                        <!-- <div class="2fa-ajax-loader"><img src="<?php //echo base_url('<?php echo base_url('assets/dashboard/'); ?>images/sign-loader.gif'); ?>"></div> -->
                       

                        <?php if($myinfo->is_2fa): ?>

                         <p class="text-center"><a href="javascript:void(0);" data-status='active' class="btn btn-success inactive-2fa">Two Factor Authentication is active, click to inactive. </a></p> 

                        <?php else: ?>

                          <div class="qr-form text-center">
                          <div class="show-qr text-center"> <img src="" width="200"> </div>
                            <form role="form">
                              <div class="form-group">
                                 
                                <label for="qr-input">
                                  2FA Code
                                </label>
                                <input type="text" class="form-control" id="qr-input" placeholder='2FA Code'  />
                              <span class="text-danger check-error"></span>
                              </div>
                               <div class="form-group">
                             
                              <button type="submit" class="btn btn-primary btn-lg submit-2fa-code" value="Activate 2FA">
                                Submit
                              </button>
                            </div>
                            </form>
                          </div>

                         <p class="text-center"><a href="javascript:void(0);" data-status='inactive' class="btn btn-danger toggle-2fa">Two Factor Authentication not active, click to active.</a></p> 

                        <?php endif; ?>
                      </div>
                    
                    
                   
                  
                </div>
              </div>
          </div>
         </div>
                    </div>
                    <div id="profile" class="tab-pane cont">
                      <!-- <div class="col-md-12"> -->
              <div class="panel panel-default panel-table">
                <div class="panel-heading"> 
                  
                  <div class="title">Signin History</div>
                </div>
                <div class="panel-body table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th style="width:37%;">
                               CrowdSale</th>
                        <th style="width:36%;">Price</th>
                        <th>Available Tokens  </th>
                        <th class="actions">Sold</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="user-avatar"> <img src="<?php echo base_url('assets/dashboard/'); ?>img/avatar6.png" alt="Avatar">Stage 1</td>
                        <td>0000</td>
                        <td>0000</td>
                        <td>0000</td>
                      </tr>
                      <tr>
                        <td class="user-avatar"> <img src="<?php echo base_url('assets/dashboard/'); ?>img/avatar4.png" alt="Avatar">Stage 2</td>
                        <td>0000</td>
                        <td>00000</td>
                        <td>0000</td>
                      </tr>
                      <tr>
                        <td class="user-avatar"> <img src="<?php echo base_url('assets/dashboard/'); ?>img/avatar5.png" alt="Avatar">Stage 3</td>
                        <td>0000</td>
                        <td>0000</td>
                        <td>0000</td>
                      </tr>
                      <tr>
                        <td class="user-avatar"> <img src="<?php echo base_url('assets/dashboard/'); ?>img/avatar3.png" alt="Avatar">Stage 4</td>
                        <td>0000</td>
                        <td>0000</td>
                        <td>0000</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            <!-- </div> -->
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
