<style type="text/css">
	.v_menu .active{
		background-color: #f5cc1c !important;
		color: white;
	}
	.stock_button{
		float: right;
	    width: 159px;
	    background-repeat: no-repeat;
	    background-size: 100% 100%;
	    height: 45px;
	    text-align: left;
	    padding-left: 30px;
	    padding-top: 12px;
	    text-transform: uppercase;
	    font-weight: 500;
	    font-size: 14px;
	    color: #fff;
	}
	.product_enquiry_abilitys a:hover{
		color: #fff !important;
	}
	.green_button{
	    background-image: url(http://bitzenith.com/obsoadmin//assets/home/img/gree.png);
	}
	.gray_button{
	    background-image: url(http://bitzenith.com/obsoadmin//assets/home/img/grey_button.png);
	}
	.p-b-10{
		padding-bottom: 10px;
	}
	.product_enquiry_abilitys{
		padding-top: 8px;
	}

	@media screen and  (max-width: 767px){	       
      	div#product_list_grid_view_row .col-md-3{
        	display: none;
      	}
      	.p-10{
      		padding: 0px 15px;
      	}
      	.product_fileter_tag{
		    padding: 12px 20px !important;
		    font-size: 20px !important;
		    text-transform: uppercase !important;
		    font-weight: 700 !important;
      	}
    }
    @media only screen and (max-width: 991px)
    {
		.product_fileter_tag{
		    padding: 12px 20px !important;
		    font-size: 20px !important;
		    text-transform: uppercase !important;
		    font-weight: 700 !important;
      	}
      	.p-10{
      		padding: 0px 15px;
      	}
      	h2.product_fileter_tag {
		    width: 100%;
		    border-radius: 5px;
		}
	}
</style>
<script>
	$(document).ready(function(){
	  	$(".product_fileter_tag").click(function(){
	    	$("#product_list_grid_view_row .col-md-3").toggle();
	  	});
	});
</script>
<?php
	$p_count = 0;
if(!empty($product))
{
	$p_count = count($product);
}
?>
<!-- main content  start -->
<div class="bradcums_pagination" style="background: #fee133;padding: 15px 0;">
	<div class="container">
	    <ol class="breadcrumb">
	      	<li class="breadcrumb-item">
	      		<a href="#">About <?= $p_count; ?> Results found</a>
	      		<span class="fas fa-angle-double-right"></span>
	      	</li>
	      	<li class="breadcrumb-item">
	      		<a href="#">Showing 1-10 </a>
	      		<span class="fas fa-angle-double-right"></span>
	      	</li>	      	
	      	<li class="breadcrumb-item">
	      		<a href="#">Results per page</a> &nbsp;<input type="number" name="name" value="10" style="width: 50px;border-radius: 4px;border: 1px solid #000;font-size: 12px;padding-left: 5px;background: none;">
	      	</li>
	    </ol>
	</div>
</div>
<div class="container">
	<div class="p-10">
		<h2 class="product_fileter_tag">Filter</h2>
	</div>
	<div class="row" id="product_list_grid_view_row">
		<div class="col-md-3">		
			<div class="form-product-search">
				<form action="#">				
					<div class="form-group" style="height: 600px;overflow-y: scroll;">
						<ul class="v_menu">
							<?php foreach ($allmanufacturer as $manufacturerall){ ?>
							  	<li <?= (isset($manfecture)&&$manfecture==preg_replace('/\s+/', '_', $manufacturerall['manufacturer']))?'class=active':'' ?>>
								  	<a href="<?php echo base_url(); ?>home/product/<?php echo preg_replace('/\s+/', '_', $manufacturerall['manufacturer']); ?>">
								  		<?php echo $manufacturerall['manufacturer']; ?>
								  	</a>
						  		</li>
							 <?php } ?>
						</ul>
					</div>
			  	</form>
			</div>
		</div>
		<div class="col-md-9">
			<div class="product_list_grid_view_tab_content">
			  	<div class="tab-content">
					<?php foreach ($product as $products){  ?>
				    <a href="<?php echo base_url(); ?>home/manufacturer/<?php echo $products['part_number']; ?>">
				    	<div id="home" class="tab-pane active product-add">
					    	<div class="main_list_view_product" >
					    		<div class="product_contant">
					    			<div class="col-md-6 pdl p-b-10">
						    			<p><strong>Manufacturer</strong> :
						    				<?php echo $products['manufacturer_name']; ?>
						    			</p>
						    		</div>
						    		<div class="col-md-6 pdl">
					    				<p class="text-sm-sm"><strong>Part Number</strong> &nbsp;&nbsp;:
					    					<?php echo $products['part_number']; ?>
					    				</p>
									</div>
									<div class="col-md-8 pdl">
					    				<p class="text-sm-sm"><strong>Description</strong> &nbsp;&nbsp; &nbsp; : <?php 
					    				if(strlen($products['description']) > 200)
					    				{
					    					echo substr($products['description'],0, 70)."..."; 
					    				}else{
					    					echo $products['description'];
					    				}
					    				?>
					    				</p>
				    				</div>
					    		</div>
					    		<div class="product_enquiry_abilitys">
					    			<span class="stock_button green_button">
					    			</span>
					    		</div>
					    	</div>
						</div>
				    </a>
			    	<?php } ?>	
			    	<!-- <div id="home" class="tab-pane product-add">
			    			    						    	<div class="main_list_view_product">
			    			    						    		<div class="product_contant">
			    			    						    			<div class="col-md-6 pdl p-b-10">
			    			    							    			<p><strong>Manufacturer</strong> :
			    			    							    				<a href="http://bitzenith.com/obsoadmin/home/manufacturer/123 456-789 Abcd">
			    			    							    					ABB					    				</a>
			    			    							    			</p>
			    			    							    		</div>
			    			    							    		<div class="col-md-6 pdl">
			    			    						    				<p class="text-sm-sm"><strong>Part Number</strong> &nbsp;&nbsp;:
			    			    						    					<a href="http://bitzenith.com/obsoadmin/home/manufacturer/123 456-789 Abcd"> 
			    			    						    						123 456-789 Abcd				    					</a>
			    			    						    				</p>
			    			    										</div>
			    			    										<div class="col-md-8 pdl">
			    			    						    				<p class="text-sm-sm"><strong>Description</strong> &nbsp;&nbsp; &nbsp; : 1794 Series, I/O Module, 8 pin				</p>
			    			    					</div>
			    			    						    		</div>
			    			    						    		<div class="product_enquiry_abilitys">
			    			    						    			<a href="http://bitzenith.com/obsoadmin/home/manufacturer/123 456-789 Abcd" class="stock_button gray_button">
			    			    						    				Available
			    			    						    			</a>
			    			    						    		</div>
			    			    		
			    			    						    	</div>
			    			    							</div>	 -->		    		
					<input type="hidden" id="next_content" value="11">
					<input type="hidden" id="manufecture" value="<?= $manfecture; ?>">	
					<!-- <div class="text-center mt-2">
						<button type="button" id="load" class="btn btn-primary">Load More</button>
					</div> -->
			    </div>
		  	</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#load").click(function(){
			load_more();
		});
	});
	function load_more()  {
		var val = $("#next_content").val(),
				manfecture = $('#manufecture').val();
		
	    $.ajax({
			type: 'get',
			url: "<?php echo base_url(); ?>home/loadMoreProduct",
			data: {
				page:val,q: manfecture
			},
	    success: function (response) {
				var content = $(".product-add").append(response);
				$("#next_content").val(Number(val)+10);
	    }
	    });
	}
</script>

<!-- main content  end  -->
<style type="text/css">
	.form-product-search input {
    background: transparent;
    border: 1px solid #000;
    border-radius: 20px;
    font-size: 13px;
}
.main_list_view_product {
    background: none;
    padding: 10px 0;
    margin-top: 0px;
    display: flex;
    position: relative;
    border-top: 1px solid #dad1d1;
}
hr {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1);
}
ul.v_menu li a {
	display: block;
	padding: 10px 15px;
	text-decoration: none;
	white-space: nowrap;
	text-align: left;
	color: #fff;
}
ul.v_menu li.active a {
	display: block;
	padding: 10px 15px;
	text-decoration: none;
	white-space: nowrap;
	text-align: left;
	color: #000;
}
ul.v_menu li a:hover {
	color: white;
	background: #f5cc1c;
}
ul.v_menu li a:focus {
	color: white;
	background: #f5cc1c;
}
.col-md-6{
	float: left;
}
.tab-content .tab-pane.active{
    background: #fff;
}
.tab-content .tab-pane:hover{
    background: #ddd;
}
.tab-content>.tab-pane {
    display: block;
}
</style>

