<?php 
$home=$this->common_model->get_single_homee();
foreach ($home as $home) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> <?php echo $home['website_title']; ?></title>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=no; target-densityDpi=device-dpi" />
<meta name="google-site-verification" content="<?php echo $home['meta_tag']; ?>" />
<meta name="description" content="<?php echo $home['website_description']; ?>">
<meta name="keywords" content="<?php echo $home['website_keyword']; ?>">

<meta charset="utf-8">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
<link rel="shortcut icon" href="<?php echo base_url(); ?>uploads/<?php echo $home['favicon']; ?>" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/assets/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/assets/owlcarousel/assets/owl.theme.default.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


<style>
	.header-enquery .add_new_part {
    background: #3c3c3c;
    color: #fff;
}
.search-form {
	position: absolute;
	z-index: 100;
	background: #fff;
	padding: 10px;
	border-radius: 0 0 5px 5px;
	border: 1px solid #eee;
	box-shadow: 2px 5px 11px -5px rgba(0,0,0,0.6);
	display: none;
}
.mobile-search-form {
  position: absolute;
  z-index: 100;
  background: #fff;
  padding: 10px;
  border-radius: 0 0 5px 5px;
  border: 1px solid #eee;
  box-shadow: 2px 5px 11px -5px rgba(0,0,0,0.6);
  display: none;
}

.form-controls {
    display: block;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 0.9rem;
    font-weight: 400;
    line-height: 1.5;
    color: #000;
    background-color: #dedede;
    background-clip: padding-box;
    border: 1px solid #000000;
    border-radius: 30px;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 0.7rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #000000;
    border-radius: 4px;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.navbar-nav .active{
    background: #ffe300;
}

.navbar-nav .nav-item{
    height: 40px;
    padding-top: 11px;
}
#enquiry_form_home_popup{
  background-color: #fee133 !important;
}
#mobile-search-input::placeholder { 
    color: #000;
}
.navbar-nav .nav-item:hover{
  background-color: #fee300 !important;
}
.navbar-nav .nav-item a:hover{
  transition: 0.0s ease-in-out !important;
}
#header_search_form input {
    border-radius: 3px!important;
}
.search_buton input{
    border-radius: 3px!important;
}
.mobile-search-input{
    border-radius: 3px!important;
}
.fields_form_product input {
    border-radius: 3px;
}
.form-input-parent input {
    border-radius: 3px;
}
</style>
</head>
<body>
<!-- Active Menu -->
<?php
    $actual_link1 = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $link_array = explode('/',$actual_link1);
    $page = end($link_array);
    $numSegments = count($link_array); 
    $currentSegment = $link_array[$numSegments - 2];
?>
<!-- Header Start -->
<div class="sticky">
<div class="container-fluid" id="Header_top">
	<div class="container">
<!--       <div class="row hidden-xs navbar" id="header_top_rows">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav_bar " aria-controls="header-nav_bar " aria-expanded="false" aria-label="Toggle navigation" style="padding: 0;">
            <span class="navbar-toggler-icon"></span>
        </button>   
        <div class="logo hidden-xs">
            <a href="<?php echo base_url(); ?>">
                <picture>
                    <img src="<?php echo base_url(); ?>uploads/<?php echo $home['image']; ?>">
                </picture>
            </a>
        </div>                    
        <?php 
            $contact=$this->common_model->get_contact();
            foreach ($contact as $contact) { ?>
            <a href="tel:<?php echo $contact['phone']; ?>" class="btn-phone hidden-xs">
                <i class="fa fa-phone"></i>
            </a>
        <?php } ?>
      </div> -->
      <div class="row hidden-lgg" id="header_top_rows">
  			<div class="col-md-3 col-sm-3">
  				  <div class="header_logo_search">
  					  <div class="header_logo">
						    <a href="<?php echo base_url(); ?>">
                    <img src="<?php echo base_url(); ?>uploads/<?php echo $home['image']; ?>" style="padding: 0px 12px 0px;">
                  </a>
              </div>
           </div>
        </div>
        <div class="col-md-6 col-sm-6">
    				<div class="header_search">
    					<form id="header_search_form" action='<?= base_url('home/manufacturer'); ?>'>
    						<!-- <select type="select" name="manufacturer" id="manufact" class="searchvl">
    							<option value="">Select Manufacturer</option>
    							<?//php foreach ($manufacturer as $manufacturer){ ?>									
    							<option value="<?//php echo $manufacturer['manufacturer']; ?>"><?//php echo $manufacturer['manufacturer']; ?></option>
    							<?//php } ?>
    						</select> -->
    						<input type="seach" name="search_text" id="search_text" onkeyup="get_partnumber(val=this.val)" placeholder="Enter Part Number" >				
    						<button class="search_buton"><span class="fa fa-search"></span></button>
    						
    					</form>
    					<div class="search-form">
    						<div class="search-inner" id="result"></div>
    					</div>
    				</div>
                </div>

    <?php } ?>
			<div class="col-md-3 col-sm-3 text-right">
				<div class="header_enquery_form">
          <?php 
         $contact=$this->common_model->get_contact();
         foreach ($contact as $contact) { ?>
          <p class="header_call"><a href="#"><?php echo $contact['phone']; ?></a></p>
<!--                     <p class="header_mail"><a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a></p> -->
        <?php } ?>
    				<div class="dropdown">
					    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
    					  <img src="<?php echo base_url(); ?>/assets/home/img/uk.png" alt="img"><span> UK
    					  <span class="caret"></span>
              </button>
					    <ul class="dropdown-menu">
					      <li>
                  <a href="http://www.obso.com">
                    <img src="<?php echo base_url(); ?>/assets/home/img/uk.png" style="width:25px;" alt="img"> UK
                  </a>
                </li>

                <li>
                  <a href="http://www.obso.co.es">
                    <img src="<?php echo base_url(); ?>/assets/home/img/spain.png" style="width:25px;" alt="img"> Spain
                  </a>
                </li>

                <li>
                  <a href="http://www.obso.co.fr">
                    <img src="<?php echo base_url(); ?>/assets/home/img/france.png" style="width:25px;" alt="img"> France
                  </a>
                </li>

                <li>
                  <a href="http://www.obso.co.mx">
                    <img src="<?php echo base_url(); ?>/assets/home/img/mexico.png" style="width:25px;" alt="img"> Mexico
                  </a>
                </li>

    				    <li>
                  <a href="http://www.obso.it">
                    <img src="<?php echo base_url(); ?>/assets/home/img/italy.png" style="width:25px;" alt="img"> Italy
                  </a>
                </li>

    				    <li>
                  <a href="http://www.obso.in">
                    <img src="<?php echo base_url(); ?>/assets/home/img/india.png" style="width:25px;" alt="img"> India
                  </a>
                </li>

                <li>
                  <a href="http://www.obso.nl">
                    <img src="<?php echo base_url(); ?>/assets/home/img/netherland.png" style="width:25px;" alt="img"> Netherlands
                  </a>
                </li>

                <li>
                  <a href="http://www.obso.de">
                    <img src="<?php echo base_url(); ?>/assets/home/img/germany.png" style="width:25px;" alt="img"> Germany
                  </a>
                </li>

                <li>
                  <a href="http://www.obso.us">
                    <img src="<?php echo base_url(); ?>/assets/home/img/us.png" style="width:25px;" alt="img"> United States
                  </a>
                </li>

                <li>
                  <a href="http://www.obso.ca">
                    <img src="<?php echo base_url(); ?>/assets/home/img/canada.png" style="width:25px;" alt="img"> Canada
                  </a>
                </li>
					    </ul>
					  </div>
				</div>
      </div>
		</div>
	</div>
	
</div>
<div class="search active" id="mobile-search">
    <div class="container">
        <form action="javascript:;" method="post">
            <div class="input">
                <input type="text" name="search" class="header-search-input search_text" id="mobile-search-input" placeholder="Enter Part Number" autocomplete="off" style="">
            </div>
        </form>
        <div class="mobile-search-form">
            <div class="search-inner" id="mobile-result"></div>
          </div>
    </div>
</div>
<style type="text/css">
    #mobile-search{
      display: none;
    }
    #mobile-search.active {
      transform: translateY(0);
    }
    #mobile-search {
      position: fixed;
      left: 0;
      right: 0;
      z-index: 500;
      transform: translateY(-100%);
      background-color: #fff;
      transition: transform .1s ease-in-out;
      top: 50px;
    }
    #mobile-search .container {
      padding: 5px 20px;
    }
    #mobile-search input {
      margin: 0;
      padding: 12px 0;
      border: 0;
      background-color: #fff;
      font-size: 1.2em;
      color: #000;
      width: 100%;
    }
    .navbar .logo {
        float: left;
        width: 70%;
        text-align: center;
        margin:10px 45px 12px 0px;
    }
    .navbar .logo img {
        max-height: 40px;
        vertical-align: bottom;
    }
    .navbar .btn-phone {
        position: absolute;
        top: 8px;
        right: 0;
        margin: 5px 0;
        color: #fff;
        font-size: 1.5em;
    }    
    .navbar .btn-search {
        position: absolute;
        top: 12px;
        left: 50px;
        margin: 5px 0;
        color: #fff;
        font-size: 1.2em;
    }
    .header_enquery_form .dropdown-menu {
        left: -80px;
    }
    .btn-enquery{
        width: 50%;margin-bottom: 10px;
    }
    a.bth_read_more {
      border-radius: 5px;
    }
    .btn-default{
      border-radius: 5px !important;
    }
    .header_enquery_form .dropdown-toggle::after {
        display: none;
    }

    @media screen and  (max-width: 767px){
        .navbar-nav .nav-item{
            height: 35px;
            padding-top: 0px;
        }
        #header-nav_bar li a {
            padding: 5px 8px;
        }
        .dropdown .dropdown-menu{
          position: inherit;
          margin-top: -30px !important;
        }
    }

    @media screen and  (min-width: 767px){
        .header_enquery_form .dropdown {
            display: block;
        }
        .header_logo{
            margin-top: 10px;
        }
        .header_enquery_form{
            margin-top: 16px;
        }
        .header_search{
            margin-top: 15px;
        }
        #open_enquiry{
          margin-bottom: 0px;
          position: relative;
          top: 0px;
          height: 40px;
          border-radius: 0px;
        }
        #header-nav_bar li a {
          padding: 0px 18px;
      }
      .header_enquery_form .dropdown span {
          left: -5px;
      }
      .header_enquery_form .dropdown button {
          width: 130px;
      }
    }
    .enquiry_form_popup_contents {
      padding: 24px 0px;
    }
    #toast-container>div {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
        cursor: pointer !important;
        margin-top: 20px;
    }
    @media screen and (max-width: 900px)
    {
      .header_call {
          font-size: 16px;
      }
    }   
    .fields_form_product input::placeholder { 
        color: gray;
        font-size: 14px !important;
    } 
    .fields_form_product textarea::placeholder { 
        color: gray;
        font-size: 14px !important;
    } 
    .fields_form_product select{ 
        color: gray !important;
        font-size: 14px !important;
    } 
    .contact_form select{ 
        color: gray !important;
        font-size: 14px !important;
    } 
    .fields_form_product input{
        color: #000 !important;
        font-size: 14px !important;
    }
</style>

<div class="container-fluid" id="header_nav">
    <div class="container" style="padding: 0px;">
        <nav class="navbar navbar-expand-sm  navbar-light bg-light ">
          <button class="navbar-toggler btn_mobile_bef" type="button" data-toggle="collapse" data-target="#header-nav_bar " aria-controls="header-nav_bar " aria-expanded="false" aria-label="Toggle navigation" style="padding: 0;">
            <span class="navbar-toggler-icon"></span>
          </button>          
          <button class="navbar-toggler btn_mobile_aft" type="button" data-toggle="collapse" data-target="#header-nav_bar " aria-controls="header-nav_bar " aria-expanded="false" aria-label="Toggle navigation" style="padding: 0;display: none; ">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a href="javascript:;" class="btn-search search_manuf hidden-xs">
              <i class="fa fa-search"></i>
          </a>  
          <div class="logo hidden-xs">
              <a href="<?php echo base_url(); ?>">
                  <picture>
                      <img src="<?php echo base_url(); ?>uploads/obso_logo_white.png">
                  </picture>
              </a>
          </div>                    
          <?php 
              $contact=$this->common_model->get_contact();
              foreach ($contact as $contact) { ?>
              <a href="tel:<?php echo $contact['phone']; ?>" class="btn-phone hidden-xs">
                  <i class="fa fa-phone"></i>
              </a>
          <?php } ?>

            <div class="dropdown header_enquery_form" style="display: none;">
              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background: none;border: 1px solid #fff; padding: 0px 2px;margin-top: 10px;margin-bottom: 10px;">
                <img src="<?php echo base_url(); ?>/assets/home/img/uk.png" style="width:25px;" alt="img">
              </button>
              <ul class="dropdown-menu" style="padding-left: 10px;">
                <li>
                  <a href="http://www.obso.com">
                    <img src="<?php echo base_url(); ?>/assets/home/img/uk.png" style="width:25px;" alt="img"> UK
                  </a>
                </li>

                <li>
                  <a href="http://www.obso.co.es">
                    <img src="<?php echo base_url(); ?>/assets/home/img/spain.png" style="width:25px;" alt="img"> Spain
                  </a>
                </li>

                <li>
                  <a href="http://www.obso.co.fr">
                    <img src="<?php echo base_url(); ?>/assets/home/img/france.png" style="width:25px;" alt="img"> France
                  </a>
                </li>

                <li>
                  <a href="http://www.obso.co.mx">
                    <img src="<?php echo base_url(); ?>/assets/home/img/mexico.png" style="width:25px;" alt="img"> Mexico
                  </a>
                </li>

                <li>
                  <a href="http://www.obso.it">
                    <img src="<?php echo base_url(); ?>/assets/home/img/italy.png" style="width:25px;" alt="img"> Italy
                  </a>
                </li>

                <li>
                  <a href="http://www.obso.in">
                    <img src="<?php echo base_url(); ?>/assets/home/img/india.png" style="width:25px;" alt="img"> India
                  </a>
                </li>

                <li>
                  <a href="http://www.obso.nl">
                    <img src="<?php echo base_url(); ?>/assets/home/img/netherland.png" style="width:25px;" alt="img"> Netherlands
                  </a>
                </li>

                <li>
                  <a href="http://www.obso.de">
                    <img src="<?php echo base_url(); ?>/assets/home/img/germany.png" style="width:25px;" alt="img"> Germany
                  </a>
                </li>

                <li>
                  <a href="http://www.obso.us">
                    <img src="<?php echo base_url(); ?>/assets/home/img/us.png" style="width:25px;" alt="img"> United States
                  </a>
                </li>

                <li>
                  <a href="http://www.obso.ca">
                    <img src="<?php echo base_url(); ?>/assets/home/img/canada.png" style="width:25px;" alt="img"> Canada
                  </a>
                </li>
              </ul>
            </div>
            <?php
            if($this->session->flashdata('msg')){
                ?>
                <script type="text/javascript">
                    $(function () { 
                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-center",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "3000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                        Command: toastr["success"]("<?= $this->session->flashdata('msg'); ?>")
                    });
                </script>
                <?php
            }
            ?>
            <div class="collapse navbar-collapse" id="header-nav_bar">
                <ul class="navbar-nav mr-auto mt-lg-0">
                    <li class="nav-item <?= ($page == '') ? 'active' : '';?>">
                        <a class="nav-link" href="<?php echo base_url(); ?>home/">Home <span class="sr-only">(current)</span></a>
                    </li>        
                    <li class="nav-item <?= ($currentSegment == 'product') ? 'active' : '';?> dropdown dmenu">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                          Manufacturers
                        </a>
                        <div class="dropdown-menu sm-menu">
                        	<?php foreach ($allmanufacturer as $manufacturerall){ 
                              if($manufacturerall['featured']==1){
                            ?>
                          <a class="dropdown-item" href="<?php echo base_url(); ?>home/product/<?php echo preg_replace('/\s+/', '_', $manufacturerall['manufacturer']); ?>"><?php echo $manufacturerall['manufacturer']; ?></a>
                         
                      <?php }} ?>
                          <a class="dropdown-item" href="<?php echo base_url(); ?>home/product/" style="    background: #fee133;font-weight: 600;">View All</a>
                        </div>
                    </li>
                    <li class="nav-item <?= ($page == 'payment') ? 'active' : '';?>">
        	           <a class="nav-link" href="<?php echo base_url(); ?>home/payment">Ordering</a>
        	        </li>
                    <li class="nav-item <?= ($page == 'about') ? 'active' : '';?>">
                        <a class="nav-link" href="<?php echo base_url(); ?>home/about">About Us</a>
                    </li> 
                    <li class="nav-item <?= ($page == 'contact') ? 'active' : '';?>">
                        <a class="nav-link" href="<?php echo base_url(); ?>home/contact">Contact Us</a>
                    </li>
                    <li class="nav-item hidden-xs">
                      <div class="header-enquery">
                      <button id="open_enquiry" class="btn-enquery open_enquiry">
                        <span class="fab fa-whatsapp"></span>Part Enquiry</button>
                        <div class="enquiry_form" style="display: none;">
                        <div class="enquiry_form_header">
                          <h1 style="font-size:14px;">New Enquiry</h1>
                          <span class="fas fa-times enquiry_form_close" id="enquiry_form_close"></span>
                        </div>
                        <div class="enquiry_form_input_field_s">
                            <div class="fields_form_product" style="padding-bottom: 0px;overflow-y: scroll;height: 450px;">
                            <!-- <?php $this->load->helper('form'); ?> -->

                                <?php echo form_open('Home/save' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>
                                <div class="input-parent">
                                    <input type="text" name="enquiry[full_name]"  class="form-control" placeholder="Full Name" required />
                                </div>

                                <div class="input-parent">
                                    <input type="text" name="enquiry[company_name_front]"  class="form-control" placeholder="Company Name" required />
                                </div>

                                <div class="input-parent">
                                    <input type="text" name="enquiry[email]"  class="form-control" placeholder="Email Address" required />
                                </div>

                                <div class="input-parent">
                                  <input type="text" name="enquiry[number]"  class="form-control" placeholder="Phone Number" required />
                                </div>

                                <?php
                                    $all_country=$this->common_model->get_all_country();
                                ?>

                                <div class="input-parent">
                                    <select name="enquiry[country_id]" class="form-control" style="font-size: 15px; color: gray;" required>
                                        <option>Select Country</option>
                                        <?php
                                        foreach ($all_country as $key => $country) {
                                            ?>
                                            <option value="<?= $country['id']; ?>"><?= $country['name']; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="row clone-row" style="margin: 0px;">  
                                    <div class="w-100" id="multiple_part_qty_mobile">
                                        <div class="w-100" id="enquiry_form_home_popup">
                                            <div class="input-parent">
                                                <input type="text" required name="qty[0][part]"  class="form-control input-two" placeholder="Part Number"  style="margin-bottom: 5px;"/>
                                            </div>
                                            <div class="input-parent">
                                                <select name="qty[0][qty]" class="form-control input-one" required>
                                                    <option value="1">Quantity 1</option>
                                                    <option value="2">Quantity 2</option>
                                                    <option value="3">Quantity 3</option>
                                                    <option value="4">Quantity 4</option>
                                                    <option value="5">Quantity 5</option>
                                                    <option value="6">Quantity 6</option>
                                                    <option value="7">Quantity 7</option>
                                                    <option value="8">Quantity 8</option>
                                                    <option value="9">Quantity 9</option>
                                                    <option value="10">Quantity 10</option>
                                                    <option value="11">Quantity 11</option>
                                                    <option value="12">Quantity 12</option>
                                                    <option value="13">Quantity 13</option>
                                                    <option value="14">Quantity 14</option>
                                                    <option value="15">Quantity 15</option>
                                                    <option value="16">Quantity 16</option>
                                                    <option value="17">Quantity 17</option>
                                                    <option value="18">Quantity 18</option>
                                                    <option value="19">Quantity 19</option>
                                                    <option value="20">Quantity 20</option>
                                                </select>
                                            </div>
                                        </div> 
                                    </div> 
                               
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12 pdl">
                                                <a href="#" class="add_new_part clone-row-btn-mobile"> Add New Part </a>
                                            </div>
                                        </div>
                                    </div>
                    
                                </div>

                            <div class="form-group w-100" id="form-group-budgets">
                              <!-- <input type="text" name="" placeholder="Notes: (Competition / Previous Prices/Budget)"> -->
                              <textarea type="text" name="enquiry[lead2]"  class="form-control" placeholder="Notes" height="100px;"></textarea>
                          </div>
                        <div class="">
                            <input type="hidden" name="page" value="frontend">
                            <!--  <button type="submit" name="submit" class="add_new_part btn btn-primary btn-lg btn-block waves-effect waves-light btn-radius" style="padding: 10px;background-color: #3c3c3c;">Enquiry</button> -->

                            <button type="submit" name="submit" class="proo_list_enquiry_button">Submit Enquiry</button>
                    
                            <!-- <button type="submit" class="btn btn-default">Enquiry</button> -->
                        </div>
                        <?php echo form_close();?>
                        <div class="enquiry_form_popup_contents">
                          <h5 style="font-size:14px;"><strong> Need help quickly? Please call us on :</strong></h5>
                          <!-- <p>Contact us through our deticated 24X7 customer care numberfor quick response.</p> -->
                          <h5> <strong><?php echo $contact['phone']; ?></strong></h5>
                          <p>Our helpful and friendly team will do all we can to help answer your enquiry as quickly as possible.</p>
                        </div>
                          </div>
                        </div>
                        
                      </div>
                      </div>
                    </li>
                </ul>
            </div>
            <script>
          		$(document).ready(function(){
          			$(".enquiry_form").hide();

          		    $(".open_enquiry").click(function(){
          		        $("#header-nav_bar").addClass('show');
                        $(".enquiry_form").toggle();
          		    });

          		    $(".enquiry_form_close").click(function(){
          		        $(".enquiry_form").toggle();
          		    });  

                    $(".search_manuf").click(function(){
                        $("#mobile-search").toggle();
                    });

                    $(".btn_mobile_bef").on('click',function(){
                        $('.btn_mobile_aft').show();
                        $('.dropdown').show();
                        $('.search_manuf').hide();
                        $('.btn_mobile_bef').hide();
                        $('.logo').hide();
                        $('.btn-phone').hide();
                    });        

                    $(".btn_mobile_aft").on('click',function(){
                        $('.btn_mobile_bef').show();
                        $('.dropdown').hide();
                        $('.search_manuf').show();
                        $('.btn_mobile_aft').hide();
                        $('.logo').show();
                        $('.btn-phone').show();
                    });

          		});
          	</script>

    		<?php 
                $allcompanies = $this->common_model->getAllCompanies();
            ?>

            <div class="header-enquery hidden-lg">
              	<button id="open_enquiry" class="btn-enquery open_enquiry"><span class="fab fa-whatsapp"></span>Part Enquiry</button>
              	<div class="enquiry_form" style="display: none;">
              		<div class="enquiry_form_header">
              			<h1 style="font-size:14px;">New Enquiry</h1>
              			<span class="fas fa-times enquiry_form_close" id="enquiry_form_close"></span>
              		</div>
              		<div class="enquiry_form_input_field_s">
              			<div class="fields_form_product" style="padding-bottom: 0px;overflow-y: scroll;height: 490px;">
    					  <!-- <?php $this->load->helper('form'); ?> -->

                        <?php echo form_open('home/save' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>

                        	<div class="input-parent">
    					      <input type="text" required name="enquiry[full_name]"  class="form-control" placeholder="Full Name" />
    					    </div>

    					    <div class="input-parent">
    					      <input type="text" required name="enquiry[company_name_front]"  class="form-control" placeholder="Company Name" />
    					    </div>

    					    <div class="input-parent">
    					       <input type="text" required name="enquiry[email]"  class="form-control" placeholder="Email Address" />
    					    </div>

    					    <div class="input-parent">
    					      <input type="text" required name="enquiry[number]"  class="form-control" placeholder="Phone Number" />
    					    </div>

                            <?php
                                $all_country=$this->common_model->get_all_country();
                            ?>

                            <div class="input-parent">
                                <select name="enquiry[country_id]" class="form-control input-one" style="font-size: 15px; color: gray;" required>
                                    <option>Select Country</option>
                                    <?php
                                    foreach ($all_country as $key => $country) {
                                        ?>
                                        <option value="<?= $country['id']; ?>"><?= $country['name']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>

                                <br />
                            </div>

        					<div class="row clone-row" style="margin: 0px;">	
        					   <div class="w-100" id="multiple_part_qty">
                                    <div class="w-100" id="enquiry_form_home_popup">
            					    	<div class="input-parent">
            					    		<input type="text" required name="qty[0][part]"  class="form-control input-two" placeholder="Part Number"  style="margin-bottom: 5px;"/>
            					    	</div>
            					    	<div class="input-parent">
                                            <select name="qty[0][qty]" class="form-control input-one" required>
                                                <option value="1">Quantity 1</option>
                                                <option value="2">Quantity 2</option>
                                                <option value="3">Quantity 3</option>
                                                <option value="4">Quantity 4</option>
                                                <option value="5">Quantity 5</option>
                                                <option value="6">Quantity 6</option>
                                                <option value="7">Quantity 7</option>
                                                <option value="8">Quantity 8</option>
                                                <option value="9">Quantity 9</option>
                                                <option value="10">Quantity 10</option>
                                                <option value="11">Quantity 11</option>
                                                <option value="12">Quantity 12</option>
                                                <option value="13">Quantity 13</option>
                                                <option value="14">Quantity 14</option>
                                                <option value="15">Quantity 15</option>
                                                <option value="16">Quantity 16</option>
                                                <option value="17">Quantity 17</option>
                                                <option value="18">Quantity 18</option>
                                                <option value="19">Quantity 19</option>
                                                <option value="20">Quantity 20</option>
                                            </select>
            					    	</div>
            					    </div>                                    
                                </div>  

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12 pdl">
                                            <a href="#" class="add_new_part clone-row-btn"> Add New Part </a>
                                        </div>
                                    </div>
                                </div>
              
            				</div>

                            <div class="form-group w-100" id="form-group-budgets">
                              <!-- <input type="text" name="" placeholder="Notes: (Competition / Previous Prices/Budget)"> -->
                              <textarea type="text" name="enquiry[lead2]"  class="form-control" placeholder="Notes" height="100px;"></textarea>
                            </div>

        				<div class="">
        					<input type="hidden" name="page" value="frontend">
        				    <!-- 	<button type="submit" name="submit" class="add_new_part btn btn-primary btn-lg btn-block waves-effect waves-light btn-radius" style="padding: 10px;background-color: #3c3c3c;">Enquiry</button> -->

                            <button type="submit" name="submit" class="proo_list_enquiry_button">Submit Enquiry</button>
                
        					<!-- <button type="submit" class="btn btn-default">Enquiry</button> -->
        				</div>
        				<?php echo form_close();?>
        				<div class="enquiry_form_popup_contents">
        					<h5 style="font-size:14px;"><strong> Need help quickly? Please call us on :</strong></h5>
        					<!-- <p>Contact us through our deticated 24X7 customer care numberfor quick response.</p> -->
        					<h5> <strong><?php echo $contact['phone']; ?></strong></h5>
        					<p>Our helpful and friendly team will do all we can to help answer your enquiry as quickly as possible.</p>
        				</div>
              		</div>
              	</div>
            </div>
        </nav>
	</div>
</div>
<!-- Header end -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$(document).on('click',function(){
		jQuery('.search-form').hide();	
    jQuery('.mobile-search-form').hide();  
	})
})
$('#search_text').keyup(function(){
	var searchvl = $(this).val();
	if(searchvl == ""){
		jQuery('.search-form').hide();
	}else{
      $.ajax({
        url: '<?php echo base_url();?>home/ajaxpartnumber/' + searchvl ,
        success: function(response)
        {
          if(response)
          {
            jQuery('#result').html(response);
            jQuery('.search-form').show();
          }else{
            jQuery('#result').html('');
            jQuery('.search-form').hide();
          }
        }
    });
  }
  
});
$('#mobile-search-input').keyup(function(){
  var searchvl = $(this).val();
  if(searchvl == ""){
    jQuery('.mobile-search-form').hide();
  }else{
      $.ajax({
        url: '<?php echo base_url();?>home/ajaxpartnumber/' + searchvl ,
        success: function(response)
        {
          if(response)
          {
            jQuery('#mobile-result').html(response);
            jQuery('.mobile-search-form').show();
          }else{
            jQuery('#mobile-result').html('');
            jQuery('.mobile-search-form').hide();
          }
        }
    });
  }
  
});
</script>

 <script>
        $(document).ready(function(){
            
            let i = 1;
            let j = 1;

            // add new section on full screen
            $(document).on('click', '.clone-row-btn',function(){

                html = '<div class="prem_add-'+i+'"><br/><div class="w-100" id="enquiry_form_home_popup"><div class="input-parent"><input type="text" required name="qty['+i+'][part]"  class="form-control input-two" placeholder="Part Number"  style="margin-bottom: 5px;"/></div><div class="input-parent"><select name="qty['+i+'][qty]" class="form-control input-one" required><option value="1">Quantity 1</option><option value="2">Quantity 2</option><option value="3">Quantity 3</option><option value="4">Quantity 4</option><option value="5">Quantity 5</option><option value="6">Quantity 6</option><option value="7">Quantity 7</option><option value="8">Quantity 8</option><option value="9">Quantity 9</option><option value="10">Quantity 10</option><option value="11">Quantity 11</option><option value="12">Quantity 12</option><option value="13">Quantity 13</option><option value="14">Quantity 14</option><option value="15">Quantity 15</option><option value="16">Quantity 16</option><option value="17">Quantity 17</option><option value="18>Quantity 18</option><option value="19">Quantity 19</option><option value="20">Quantity 20</option></select></div><div class="col-md-12 pdr text-right"><a href="javascript:;" class="remove-clone" id="prem_delete-'+i+'"><i class="fa fa-trash"></i></a></div></div></div>';

                $('#multiple_part_qty').append(html)

                i++;
            }); 

            // Remove a section on full screen
            $(document).on('click','.remove-clone', function(){

                var its_id = $(this).attr('id');

                var temp = its_id.split('-');

                $('.prem_add-'+temp[1]).remove();
                
            });

            // Add a new section on mobile screen
            $(document).on('click', '.clone-row-btn-mobile',function(){

                html = '<div class="prem_add_mobile-'+j+'"><br/><div class="w-100" id="enquiry_form_home_popup"><div class="input-parent"><input type="text" required name="qty['+j+'][part]"  class="form-control input-two" placeholder="Part Number"  style="margin-bottom: 5px;"/></div><div class="input-parent"><select name="qty['+j+'][qty]" class="form-control input-one" required><option value="1">Quantity 1</option><option value="2">Quantity 2</option><option value="3">Quantity 3</option><option value="4">Quantity 4</option><option value="5">Quantity 5</option><option value="6">Quantity 6</option><option value="7">Quantity 7</option><option value="8">Quantity 8</option><option value="9">Quantity 9</option><option value="10">Quantity 10</option><option value="11">Quantity 11</option><option value="12">Quantity 12</option><option value="13">Quantity 13</option><option value="14">Quantity 14</option><option value="15">Quantity 15</option><option value="16">Quantity 16</option><option value="17">Quantity 17</option><option value="18">Quantity 18</option><option value="19">Quantity 19</option><option value="20">Quantity 20</option></select></div><div class="col-md-12 pdr text-right"><a href="javascript:;" class="remove-clone-mobile" id="prem_delete-'+j+'"><i class="fa fa-trash"></i></a></div></div></div>';
                $('#multiple_part_qty_mobile').append(html)

                j++;
            }); 

            // Remove a section on mobile screen
            $(document).on('click','.remove-clone-mobile', function(){

                var its_id = $(this).attr('id');

                var temp = its_id.split('-');

                $('.prem_add_mobile-'+temp[1]).remove();
                
            });

            $(document).on('change','.ajax-change',function(){
                var val = $(this).val();

                var ajaxType = $(this).data('ajax');

                $('.ajax-phone').val("");
                $('.ajax-number').val("");
                $.ajax({
                    type: 'get',
                    url: "<?php echo base_url() ?>admin/enquiry/getIndustry",
                    data: {id:val,type: ajaxType},
                    success: function(result){
                        if(result != ""){

                            var obj = JSON.parse(result);

                            if(obj.company){
                                $(".industry-select").html(obj.company);
                            }
                            if(obj.contact){
                                $(".contact-select").html(obj.contact);
                            }

                            if(obj.number != ""){
                                $('.ajax-phone').val(obj.number);
                            }
                            if(obj.email != ""){
                                $('.ajax-email').val(obj.email);
                            }
                        }
                    }
                });
            });
        });

</script>

<script type="text/javascript">
    $(window).scroll(function(){
        var sticky = $('.sticky'),
        scroll = $(window).scrollTop();

        if (scroll >= 100) sticky.addClass('fixed');
        else sticky.removeClass('fixed');
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<style type="text/css">
    .fixed {
    z-index: 2;
    position: fixed;
    top:0; left:0;
    width: 100%;
    }
    #header-nav_bar li a:hover {
      color:#000 !important;
    }
    .dropdown-item:focus, .dropdown-item:hover {
      color: #16181b !important;
      text-decoration: none !important;
      background-color: #fee300 !important;
      border-radius: 0px !important;
    }
    .dropdown-item.active, .dropdown-item:active{
    background-color: #f5cc1c !important;
    }
    .proo_list_enquiry_button{
    background: #f5cc1c;
    border: unset;
    border-radius: 20px;
    padding: 10px 40px !important;
    font-size: 12px;
    text-transform: capitalize;
    font-weight: 600;
    /* text-align: center; 
    margin-left: 50px !important;*/
    }    
</style>        