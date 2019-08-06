<!-- main content  end  -->
<style type="text/css">
	.stock a:hover{
		color: #fff !important;
	}
	.stock{
		height: 60px;
	}
	.green_button{
	    background-image: url(http://bitzenith.com/obsoadmin/assets/home/img/green_button.png);
	}
	.gray_button{
	    background-image: url(http://bitzenith.com/obsoadmin/assets/home/img/grey_button.png);
	}
	.stock_button{
	    width: 159px;
	    background-repeat: no-repeat;
	    background-size: 100% 100%;
	    height: 45px;
	    text-align: left;
	    padding: 20px 109px 20px 40px;
	    text-transform: uppercase;
	    font-weight: 500;
	    font-size: 14px;
	    color: #fff;
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
	    background-color: #f2f2f2;
	    background-clip: padding-box;
	    border: 1px solid #000000 !important;
	    border-radius: 4px;
	    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
	}
	.p-0{
		padding: 0px;
	}
	.product_single_form {
	    background: #f2f2f2;
	    border-radius: 10px;
	    overflow: hidden;
	}
	.fields_form_product input{
	    background: #f2f2f2;
	}
	p.manufacturers{
	    font-weight: 100;
	}
	p.manufacturers strong{
	    font-weight: bold;
	}
	#product_singe_form_row h2{
		font-weight: bold;
	}
	#product_singe_form_row {
	    padding-bottom: 50px;
	    padding-top: 80px;
	}
	.p-15{
		padding: 15px;
	}
	.p-20{
		padding: 20px;
	}
	.b-gray{
		background: #f2f2f2;
	}
	.btn-new{
		background: #fee133 !important;
		color: #000 !important;
		font-weight: 700 !important;
		border: 0px solid gray !important;
	}
	.red{
		color: red;
	}
</style>
<?php

$all_country=$this->common_model->get_all_country();
if(isset($product))
{
	if($product->manufacturer_name)
	{
		$breadcrumb = str_replace(' ', '_', $product->manufacturer_name);
	}
}
?>
<!-- main content  start -->
<div class="container-fluid p-0">
	<div class="bradcums_pagination" style="background: #fee133;padding: 15px 0;">
		<div class="container">
		    <ol class="breadcrumb">
		      	<li class="breadcrumb-item">
		      		<a href="#">Home</a>
		      		<span class="fas fa-angle-double-right"></span>
		      	</li>
		      	<li class="breadcrumb-item">
		      		<a href="<?= base_url('home/product/'); ?>">Manufacturer</a>
		      		<span class="fas fa-angle-double-right"></span>
		      	</li>	     
		      	<li class="breadcrumb-item">
		      		<?php
		      		if(isset($product))
		      		{ 
			      		?>
			      		<a href="<?= base_url('home/product/'.$breadcrumb); ?>">
			      			<?php
		      				if($product->manufacturer_name){ 
		      					echo $product->manufacturer_name; 
		      				}
			      			?>
			      		</a>
			      		<span class="fas fa-angle-double-right"></span>
			      		<?php
		      		}
		      		?>
		      	</li>
		      	<li class="breadcrumb-item active"><?php if(isset($product)){ if($product->part_number){ echo $product->part_number; } }else{ echo $part_number; }  ?></li>	     
		    </ol>
		</div>
	</div>
</div>
<div class="container">
	<div class="row" id="product_singe_form_row">
		<div class="col-md-4 text-left" style="padding-top:10px;padding-bottom: 40px;">
			<h2><?php if(isset($product)){ echo $product->part_number; }else{ echo $part_number; } ?></h2>
			<hr />
			<!-- <p class="product_name"><span>Produst Name : </span> </p> -->
			<p class="manufacturers"><span><strong> Manufacturer</strong></span><br /><?php if(isset($product)){ if($product->manufacturer_name){ echo $product->manufacturer_name; } } ?></p>
			<hr />
			<p class="manufacturers"><strong>Product Type / Category</strong> <span><br><?php if(isset($product)){ if($product->type) { echo $product->type; } } ?></span>

			<!-- <p class="manufacturers"><span>Description :</span> <?//php echo $product->description; ?></p> -->
			<hr />
			<strong>Part Availability</strong><br />
			<div class="stock" style="padding-top: 20px;">
				<?php
				if(isset($product))
				{
					?>
	    			<a href="http://bitzenith.com/obsoadmin/home/manufacturer/123 456-789 Abcd" >
	    				<img src="<?= base_url()?>assets/home/img/gree.png" style="height:55px;">
	    			</a>
					<?php
				}else{
					?>
	    			<a href="http://bitzenith.com/obsoadmin/home/manufacturer/123 456-789 Abcd" >
	    				<img src="<?= base_url()?>assets/home/img/Avai.png" style="height:55px;">
	    			</a>
					<?php
				}
				?>
			</div>
		</div>		

			<!-- <div class="col-md-12" style="border: 1px solid rgb(245, 204, 28);padding: 15px 15px;border-radius: 30px;">
				<p class="product_name"><span>Manufacturer : </span> <?//php echo $product->manufacturer_name; ?></p>
				<p class="manufacturers"><span>Type :</span> <?//php echo $product->type; ?></p>
				<p class="manufacturers"><span>Part Number :</span> #<?//php echo $product->part_number; ?></p>
				<p class="manufacturers"><span>Description :</span> <?//php echo $product->description; ?></p>
				
			</div> -->

		<div class="col-md-8">
			<div class="product_single_form">
				<div class="form-header" style="color:#fee133;"> Get your part quickly </div>
				<div class="fields_form_product">
					<?php $this->load->helper('form'); ?>

                    <?php echo form_open(base_url() . 'home/save' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>

                    	<input type="hidden" name="notification_under_button" value="under_button">

					    <div class="form-group w-50">
					      <label>Your Details</label>
					      <input type="text" class="form-control" name="enquiry[full_name]" placeholder="Full Name" required><br />
					      <input type="text" class="form-control" placeholder="Company Name" name="enquiry[company_name_front]" required><br />
					      <input type="email" class="form-control" id="email" placeholder="Email Address" name="enquiry[email]" required><br />
					      <input type="Number" class="form-control" placeholder="Contact Number" name="enquiry[number]" required><br />
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
					    <div class="form-group w-50">
				    		<label>Part Details</label>
							<div style="background-color: #fee133;padding: 5px;">
					    		<input type="text" name="qty[0][part]" value="<?php if(isset($product)){ echo $product->part_number; }else{ echo $part_number; } ?>" class="form-control" style="margin-bottom: 2px;" required>
					    		<select name="qty[0][qty]" class="form-control" required>
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
				    		<!-- <br />
				    		<button class="btn btn-default" style="width: 150px; padding: 8px 5px !important; float: left;">Add New Part</button>		    		
				    		<button class="btn btn-default" style="    width: 50px; padding: 8px 5px !important; float: right;"><i class="fa fa-trash"></i> </button>
				    		<br/>
				    		<br/> -->
				    		<br/>
					    	<textarea placeholder="Notes" name="enquiry[lead2]" style="height: 105px;" class="form-control" required></textarea><br />
					    	<input type="hidden" name="page" value="frontend">
					    	<button type="submit" name="submit" class="btn btn-default btn-new form-control">Submit Enquiry</button>
					    </div>
					    <div class="form-group" style="display: inline-block;">					    	
						<?php
						if($this->session->flashdata('under_button'))
						{
							?>
								<div class="alert alert-success" style="background-color: #61aa1d;color:#fff;">
									<span><?= $this->session->flashdata('under_button'); ?></span>
								</div>								
							<?php
						}
						?>
					    </div>
					  </form>

				</div>			  	
			</div>
		</div>
	</div>
	<div class="row" id="tabs_content">
		<div class="col-md-12">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs product_single_tabs">
			  	<li class="nav-item">
			    	<a class="nav-link active" data-toggle="tab" href="">Product Specification</a>
			  	</li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
			  	<div class="tab-pane p-15 b-gray active">
				  	<div class="row">
				  		<div class="col-md-4">
			  				<b class="">Brand/Manufacturer </b><br />
			  				<p class=""><?php if(isset($product)){ echo $product->manufacturer_name; }?> </p>
				  		</div>
				  		<div class="col-md-4">
			  				<b class=""> Part Number</b><br />
			  				<p class=""><?php if(isset($product)){ echo $product->part_number; } ?> </p>
				  		</div>
				  		<div class="col-md-4">
			  				<b class="">Description</b><br />
			  				<p class=""><?php if(isset($product)){ echo $product->description; } ?> </p>
				  		</div>
				  	</div>
			  	</div>
			</div>
		</div>
	</div>

	<div class="row" id="tabs_content">
		<div class="col-md-12">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs product_single_tabs">
			  	<li class="nav-item">
			    	<a class="nav-link active" data-toggle="tab" href="#shpping">Shipping</a>
			  	</li>
			  	<li class="nav-item">
			    	<a class="nav-link" data-toggle="tab" href="#warranty">Warranty</a>
			  	</li>
			  	<li class="nav-item">
			    	<a class="nav-link" data-toggle="tab" href="#returns">Returns</a>
			  	</li>
			  	<li class="nav-item">
			    	<a class="nav-link" data-toggle="tab" href="#payments">Payment</a>
			  	</li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
			  	<div class="tab-pane p-20 b-gray active" id="shpping">
				  	<div class="row">
				  		<div class="col-md-8">
				  			<p>We will strive to get your part delivered as quickly and chepaly as possible, using one of our valued delivery partners from around the world. </p>
				  			<hr>
				  			<p>See our full <a class="red" href='<?= base_url(); ?>home/shipping'>shipping Information</a> </p>

				  		</div>
				  	</div>
			  	</div>

			  	<div class="tab-pane p-20 b-gray fade" id="warranty">
				  	<div class="row">
				  		<div class="col-md-4 col-sm-6">
				  			<div class="more_information">
				  				<h5>Warranty</h5>
				  				<p>Lorem Ipsum is simply dummy text of the
									printing and typesetting industry. Lorem 
									Ipsum has been the industry's</p>
				  			</div>
				  		</div>
				  	</div>
			  	</div>

			  	<div class="tab-pane p-20 b-gray fade" id="returns">
				  	<div class="row">
				  		<div class="col-md-4 col-sm-6">
				  			<div class="more_information">
				  				<h5>Returns</h5>
				  				<p>Lorem Ipsum is simply dummy text of the
									printing and typesetting industry. Lorem 
									Ipsum has been the industry's</p>
				  			</div>
				  		</div>
				  	</div>
			  	</div>

			  	<div class="tab-pane p-20 b-gray fade" id="payments">
				  	<div class="row">
				  		<div class="col-md-4 col-sm-6">
				  			<div class="more_information">
				  				<h5>Payment</h5>
				  				<p>Lorem Ipsum is simply dummy text of the
									printing and typesetting industry. Lorem 
									Ipsum has been the industry's</p>
				  			</div>
				  		</div>
				  	</div>
			  	</div>
			</div>
		</div>
	</div>
</div>
