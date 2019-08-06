
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
        <link rel="icon" href="<?//php echo base_url(); ?>optimum/logo.png" type="image/x-icon" />
        <title><?php echo $system_name; ?>OBSO</title>
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link rel="shortcut icon" href="<?//php echo base_url();?>obso/assets/images/favicon.ico">

        <link href="<?php echo base_url();?>obso/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>obso/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>obso/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>obso/assets/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <div class="home-btn d-none d-sm-block">
            <a href="#" class="text-white"><i class="fas fa-home h2"></i></a>
        </div>
        
        <div class="wrapper-page">
            <div class="card overflow-hidden account-card mx-3">
                <div align="center">
                    <?php if (isset($page) && $page == "logout"): ?>
                        <div class="alert alert-success hide_msg pull" style="width: 100%">
                            <i class="fa fa-check-circle"></i> Logout Successfully &nbsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                        </div>
                    <?php endif ?>
                </div>
                <br><br>
                <div class="bg-primary p-4 text-white text-center position-relative">
                    <h4 class="font-20 m-b-5">Welcome Back !</h4>
                    <p class="text-white-50 mb-4">Sign in to continue to OBSO.</p>
                    <!--<a href="index.html" class="logo logo-admin"><img src="<?//php echo base_url();?>obso/assets//images/logo-sm.png" height="24" alt="logo"></a>-->
                </div>
                <div class="account-card-content"> 
                    <form class="form-horizontal form-material" id="login-form" action="<?php echo base_url('/login/log'); ?>" method="post"> 
                       
                        <div class="form-group">
                            <div class="col-xs-12">
                                <select name="role" class="form-control">
                                    <option value="">Select Role</option>
                                    <option value="admin">Admin</option>
                                    <?php foreach($roles as $r => $role): ?>
                                    <option value="<?= $role['id'] ?>"><?= $role['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" name="user_name" value="admin@admin.com" required="" placeholder="Email Address" style="width:100%">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" value="1234" required="" placeholder="Password" style="width:100%">
                            </div>
                        </div>
                        <!-- CSRF token -->
                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />

                        <button class="btn btn-info style1 btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" style="width:100%; color:white">
                            Login
                        </button>
                        <div align="center">
                            <img id="install_progress" src="<?php echo base_url() ?>optimum/images/loading.gif" style="margin-left: 20px;  display: none"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

<!--   <div class="m-t-40 text-center">
<p>Don't have an account ? <a href="pages-register.html" class="font-500 text-primary"> Signup now </a> </p>
<p>© 2019 Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
</div> -->

</div>
        <!-- end wrapper-page -->


        <!-- jQuery  -->
        <script src="<?php echo base_url();?>obso/assets//js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>obso/assets//js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url();?>obso/assets//js/metisMenu.min.js"></script>
        <script src="<?php echo base_url();?>obso/assets//js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url();?>obso/assets//js/waves.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url();?>obso/assets//js/app.js"></script>
        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>optimum/plugins/bower_components/jquery/dist/jquery.min.js"></script>

 <!-- auto hide message div-->
<script type="text/javascript">
    $( document ).ready(function(){
       $('.hide_msg').delay(2000).slideUp();
    });
</script>
    
<script>
    $('form').submit(function (e) 
    {
        $('#install_progress').show();
        $('#modal_1').show();
        $('.btn').val('Login...');
        $('form').submit();
        e.preventDefault();
    });
    
</script>

    </body>

</html>
