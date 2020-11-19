<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $this->config->item('site_name'); ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url('assets/templates/AdminLTE/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url('assets/templates/AdminLTE/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url('assets/templates/AdminLTE/css/ionicons.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/templates/AdminLTE/css/AdminLTE.css');?>" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo base_url(); ?>" class="logo">
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><?php echo $this->config->item('site_name'); ?></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <?php 
                        $loggedinuser = $this->ion_auth->user()->row(); 
                        if (!empty($loggedinuser)) :
                        ?>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <?php echo $loggedinuser->first_name . " " . $loggedinuser->last_name; ?>
                                <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="<?php echo base_url('assets/uploads/images/profile/'.$loggedinuser->user_photo); ?>" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo $loggedinuser->first_name . " " . $loggedinuser->last_name ?>
                                        <small>Member since <?php echo date('M Y', $loggedinuser->created_on); ?></small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo base_url('profile') ?>" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo base_url('auth/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <?php endif ?>
                    </ul>
                </div>
            </nav>
        </header>