<style type="text/css">

    .icon-arrow-left7 {
        left: 0;
    }
    .icon {
        /* background: rgba(255, 255, 255, .6); */
        color: #3c3c3c;
        font-family: 'FontAwesome';
        font-size: 35px;
        line-height: 60px;
        margin-top: -50px;
        position: absolute;
        top: 50%;
        text-align: center;
        width: 60px;
        height: 60px;
    }
    .icon-arrow-left7:before {
        content: "\f053";
    }
    .icon-arrow-right7 {
        right: 0;
    }
    .icon-arrow-right7:before {
        content: "\f054";
    }
    #slider .row{
    	margin-top: 0px;
    	/* position: absolute; */
    }
    .col-md-6, .col-md-4{
    	float: left;
    }
    .mt100{
	    margin-top: 70px;
    }
    .home_buttons a {
	    padding: 10px 40px;
    	margin-top: 5px;
	}
	h2.heading {
	    margin-top: 70px;
	    margin-bottom: 70px;
	}
	.p-40{
		padding-left: 40px;
	}
	.owl-nav{
		display: none;
	}
	#slider h1{
		text-transform: uppercase;
	}
	h2.heading {
	    text-transform: none!important;
	}
	#about_more .inner_body{
	    border-radius: 16px;
	}

	.p-md{
		padding: 100px 0px;
	}
	.banner-img{
		background-image: url('<?php echo base_url(); ?>assets/home/img/img_banner.jpg');background-position: right;background-repeat: no-repeat;background-size: contain;
	}
	#home_3nd_banner{
		background-image: url('<?php echo base_url(); ?>assets/home/img/box-with-hand.png');background-position: left;background-repeat: no-repeat;background-size: contain;
		height: 480px;
		background-color: #efefef;
	}
	.owl-theme .owl-dots .owl-dot.active span {
	    width: 15px !important;
	    height: 15px !important;
	    background: #3c3c3c !important;
	}	
	.owl-theme .owl-dots .owl-dot span {
	    width: 15px !important;
	    height: 15px !important;
	    background: #fff !important;
	}
	.l-m-btn{
		padding: 10px 48px;
	}
	.home_content_3nd {
	    width: 100%;
	}
	.home_content_3nd{
		text-align: right;
		padding-top: 120px;
	}
	.home_content_3nd p{
		color:#000!important;
	}
	.home_content_3nd h1{
		font-weight: 800;
		color:#000 !important;
	}

	/* Extra large devices (large laptops and desktops, 1200px and up) */
	@media only screen and (max-width: 1200px) {
		.p-md{
			padding: 40px 0px;
		}
		#slider h1 {
			font-size: 24px;
		    margin-top: 0px;
		    padding-bottom: 20px;
		    padding-left: 0px;
		    padding-right: 30px;
		    padding-top: 30px;
    		font-weight: 800;
		}
		.home_buttons a {
		    padding: 10px 30px;
	    	margin-top: 5px;
		}
	}

	/* Large devices (laptops/desktops, 992px and up) */
	@media only screen and (max-width: 992px) {
		.banner-img{
			height: 245px;
		}
		.c-b-img{
			height: auto!important;
		}
		.p-md{
			padding:30px 10px !important;
		}
		#slider h1 {
		    font-size: 28px;
		}
		.home_buttons a {
		    padding: 10px 20px!important;
		}
	}
	@media only screen and (max-width: 768px)
	{
		.home_content_3nd{
			padding-top: 50px;
		}	
		#home_3nd_banner{
			height: auto;
		    background-size: contain;
		}
		.home_content_3nd p {
		    margin-bottom: 2px;
		}
		.home_buttons a {
		    padding: 5px 15px!important;
		}
		.c-b-img{
			height:232px!important;
		}
		.p-md{
			padding:40px 0px !important;
			width: 70%;
    		display: inline-block;
		}
		#about_more h2 {
		    margin-top: 0px;
		}
		#slider {
		    background-position: center !important;
		}
		.p-40{
			padding-left: 0px;
		}
		#slider h1 {
		   	font-size: 24px !important;
		    margin-top: 0px;
		    padding-bottom: 10px;
		    padding-left: 10px;
		    padding-right: 30px;
		    padding-top: 0px;
		    font-weight: 800;
		}
		.owl-nav .icon {
		    font-size: 20px;
		    top: 65%;
		}				
		.banner-img{
			background-size: contain !important;
			height: 245px;
		}
		#home_3nd_banner {
		    height: auto !important;
		}
	}
	@media only screen and (max-width: 600px)
	{
		.home_content_3nd{
			padding-top: 10px;
		}
		#home_3nd_banner{
			height: auto;
		    background-size: contain;
		}
		.home_content_3nd h1 {
		    margin-bottom: 5px;
		    font-size: 18px;
		}
		.home_content_3nd p {
		    margin-bottom: 2px;
		}
		.home_buttons a {
		    padding: 5px 15px!important;
		}

		.banner-img{
			height: 190px;
		}
		.c-b-img{
			height: 158px!important;
		}
		.p-md{
			padding:20px 0px !important;
			width: 70%;
    		display: inline-block;
		}
		#slider h1 {
		   	font-size: 18px;
		}
	}
	@media only screen and (max-width: 414px)
	{
		.home_content_3nd{
			padding-top: 20px;
		}	
		#home_3nd_banner{
			height: auto;
		}
		.home_content_3nd h1 {
		    margin-bottom: 5px;
		    font-size: 16px;
		}
		.home_content_3nd p {
		    margin-bottom: 2px;
		}
		.home_buttons a {
		    padding: 5px 15px!important;
		}
		.c-b-img{
			height: 145px!important;
		}
		.p-md{
			padding:20px 0px !important;
		}
		.p-md h2{
			font-size: 20px !important;
			width: 60%;
		}
	}
	.inner_body {
	    transition: 0.0s ease-in-out;
	    border-radius: 5px !important;
	}
	#about_more .inner_body:hover {
	    box-shadow: 0 0 0px #ecbe28;
	}

	@media only screen and (min-device-width: 769px) and (max-device-width: 1024px)  {
      	.l-m-btn{
			padding: 10px 42px;
		}
		#home_3nd_banner {
		    background-size: contain;
		    height: auto !important;
		}
		.home_content_3nd h1 {
		    margin-bottom: 5px;
		}
    }
</style>

<div class="container-fluid c-b-img" style="background: #fee300;">
	<div class="row banner-img">
		<div class="container">
			<div id="slider" class="owl-carousel owl-theme">				
				<?php
				$slider=$this->common_model->get_all_slider();
				foreach ($slider as $key => $slider) { 
					?>
				
					<div class="item">
						<div class="container">
							<div class="">
								<div class="row">
									<div class="col-md-6 p-md">
										<h2><?php echo $slider['title'];?></h2>
										<p><?php echo $slider['description'];?></p>
										<div class="col-md-4 col-xs-6 pdl" style="padding:0px;">
											<div class="home_buttons">
												<a href="<?php echo base_url(); ?>home/about" class="l-m-btn"> Learn More </a>
											</div>
										</div>
										<div class="col-md-4 col-xs-6" style="padding:0px;">
											<div class="home_buttons">
												<a href="#" class=""> Parts Enquiry </a>
											</div>
										</div>
									</div>
									<div class="col-md-6">
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>



<?php $front=$this->common_model->get_single_home_frontt(); 
foreach ($front as $front) { ?>

<div class="container-fluid" id="about_more">
	<div class="container">
		<h2 class="heading"><?php echo $front['main_title']; ?></h2>
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="inner_body">
					<a href="home/about">
						<div class="icon_section">
							<img src="<?php echo base_url(); ?>uploads/<?php echo $front['image']; ?>" alt="img" style="height: 99px;width: 99px;">

						</div>
						<h4><?php echo $front['title']; ?></h4>
						<p><?php echo $front['description']; ?></p>
					</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="inner_body">
					<a href="home/about">
						<div class="icon_section">

							<img src="<?php echo base_url(); ?>uploads/<?php echo $front['image_1']; ?>" alt="img" style="height: 99px;width: 99px;">

						</div>

						<h4><?php echo $front['title_1']; ?></h4>

						<p><?php echo $front['description_1']; ?></p>
					</a>

				</div>

			</div>

			<div class="col-md-4 col-sm-6">

				<div class="inner_body">
					<a href="home/about">
						<div class="icon_section">

							<img src="<?php echo base_url(); ?>uploads/<?php echo $front['image_2']; ?>" alt="img" style="height: 99px;width: 99px;">

						</div>

						<h4><?php echo $front['title_2']; ?></h4>

						<p><?php echo $front['description_2']; ?></p>
					</a>

				</div>

			</div>

		</div>

	</div>

</div>



<div class="container-fluid" id="home_3nd_banner">

	<div class="container">
		<div class="col-md-6">
			&nbsp;
		</div>
		<div class="col-md-6">
			<div class="home_content_3nd">
				
				<h1><?php echo $front['part_title']; ?></h1>

				<p><?php echo $front['part_description']; ?></p>

				<div class="home_buttons">

					<a href="javascript:;" class="btn-yellow open_enquiry"> Parts Enquiry </a>

				</div>

			</div>
		</div>

	</div>

</div>



<div class="container-fluid" id="home_4nd_section">

	<div class="container">

		<div class="title_parent">

			<h1><strong><?php echo $front['part_cat_title']; ?></strong></h1>

			<p><?php echo $front['part_cat_description']; ?></p>

		</div>

	<?php  } ?>

		<div class="row" id="part_category_row">

			<div class="col-md-12">

				<div class="category_inners">

					<!-- <div class="category_header">
					
						<div class="cate_icon_parent"><img src="<?php echo base_url(); ?>/assets/home/img/icon_cate.png" alt="img"></div>
					
						<h3><?php echo $front['part_cat_heading']; ?></h3>
					
					</div> -->

					<div class="category_content">

						<style>
							.main_cat:hover{
							    color: #f5cc1c!important;
							}
							.main_cat{
							    color: gray!important;
							    margin-bottom: 3px!important;
							    font-size: 14px!important;
							    margin-bottom: 3px!important;
							    list-style: none!important;
							}
							.sub_cat{
							    margin-bottom: 3px!important;
							    padding-top: 5px;
							    font-size: 14px!important;
							    margin-bottom: 3px!important;
							    list-style: none!important;
							}
						</style>

						<div class="row">
							<?php 
							$categories = $this->common_model->get_all_categories();

							foreach ($categories as $category) { 
								?>
								<div class="col-md-3 col-sm-6 bosom_ul">
									<ul class="category_links">

										<li class="main_cat">
											<strong><?= $category['categories']; ?></strong>
										</li>

										<?php 
										$subcategories = $this->common_model->get_subcategories_by_id($category['categories']);

										if(!empty($subcategories)):

											foreach ($subcategories as $subcategory) { 
												?>
												<li class="sub_cat"><?= $subcategory['subcategories']; ?></li>
												<?php 
											} 
										endif; 
										?>
									</ul>
								</div>
								<?php 
							} 
							?>	
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<!-- Main end  -->

<style type="text/css">

#owl-demo .item img{
    display: block;
    width: 100%;
}
.owl-dots button:nth-child(1) span::after {

    content: "";

    border-top: 0px solid #000; 

    border-left: 0px solid #000;

    position: absolute;

    width: 5px;

    height: 5px;

    transform: rotate(-50deg);

    left: 13px;

    top: 10px;

}



.owl-dots button:nth-child(2) span::after {

    content: "";

    border-top: 0px solid #000;

    border-left: 0px solid #000;

    position: absolute;

    width: 5px;

    height: 5px;

    transform: rotate(134deg);

    left: 9px;

    top: 10px;

}

.btn-primary {

    color: #fff;

    background-color: #007bff;

    border-color: #000;

}
</style>



<script type="text/javascript">

	$(document).ready(function() {

 

  $("#owl-demo").owlCarousel({

      items : 1, 

      itemsDesktop : true,

      itemsDesktopSmall : true,

      itemsTablet: true,

      itemsMobile : true

  });

});

</script>