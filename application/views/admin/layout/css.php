<?php 
$system_name = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
$system_title = $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>optimum/logo.png">
    <title><?php echo $system_name; ?></title>


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


	

	<!-- jQuery  -->
    <script src="<?php echo base_url();?>obso/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>obso/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>obso/assets/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url();?>obso/assets/js/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url();?>obso/assets/js/waves.min.js"></script>

    <!-- Chart JS -->
    <script src="<?php echo base_url();?>obso/assets/plugins/chart.js/chart.min.js"></script>
    <script src="<?php echo base_url();?>obso/assets/pages/chartjs.init.js"></script>    

    <!--Chartist Chart-->
    <script src="<?php echo base_url();?>obso/assets/plugins/chartist/js/chartist.min.js"></script>
    <script src="<?php echo base_url();?>obso/assets/plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>

    <!--Chartist Chart-->
    <script src="<?php echo base_url();?>obso/assets/plugins/chartist/js/chartist.min.js"></script>
    <script src="<?php echo base_url();?>obso/assets/plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>
    <script src="<?php echo base_url();?>obso/assets/pages/chartist.init.js"></script>
    

    <!-- peity JS -->
    <script src="<?php echo base_url();?>obso/assets/plugins/peity-chart/jquery.peity.min.js"></script>

    <script src="<?php echo base_url();?>obso/assets/pages/dashboard.js"></script>

    <!-- App js -->
    <script src="<?php echo base_url();?>obso/assets/js/app.js"></script>

    <!-- Jquery-Ui -->
    <script src="<?php echo base_url();?>obso/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>obso/assets/plugins/moment/moment.js"></script>
    <script src='<?php echo base_url();?>obso/assets/plugins/fullcalendar/js/fullcalendar.min.js'></script>
    <script src="<?php echo base_url();?>obso/assets/pages/calendar-init.js"></script> 

    <script src="<?php echo base_url();?>obso/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url();?>obso/assets/pages/lightbox.js"></script> 

    </body>

</html>

        
