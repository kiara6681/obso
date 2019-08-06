<?php 
$system_name = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
$system_title = $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <!--<link rel="icon" type="image/png" sizes="16x16" href="<?//php echo base_url();?>optimum/logo.png">-->
        <title><?//php echo $system_name; ?>OBSO</title>
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!--<link rel="shortcut icon" href="<?//php echo base_url();?>obso/assets/images/favicon.ico">-->

        <!--Chartist Chart CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>obso/assets/plugins/chartist/css/chartist.min.css">
        <!--calendar css-->
        <link href="<?php echo base_url();?>obso/assets/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet">

        <link href="<?php echo base_url();?>obso/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>obso/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>obso/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>obso/assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>obso/assets/css/modify.css" rel="stylesheet" type="text/css">

        <link href="<?php echo base_url();?>obso/assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="row sidetitle">
                        <div class="col-md-12">
                            <h3 style="margin-bottom: 0px;">OBSO</h3> 
                            <small>Global Parts</small>
                        </div>
                        
                    
                    </div>
                  
                   
                

                   
                </div>

                <nav class="navbar-custom">
                    <ul class="navbar-right list-inline float-right mb-0" style="margin-right: 20px;">
                        <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                            <form role="search" class="app-search">
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control" placeholder="Search..">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </li>

                        



                        <!-- notification -->
                        <li class="dropdown notification-list list-inline-item">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-bell-outline noti-icon"></i>
                                <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                                <!-- item-->
                                <h6 class="dropdown-item-text">
                                        Notifications (258)
                                    </h6>
                                <div class="slimscroll notification-item-list">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-message-text-outline"></i></div>
                                        <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                        <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                        <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                    </a>
                                </div>
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>
                            </div>
                        </li>
                         <!-- full screen -->

                         <li class="dropdown notification-list list-inline-item">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="far fa-envelope"></i>
                                <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                                <!-- item-->
                                <h6 class="dropdown-item-text">
                                        Message (258)
                                    </h6>
                                <div class="slimscroll notification-item-list">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-message-text-outline"></i></div>
                                        <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                        <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                        <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                    </a>
                                </div>
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>
                            </div>
                        </li>

                      
                      

                    </ul>

                  <!--   <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                       
                    </ul> -->

                </nav>

            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                     <div class="col-md-12" style="padding: 5px;text-align: center;background: #393e46;"><img src="<?php echo base_url();?>obso/assets//images/users/user-4.jpg" alt="user" class="rounded-circlet" style="    margin-top: 20px;"><br>
                    <p style="margin: 10px;">Alexender Pierca, CEO</p>
                    <button type="button" class="btn btn-secondary btn-sm waves-effect btnenq"><i class="mdi mdi-whatsapp"></i> Enquiry</button>
                    </div>
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        

                        <ul class="metismenu" id="side-menu">

                     
                            
                            <li>
                                <a href="<?php echo base_url(); ?>admin/dashboard" class="waves-effect">
                                    <i class="fas fa-tachometer-alt"></i>
                                    <span class="badge badge-primary badge-pill float-right"></span> 
                                    <span> Dashboard </span>
                                </a>
                            </li>
                            <!-- <li>
                                <a href="javascript:void(0);"><i class="far fa-address-card"></i> Create User <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <?php if ($this->session->userdata('role') == 'admin'): ?>
                                            <li> <a href="<?php echo base_url('admin/user') ?>"><i class="fa fa-plus p-r-10"></i><span class="hide-menu">New User</span></a></li>
                                            <li> <a href="<?php echo base_url('admin/user/power') ?>"><i class="fa fa-cog p-r-10"></i><span class="hide-menu">User Function</span></a></li>
                                            <?php else: ?>
                                            <?php if(check_power(1)):?>
                                            <li> <a href="<?php echo base_url('admin/user') ?>"><i class="fa fa-plus p-r-10"></i><span class="hide-menu">New User</span></a></li>
                                            <?php endif; ?>
                                            <?php endif ?>
                                        <li><a href="<?php echo base_url('admin/user/all_user_list') ?>"><i class="fa fa-list p-r-10"></i><span class="hide-menu">All Users</span></a></li>
                                </ul>
                            </li> -->

                            <!-- <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-user p-r-10"></i> <span class="hide-menu"> Create User <span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">3</span></span></a>
                                        <ul class="nav nav-second-level">
                                        <?php if ($this->session->userdata('role') == 'admin'): ?>
                                            <li> <a href="<?php echo base_url('admin/user') ?>"><i class="fa fa-plus p-r-10"></i><span class="hide-menu">New User</span></a></li>
                                            <li> <a href="<?php echo base_url('admin/user/power') ?>"><i class="fa fa-cog p-r-10"></i><span class="hide-menu">User Function</span></a></li>
                                            <?php else: ?>
                                            <?php if(check_power(1)):?>
                                            <li> <a href="<?php echo base_url('admin/user') ?>"><i class="fa fa-plus p-r-10"></i><span class="hide-menu">New User</span></a></li>
                                            <?php endif; ?>
                                            <?php endif ?>
                                        <li><a href="<?php echo base_url('admin/user/all_user_list') ?>"><i class="fa fa-list p-r-10"></i><span class="hide-menu">All Users</span></a></li>
                                    </ul>
                                    </li> -->
                            <?php
                                $user_permission = explode(",",$_SESSION['permissions']);
                                $all_permission = array_flip(unserialize (SIDE_MENUS));
                                $result = array_intersect($all_permission,$user_permission);
                            ?>
                            <?php if(in_array('calender',$result)): ?>
                            <li>
                                <a href="#" class="waves-effect">
                                    <i class="far fa-calendar-alt"></i>
                                    <span> Calendar </span>
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php if(in_array('sales',$result)): ?>
                            <li>
                                <a href="#"><i class="far fa-address-card"></i> Sales Database <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="<?php echo base_url(); ?>admin/sales/customer_list"> Customer Lists</a></li>
                                <!--  <li><a href="<?//php echo base_url(); ?>admin/sales/customer_records">Customer Records</a></li> -->
                                <!--  <li><a href="<?//php echo base_url(); ?>admin/sales/customer_contact">Customer Contacts</a></li> -->
                                </ul>
                            </li>
                            <?php endif; ?>
                            <?php if(in_array('quote_pipeline',$result)): ?>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-align-left"></i><span> Quote in Pipeline <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="#">Unqualified Quotation</a></li>
                                    <li><a href="#">Quotation Sent</a></li>
                                    
                                </ul>
                            </li>
                            <?php endif; ?>
                            <?php if(in_array('supplier_database',$result)): ?>

                            <li>
                                <a href="#"><i class="fas fa-database"></i> Supplier Database <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="<?php echo base_url();?>admin/supplier/supplier_list"> Supplier List</a></li>
                                <!--  <li><a href="<?php echo base_url();?>admin/supplier/supplier_records">Supplier Records</a></li> -->
                                <!--  <li><a href="<?php echo base_url();?>admin/supplier/supplier_contact">Supplier Contact</a></li> -->
                                </ul>
                            </li>
                            <?php endif; ?>
                            <?php if(in_array('order_delivery',$result)): ?>
                            
                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-truck-moving"></i><span> Order & Delivery Status <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="#">Supplier Order History</a></li>
                                    <li><a href="#">Sales Order History 2</a></li>
                                    <li><a href="#">Order Tracking</a></li>
                                </ul>
                            </li>
                            <?php endif; ?>
                            <?php if(in_array('other',$result)): ?>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-truck-moving"></i><span> Other <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="<?php echo base_url();?>admin/product/all_product_list">Product List</a></li>
                                    <li><a href="<?php echo base_url();?>admin/manufacturer/all_manufacturer_list">Manufacturer List</a></li>
                                    <li><a href="<?php echo base_url();?>admin/industry/all_industry_list">Industry List</a></li>
                                    <li><a href="<?php echo base_url();?>admin/employee/all_employee_list">Employee List</a></li>
                                    

                                </ul>
                            </li>
                            <?php endif; ?>
                            <?php if(in_array('report_status',$result)): ?>
                            <li>
                                <a href="#" class="waves-effect">
                                    <i class="far fa-chart-bar"></i>
                                    <span> Report Status </span>
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php if(in_array('finance',$result)): ?>
                            <li>
                                <a href="#" class="waves-effect">
                                    <i class="mdi mdi-wallet m-r-5"></i>
                                    <span> Finance </span>
                                </a>
                            </li>
                            <?php endif; ?>
                            <li>
                                <a href="<?php echo base_url('login/logout') ?>">
                                    <i class="fa fa-power-off"></i><span>  Logout</span></a>
                            </li>
            



                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->