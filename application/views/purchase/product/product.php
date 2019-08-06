
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container-fluid">
			<div class="page-title-box">
				<div class="row align-items-center">
					<div class="col-sm-6">
						<h3 class="page-title">Dashboard <small style="font-size: 12px;">&nbsp > &nbspSales Company List</small>
						</h3>
					</div>

				</div>
			</div>
			<!-- end row -->

			<!--forms start -->
			<div class="row">
				<div class="col-lg-8" style="padding: 0px;">
					<h3>Search Parts</h3>
				</div>
			</div>	
                
			<div class="row p-0">
				<div class="col-xl-8 col-md-12 col-sm-6 p-0">
					<div class="card">
						<div class="card-body">
							<div class="row">

								<div class="col-xl-3 col-md-4 col-sm-6">
									<select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="background: #36394c !important;border-color: #000 !important;position: absolute;    width: 50%;">-->
										<option value="">Euro</option>
										<option value="AE">ABC</option>
										<option value="VI">ABC</option>
										<option value="MC">ABC</option>
										<option value="DI">ABC</option>
									</select>
								</div>
								<div class="col-xl-9 col-md-4 col-sm-6">
									<input type="text" id="myInput" class="form-control ipt-rds" placeholder="Search..">
								</div>
							</div>      
						</div>
					</div>
					
					
					<div class="row" id="myList" style="padding: 0px;margin: 0px;margin-bottom: 30px;">
					    <?php foreach($data as $row){?>
						<div class="col-md-6" style="border: 0.5px solid #36394c;padding: 0;">
							<div class="card srchdv" style="margin-bottom: 0px;margin: 3px;padding: 0px;">
								<div class="row">
									<div class="col-md-10">
										<div class="col-md-12">
											<p>Manufacturer : <strong class="pp"><?php echo $row['manufacturer_name']; ?></strong>
												<br>
												Parts Number : <strong class="pp"><?php echo $row['part_number']; ?></strong>
											</p>
										</div>
									</div>
									<div class="col-md-2 coop">
										<a href=""><i class="ion ion-ios-paper thumb-md rounded-circle mr-2" data-toggle="tooltip" title="Copy"></i></a>
									</div>
								</div>
							</div>
							<div class="row" style="margin: 0px;">
								<div class="col-md-5" style="padding: 0px">
								    <?php if(!empty($row['product_image'])) {?>
									<img src="<? echo base_url(); ?>uploads/<?php echo $row['product_image']; ?>" style="width: 160px;height: 166px;">
									<?php }else { ?>
									<img src="<? echo base_url(); ?>uploads/dummy.png" style="width: 160px;height: 166px;">
									
								<?php }	?>
								</div>
								<div class="col-md-7" style="padding: 0px;">
									<div class="col-md-12" style="margin: 8px;">
										<p>Price : <small>USD</small> <strong class="pp"> <?php echo $row['web_price']; ?> </strong><br>
											John Wigg by Alf Agderson <br>
											Source: OBSO<br>
											Stock:<?php echo $row['total_qty']; ?> Available<br>
											Order Before 2pm GMT<br>
										<?php echo $row['lead_time']; ?></p>
									</div>
								</div>
							</div>
							<div class="card" style="margin-bottom: 0px;margin: 3px;">
								<div class="row">
									<div class="col-md-12">
										<p>Product Type : <?php echo $row['type']; ?><br>
											Supplier : <span style="color: #147fad">Grienert & Glatt</span> &nbsp <a href=""><i class="ion ion-ios-paper" style="color: #03a9f4;"></i></a>
										</p>
										<!-- <i class="fa fa-shield" aria-hidden="true"></i> -->
									</div>
								</div>
								<div class="row">
									<div class="col-md-6" >
										<button type="button" class="form-control addnew" style="border-radius: 25px;">Add to Quote</button>
									</div>
									<div class="col-md-6">
										<button type="button" class="form-control addnew" style="border-radius: 25px;">Order</button>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
						
						
					</div>
					
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="card">
						<div class="card-body">
							<div class="col-xl-12 col-md-4 col-sm-6 sup-bg p-0">
								<h6>Search Filter</h6>
							</div>
							<div class="col-xl-12 col-md-4 col-sm-6 sup-bg p-0">
								<div class="form-group">
									<select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
										<option value="">Sort By</option>
										<option value="">Part number A-Z</option>
										<option value="">Part number Z-A</option>
										<option value="">Manufacturer A-Z</option>
										<option value="">Manufacturer Z-A</option>
										<option value="">RRP (Lowest to Highest)</option>
										<option value="">RRP (Highest to Lowest)</option>
										<option value="">Web Price (Lowest to Highest)</option>
										<option value="">Web Price (Highest to Lowest)</option>
										<option value="">Part Quantity (Lowest to Highest)</option>
										<option value="">Part Quantity (Highest to Lowest)</option>
									</select>
								</div>
								<div class="form-group">
									<select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
										<option value="">Parts Condition </option>
										<option value="new">New</option>
										<option value="old">Old</option>
										<option value="Factory Sealed">Factory Sealed</option>
										<option value="Open Box">Open Box</option>
										<option value="Used Box">Used Box</option>
										<option value="Exchange">Exchange</option>
										<option value="Repair">Repair</option>
									</select>
								</div>
								<div class="form-group">
									<select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
										<option value="">Price</option>
										<option value="low">Low to High</option>
										<option value="hight">High to Low</option>
									</select>
								</div>
								<div class="form-group">
									<?php $countries = $this->common_model->select('country'); ?>
									<select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
										<option value="">Region/Country Select</option>
										<?php foreach($countries as $c => $country): ?>
											<option value="<?= $country['id'] ?>"><?= $country['name'] ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="col-xl-12 col-md-4 col-sm-6 sup-bg">
								<div class="button-items">
									<button type="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light btn-radius" data-toggle="modal" data-target=".bs-example-modal-lg">Add New Product</button>
								</div>
							</div>
						</div>
					</div>
				</div>        
			</div> 
		</div>
	</div>
</div>
</div>
<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header" style="padding: 0.5rem 1rem !important;    background: #323a4e;">
				<h5>Add new Product</h5>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="row">
						<div class="col-md-4">
							<input type="text" class="form-control" required data-parsley-maxlength="6" placeholder="First Name"/>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control" required data-parsley-maxlength="6" placeholder="Last Name"/>
						</div>
						<div class="col-md-4">
							<select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
								<option value="">Gender</option>
								<option value="AE">Male</option>
								<option value="VI">Female</option>
								<option value="OT">Other</option>
							</select>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-4">
							<select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
								<option value="">Designation</option>
								<option value="AE">abc</option>
								<option value="VI">abc</option>
								<option value="OT">abc</option>
							</select>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control" required data-parsley-maxlength="6" placeholder="Phone Number"/>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control" required data-parsley-maxlength="6" placeholder="Contact E-mail"/>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-8">
							<input type="text" class="form-control" required data-parsley-maxlength="6" placeholder="Address"/> 
						</div>
						<div class="col-md-4">
							<select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
								<option value="">Select Country</option>
								<option value="AE">abc</option>
								<option value="VI">abc</option>
								<option value="OT">abc</option>
							</select>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6">
							<input type="text" class="form-control" required data-parsley-maxlength="6" placeholder=""/>
						</div>
						<div class="col-md-6">
							<select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
								<option value="">Permission access: Sale</option>
								<option value="AE">abc</option>
								<option value="VI">abc</option>
								<option value="OT">abc</option>
							</select>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6">
							<p><b>Id Prof.: </b>(please upload passport or driving licence or NID)</p>
							<button type="button" class="form-control">Upload</button> 
						</div>
						<div class="col-md-6">
							<p><b>Employee Image :</b>(please upload recent photo)</p>
							<button type="button" class="form-control">Upload Image</button>
						</div>
					</div>
					<br><br>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<button type="button" class="form-control">Send</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList .srchdv").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>