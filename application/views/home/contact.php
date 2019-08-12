<?php 
$all_country=$this->common_model->get_all_country();
$contact=$this->common_model->get_contact();
foreach ($contact as $contact) 
{ 	?>

<style type="text/css">
	.contact_form{
    	background-color: #f2f2f2;
    }
    .form-input-parent {
	    position: relative;
	    height: 60px !important;
	}
	.input_left {
	    width: 50% !important;
	}
	.input_right {
	    width: 50% !important;
	}
	form.contact_form_form {
	    margin-top: 40px;
	}

	.form-data{
		border:1px solid #000 !important;
		padding: 2px 10px !important;
		width: 90% !important;
		font-size: 14px !important;
		height: 35px !important;
		background-color: #f0f0f0 !important;
		border-radius: 2px;
	}
	.form-input-parent textarea {
	    margin-top: 0px;
	    height: 110px !important;
	    padding-bottom: 2px;
	}
	.my_btn{
		margin:0!important;
		background-color: #fee133!important;
		color: #000!important;
		border:1px solid #fee133 !important;
		font-weight: 700!important;
	}
	p.contnt_of_icon {
	    margin-left: 12px!important;
	    font-size: 16px!important;
	    font-weight: 700!important;
	}
	p.icon_services span {
	    font-size: 22px!important;
	    color: gray !important;
	}
    .item_services p {
        text-align: left;
    }
    #about_us_home_banner_sections{
        padding-left: 0px;
        padding-top: 100px;
        height: 300px;
    }
    .my-image{
        background-image: url(<?php echo base_url(); ?>uploads/about_us.jpg);
        background-size: contain;
        background-repeat: no-repeat;
        background-position: right;
    }
    @media only screen and (max-width: 1200px)
    {
        #about_us_home_banner_sections{
            padding-left: 20px;
            height: 270px;
            padding-top: 80px;
        }
        .my-image{
            background-size: 70% !important;
            background-position: bottom right !important;
        }
    }
    @media only screen and (max-width: 900px)
    {
        #about_us_home_banner_sections{
            padding-left: 20px;
            height: 270px;
            padding-top: 20px;
        }
        .my-image{
            background-size: 70% !important;
            background-position: bottom right !important;
        }
    }
    @media only screen and (max-width: 768px)
    {
        #about_us_home_banner_sections{
            padding-left: 20px;
            height: 250px;
            padding-top: 20px;
        }
        .my-image{
            background-size: 70% !important;
            background-position: bottom right !important;
        }
    }
    @media only screen and (max-width: 600px)
    {
        #about_us_home_banner_sections{
            padding-left: 20px;
            height: 250px;
            padding-top: 20px;
        }
        .my-image{
            background-position: bottom !important;
            background-size: 100% !important;
        }
    }
    @media only screen and (max-width: 400px)
    {
        #about_us_home_banner_sections{
            padding-left: 20px;
            height: 230px;
            padding-top: 20px;
        }
        .my-image{
            background-position: bottom !important;
            background-size: 100% !important;
        }
    }
</style>
<div class="container-fluid" style="background: #ffe300;margin-bottom: 20px;">
    <div class="row align-items-center my-image">
        <div class="container">
            <div class="row ">
                <div class="col-md-6" id="about_us_home_banner_sections">
                    <h1><?php echo $contact['heading']; ?></h1>
                    <p><?php echo $contact['description']; ?></p>
                </div>            
                <div class="col-md-6">
                    <!-- <img src="<?php echo base_url(); ?>uploads/about_us.jpg" class="img-resposive" style="width: 100%;"> -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- about more start -->

<div class="container-fluid" id="home_main">

  <div class="container">

    <div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-3">
			<div class="footer_form_location">
				<div class="address foo_form_column">										
					<p class="icon_services" style="padding-top: 25px;">
						<span class="fas fa-map-marker-alt"></span>										
					</p>
					<p class="contnt_of_icon">
						<!-- <a href="#"> 7644 Cedar Swamp St. <br> Logansport, IN 46947</a> -->

						<?php echo $contact['address']; ?>

					</p>									
				</div>
				<div class="emails foo_form_column">
					<p class="icon_services">
						<span class="fas fa-envelope"></span>
					</p>
					<p class="contnt_of_icon">
					<?php echo $contact['email']; ?>
					</p>
				</div>
				<div class="contact foo_form_column">
					<p class="icon_services">
						<span class="fas fa-mobile"></span>
					</p>
					<p class="contnt_of_icon">
						<?php echo $contact['phone']; ?>
					</p>									
				</div>
			</div>
		</div>
		<div class="col-md-8 contact_form">
			<div class="contact_form_main">
				<?php echo form_open('Home/contact_us' , array('class' => 'contact_form_form')); ?>
					<div class="input_left">
						<label><b>Please fill in.</b></label>
						<div class="form-input-parent">
							<input type="text" class="form-data" name="full_name" placeholder="Full Name" value="" required/>
						</div>
						
						<div class="form-input-parent">
							<input type="Number" class="form-data" name="phone" value="" placeholder="Phone Number"required />
						</div>
						<div class="form-input-parent">
							<input type="email" placeholder="Email Address" class="form-data" name="email" value=""required />
						</div>
					</div>
					<div class="input_right">
						<label>&nbsp;</label>
						<div class="form-input-parent">
							<input type="text" class="form-data" placeholder="Company Name" name="company" value=""required />
						</div>	
						<div class="form-input-parent">
							<select type="select" class="form-data" name="country" required>
								<option>Select Country</option>
								<?php
								foreach ($all_country as $key => $country) {
									?>
									<option value="<?= $country['name']; ?>"><?= $country['name']; ?></option>
									<?php
								}
								?>
							</select>
						</div>																		
						<div class="form-input-parent">
							<button type="submit" class="my_btn form-data btn btn-default"> Contact Us </button>
						</div>
					</div>	
				<?php echo form_close();?>
				<?php
				if($this->session->flashdata('success'))
				{
					?>
						<div class="alert alert-success" style="background-color: #61aa1d;color:#fff;">
							<span><?= $this->session->flashdata('success'); ?></span>
						</div>								
					<?php
				}
				?>
				
			</div>
		</div>
	</div>

  </div>

</div>

<?php } ?>
