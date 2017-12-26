<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>ICO Dashboard</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dashboard/'); ?>lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dashboard/'); ?>lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dashboard/'); ?>lib/jquery.vectormap/jquery-jvectormap-1.2.2.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dashboard/'); ?>lib/jqvmap/jqvmap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dashboard/'); ?>lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/'); ?>css/style.css" type="text/css"/>
  </head>
  <body>
    <div class="be-wrapper be-fixed-sidebar">
      <nav class="navbar navbar-default navbar-fixed-top be-top-header">
        <div class="container-fluid">
          <div class="navbar-header"><a href="<?php echo base_url('dashboard'); ?>" class="navbar-brand">ICO</a>
          </div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav navbar-right be-user-nav">
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle">
                <img src="<?php echo base_url('assets/dashboard/'); ?>img/avatar.png" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
                <ul role="menu" class="dropdown-menu">
                  <li>
                    <div class="user-info">
                      <div class="user-name"><?php echo $this->session->userdata('username'); ?></div>
                      <div class="user-position online">Available</div>
                    </div>
                  </li>
                  <li><a href="javascript:void(0);"><span class="icon mdi mdi-face"></span>My Profile </a></li>
                  
                  <li><a href="<?php echo base_url('logout'); ?>"><span class="icon mdi mdi-power"></span> Logout</a></li>
                </ul>
              </li>
            </ul>
            <div class="page-title"><span> 1 BTC</span></div>
            <div class="page-title"><span>ETH</span></div>
            <div class="page-title"><span>BTC</span></div>
            <div class="page-title"><span>TOKEN </span></div>
            
          </div>
        </div>
      </nav>
      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Dashboard</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li class="active">
                    <a href="javascript:void(0);">
                      <span>Dashboard</span></a>
                  </li>
                   <li>
                    <a href="javascript:void(0);">
                      <span> ICO CrowdSale</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">
                      <span> BPRO Exchange</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">
                      <span> Profile</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">
                      <span>  Network</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">
                      <span> Wallet</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('security'); ?>">
                      <span> Security </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">
                      <span> Support</span>
                    </a>
                  </li>

                  
                </ul>
              </div>
            </div>
          </div>
          <div class="progress-widget">
            <div class="progress-data"><span class="progress-value">60%</span><span class="name">Current Process</span></div>
            <div class="progress">
              <div style="width: 60%;" class="progress-bar progress-bar-primary"></div>
            </div>
          </div>
        </div>
      </div>