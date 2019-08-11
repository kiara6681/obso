

<?php foreach ($about as $about) {

 ?>
<style type="text/css">
    .item_services p {
        text-align: left;
    }
    #about_us_home_banner_sections{
        padding-left: 10px;
        padding-top: 100px;
        height: 300px;
    }
    .my-image{
        background-image: url(<?php echo base_url(); ?>uploads/about_us.jpg);
        background-size: contain;
        background-repeat: no-repeat;
        background-position: right;
    }
    h2.heading {
        text-transform: none!important;
        margin-top: 0px;
        margin-bottom: 0px;
    }
    .home_main{
        background-color: #efefef !important;
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
                    <h1>About Us</h1>
                    <p>Our Wealth of experience can help you</p>
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

        <div class="row align-items-center">
            <div class="col-md-12">
                <h2 class="heading"><?php echo $about['header_title'];?></h2>
                <p class="font-size-sm text-gray-700">
                    <?php echo $about['header_description'];?>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid home_main" id="home_main">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="<?php echo base_url(); ?>uploads/<?php echo $about['image']; ?>" alt="..." class="img-fluid">
                <p style="background: #3c3c3c;color: #fff;padding: 10px 20px;">Our Offices in the UK</p> 
          	</div>
          	<div class="col-md-6">
           	 	<img src="<?php echo base_url(); ?>uploads/<?php echo $about['2_image']; ?>" alt="..." class="img-fluid">
                <p style="background: #3c3c3c;color: #fff;padding: 10px 20px;">Our direct stock ready to go</p>
    	  	</div>
        </div> <!-- / .row --> 

    </div>

</div>


<div class="container-fluid" id="home_main">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <br>
                <h4><strong>What we offer</strong></h4>
                <p>Manufacturing and production line machines often have components and equipment from multiple manufacturers. It is often the case that these machines also vary in age and condition. Budget and economical restraints do not always allow sites to be fully upgraded and keeping reliable and fully functioning machinery operating efficiently is a huge challenge and if you do not have a reliable, quality purchase partner who specialises in this commodity it can become overbearing.</p>
            </div>
            <div class="col-md-6">
                <br>
                <p>Manufacturing and production line machines often have components and equipment from multiple manufacturers. It is often the case that these machines also vary in age and condition. Budget and economical restraints do not always allow sites to be fully upgraded and keeping reliable and fully functioning machinery operating efficiently is a huge challenge and if you do not have a reliable, quality purchase partner who specialises in this commodity it can become overbearing. </p>
            </div>
        </div> <!-- / .row --> 

    </div>

</div>

<!-- about more end -->







<!-- services start -->

<div class="container-fluid" id="services">

	<div class="container">

		<div class="row justify-content-center" id="services_row">

				<div class="row">

					<div class="col-md-4 col-sm-6" data-aos="zoom-in-up">

						<div class="item_services inner_body">

							<img src="<?php echo base_url(); ?>uploads/<?php echo $about['image1']; ?>" alt="img not found" style="height:70px;width:70px;">

							<h5 class="mt-2"><strong><a href="#"><?php echo $about['middle_title']; ?></a></strong></h5>

							<p><?php echo $about['middle_description']; ?></p>

						</div>

					</div>

					<div class="col-md-4 col-sm-6" data-aos="zoom-out-left">

						<div class="item_services inner_body">

							<img src="<?php echo base_url(); ?>uploads/<?php echo $about['image2']; ?>" alt="img not found" style="height:70px;width:70px;">

							<h5 class="mt-2"><strong><a href="#"><?php echo $about['middle_title_1']; ?></a></strong></h5>

							<p><?php echo $about['middle_description_1']; ?></p>

						</div>

					</div>

					<div class="col-md-4 col-sm-6" data-aos="zoom-in-up">

						<div class="item_services inner_body">

							<img src="<?php echo base_url(); ?>uploads/<?php echo $about['image3']; ?>" alt="img not found" style="height:70px;width:70px;">

							<h5 class="mt-2"><strong><a href="#"><?php echo $about['middle_title_2']; ?></a></strong></h5>

							<p><?php echo $about['middle_description_2']; ?></p>

						</div>

					</div>

					<div class="col-md-4 col-sm-6" data-aos="zoom-out-left">

						<div class="item_services inner_body">

							<img src="<?php echo base_url(); ?>uploads/<?php echo $about['image4']; ?>" alt="img not found" style="height:70px;width:70px;">

							<h5 class="mt-2"><strong><a href="#"><?php echo $about['middle_title_3']; ?></a></strong></h5>

							<p><?php echo $about['middle_description_3']; ?></p>

						</div>

					</div>

					<div class="col-md-4 col-sm-6" data-aos="zoom-in-up">

						<div class="item_services inner_body">

							<img src="<?php echo base_url(); ?>uploads/<?php echo $about['image5']; ?>" alt="img not found" style="height:70px;width:70px;">

							<h5 class="mt-2"><strong><a href="#"><?php echo $about['middle_title_4']; ?></a></strong></h5>

							<p><?php echo $about['middle_description_4']; ?></p>

						</div>

					</div>

					<div class="col-md-4 col-sm-6" data-aos="zoom-out-left">

						<div class="item_services inner_body">

							<img src="<?php echo base_url(); ?>uploads/<?php echo $about['image6']; ?>" alt="img not found" style="height:70px;width:70px;">

							<h5 class="mt-2"><strong><a href="#"><?php echo $about['middle_title_5']; ?></a></strong></h5>

							<p><?php echo $about['middle_description_5']; ?></p>

						</div>

					</div>

				</div>

		</div>

	</div>

</div>

<!-- services end -->



<!-- about more start -->

<!-- <div class="container-fluid" id="about_more">
  <div class="container">
    <div class="row align-items-center">
      	<div class="col-md-6">
       	 	<img src="<?php echo base_url(); ?>uploads/<?php echo $about['image7']; ?>" alt="..." class="img-fluid mb-6 mb-md-0" style="height:360px;width:540px;">
	  	</div>
      	<div class="col-md-6">
        <h2><strong><?php echo $about['footer_title']; ?></strong></h2>
        <p class="font-size-sm text-gray-700 mb-6">
		    <?php echo $about['footer_description']; ?>
		</p>
		<a href="#" class="bth_read_more"> Read More  </a>
      	</div>
    </div> / .row 
  </div>
</div> -->

<!-- about more end -->

<?php } ?>



<!-- footer carosel start -->

<div class="footer_carosel_slider">

	<div class="container">

		<div class="owl-carousel owl-theme">

            <div class="item">

            	 <img src="<?php echo base_url(); ?>assets/home/img/slider1.png" alt="not-found" >

            </div>

            <div class="item">

            	 <img src="<?php echo base_url(); ?>assets/home/img/slider2.png" alt="not-found" >

            </div>

            <div class="item">

            	 <img src="<?php echo base_url(); ?>assets/home/img/slider3.png" alt="not-found" >

            </div>

            <div class="item">

            	 <img src="<?php echo base_url(); ?>assets/home/img/slider4.png" alt="not-found" >

            </div>

            <div class="item">

            	 <img src="<?php echo base_url(); ?>assets/home/img/slider5.png" alt="not-found" >

            </div>

            <div class="item">

            	 <img src="<?php echo base_url(); ?>assets/home/img/slider3.png" alt="not-found" >

            </div>

            <div class="item">

            	 <img src="<?php echo base_url(); ?>assets/home/img/slider2.png" alt="not-found" >

            </div>

        </div>

	</div>

</div>

<!-- footer carosel end -->

