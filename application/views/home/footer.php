

<!-- footer start -->
<style type="text/css">
	#footer{
		background-color: #7f7f7f;
		padding-top: 10px;
		padding-bottom: 10px !important;
	}
	#footer_top{
	    background-size: 100% 100%;
	    margin-bottom: -1px;
	    padding: 40px;
	    background-image: url('<?php echo base_url(); ?>assets/home/img/footer_banner.png');background-position: right;background-repeat: no-repeat;background-size: contain;
		height: 480px;
	}
	.footer_logo_titles {
	    padding: 100px 0px;
	}
	.footer_logo_titles h1{
	    color: #000;
	}
	.color-gray{
		color:gray !important;
	}
	.color-gray:hover{
		color:#fee133 !important;
	}
	.footer_buttons a {
	    padding: 10px 50px;
    	margin-top: 5px;
    	background: #fee133;
		color: #000;
		font-weight: 700;
	}
	@media only screen and (max-width: 992px) {
		.footer_logo_titles {
		    padding: 10px 0px;
		}
		#footer_top {
		    padding: 20px;
		}
	} 
	@media only screen and (max-width: 768px)
	{
		.footer_logo_titles {
		    padding: 30px 0px;
		}
		#footer_top{
		    background-size: 100% 100%;
		    margin-bottom: -1px;
		    padding: 5px;
	    	height: 300px;
		}	
	}
	@media only screen and (max-width: 600px)
	{
		.footer_logo_titles {
		    padding: 50px 0px;
		}
		#footer_top {
		    padding: 1px;
	    	height: 280px;
		}
	}
	#header-nav_bar .active a{
        color: #000!important;
    }
	@media only screen and (max-width: 414px)
	{
		.footer_logo_titles {
		    padding: 20px 0px;
		}
		.footer_logo_titles p {
		   	margin: 8px 0px;
    		font-size: 14px;
		}
		.footer_buttons a {
		    padding: 5px 40px;		    
		}
		#footer_top {
		    padding: 1px;
	    	height: 200px;
		}
	}
</style>
<div class="container-fluid" id="footer">

	<div class="row" id="footer_top">

		<div class="container">

			<div class="row">

				<div class="col-md-6 col-sm-6">

					<div class="footer_logo_titles footer_buttons">

						<h1>100’s of Manufacturers</h1>

						<p style="font-size: 21px;">We supply parts from all the top manufacturers </p>

						<a href="<?= base_url('home/product/');?>">View All</a>

					</div>

				</div>

				<div class="col-md-6 col-sm-6 footer_images">

					<!-- <img src="<?php echo base_url(); ?>/assets/home/img/footer_j.png" alt="img"> -->

				</div>

			</div>

		</div>

	</div>

	<div class="row" id="footer_middle">

		<div class="container">

			<div class="row" id="footer_links">

				<div class="col-md-3 col-sm-4">

					<ul class="footer_link">

						<li><a href="<?php echo base_url(); ?>home/about" class="color-gray">About us </a></li>

						<li><a href="<?php echo base_url(); ?>home/contact" class="color-gray">Contact us </a></li>

						<li><a href="<?php echo base_url(); ?>home/terms_and_conditions" class="color-gray">Terms & Conditions </a></li>

						<li><a href="<?php echo base_url(); ?>home/privacy_policy" class="color-gray">Privacy </a></li>

						<!-- <li><a href="#" class="color-gray">Parts in stock </a></li> -->

					</ul>

				</div>

				<div class="col-md-3 col-sm-4">

					<ul class="footer_link">

						<li><a href="#" class="color-gray">Accessibility</a></li>

						<li><a href="<?= base_url(); ?>home/payment" class="color-gray">Payment </a></li>

						<li><a href="<?= base_url(); ?>home/shipping" class="color-gray">Shipping </a></li>

						<li><a href="<?= base_url(); ?>home/warranty" class="color-gray">Warranty </a></li>

						<li><a href="<?php echo base_url(); ?>home/return_policy" class="color-gray">Return policy</a></li>

					</ul>

				</div>

				<?php

				$contact=$this->common_model->get_contact();

				 foreach ($contact as $contact) { ?>

				<div class="col-md-3 col-sm-4">

					<div class="footer_address color-gray">

						<?php echo $contact['address']; ?>

					</div>

					<p class="header_call"><a href="#" class="color-gray"><?php echo $contact['phone']; ?></a></p>

					<p class="header_mail"><a style="font-size: 12px;" class="color-gray" href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a></p>

				</div>

				 <?php }?>



				 <?php 

				 $social=$this->common_model->get_single_sociall();

				 foreach ($social as $social) { ?>

				 

				<div class="col-md-3 col-sm-4 text-right">

					<ul class="footer_social">

						<li><a href="<?php echo $social['facebbok_url']; ?>"><i class="fa fa-linkedin fa-2x" aria-hidden="true" style="color: lightgray;"></i></a></li>&nbsp

						<li><a href="<?php echo $social['instagram_url']; ?>"><i class="fa fa-twitter fa-2x" aria-hidden="true" style="color: lightgray;"></i></a></li>

						

					</ul>

				</div>

				<?php } ?>

			</div>

		</div>

	</div>

	<div class="row" id="footer_copyright">

		<p><a href="#" style="font-size: 12px;">Copyright © 2019 OBSO. All rights reserved.</a></p>

	</div>

</div> 

<!-- footer end -->

<script>

$(document).ready(function() {

	$('#slider').owlCarousel({

        loop:true,

        items: 1,

        margin:10,

        autoplay: true,

        nav:true,

        dots: true,

    });

});

</script>


<script src="<?php echo base_url(); ?>/assets/home/js/jquery.min.js"></script>

<script src="<?php echo base_url(); ?>/assets/home/js/popper.min.js"></script>

<script src="<?php echo base_url(); ?>/assets/home/js/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>/assets/home/assets/owlcarousel/owl.carousel.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>

  AOS.init();

</script>

</body>

</html>